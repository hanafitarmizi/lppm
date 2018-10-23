<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/4/2018
 * Time: 12:17 PM
 */

namespace LPPMKP\Lppm\Controllers;

use Phalcon\Mvc\Controller;

use LPPMKP\Lppm\Models\Pengumumans;


class KelolaController extends Controller
{
    public function kelolaAction()
    {
        $pengumuman = Pengumumans::find();
        $this->view->setVars([
            'pengumumans' => $pengumuman

        ]);


    }




public function createAction()
{
    if (!$this->request->isPost()) {
        $this->dispatcher->forward([
            'controller' => "kelola",
            'action' => 'kelola'
        ]);

        return;
    }

    $dokumen = $this->request->getUploadedFiles()[0];
    $nama= $dokumen->getName();
    $pindahkan = $dokumen->moveTo('doc/pengumuman_dokumen/' . $nama);
    $pengumuman = new Pengumumans();
    $pengumuman->judul_pengumuman = $this->request->getPost("judul");
    $pengumuman->isi_pengumuman = $this->request->getPost("isi");
    $pengumuman->tanggal_pengumuman = date('Y-m-d');
    $pengumuman->lampiran_pengumuman = $nama;

    if (!$pengumuman->save()) {
        foreach ($pengumuman->getMessages() as $message) {
            $this->flash->error($message);
        }

        $this->dispatcher->forward([
            'controller' => "kelola",
            'action' => 'kelola'
        ]);
        return;
    }
    if ($pindahkan == true) {
        $this->flash->success("Pengumuman Berhasil Ditambahkan");

        $this->dispatcher->forward([
            'controller' => "kelola",
            'action' => 'kelola'
        ]);
    }

}




    public function editAction()
    {
        if ($this->request->isPost()) {
            $post = $this->request->getPost();
            $editpengumuman = Pengumumans::findFirst($post['id_pengumuman']);
            $editpengumuman->assign(
                [
                    'judul_pengumuman' => $post['judul'],
                    'isi_pengumuman' => $post['isi'],

                ]
            );


            if ($editpengumuman->save()) {
                $this->flashSession->success('Pengumuman berhasil diperbarui');
                $this->dispatcher->forward ([
                    'controller'=>"kelola",
                    'action'=>"kelola"
                ]);

            } else {
                $this->flashSession->error('Pengumuman gagal diperbarui');
                foreach ($editpengumuman->getMessages() as $message) {
                    $this->flashSession->error($message);
                }

            }






        }





    }





public function deleteAction($id_pengumuman)
{


  $pengumuman =Pengumumans::findFirstByid_pengumuman($id_pengumuman);

  if(!$pengumuman) {
      $this->flash->error ("pengumuman tidak ditemukan");

      $this->dispatcher->forward ([
          'controller'=>"kelola",
          'action'=>"kelola"

      ]);

return;
  }


  if (!$pengumuman->delete()){

      foreach($pengumuman->getMesagges() as $message){
          $this->flash->error($message);
      }

      $this->dispatcher->forward ([
          'controller'=>"kelola",
          'action' =>"kelola"

      ]);
      return;
  }

  $this->flash->success("Pengumuman berhasil di hapus");

  $this->dispatcher->forward ([
     'controller'=>"kelola",
    'action'=>"kelola"
  ]);

}}
