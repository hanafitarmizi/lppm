<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/22/2018
 * Time: 10:36 AM
 */

namespace LPPMKP\Lppm\Controllers;

use Phalcon\Mvc\Controller;

use LPPMKP\Lppm\Models\Beritas;

class WebberitaController extends Controller
{
    public function webberitaAction()
    {

        $berita = Beritas::find();
        $this->view->setVars([
            'beritas' => $berita

        ]);


    }


    public function tambahAction()
    {


    }


    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "webberita",
                'action' => 'webberita'
            ]);

            return;
        }

        $gambar = $this->request->getUploadedFiles()[0];
        $nama = $gambar->getName();
        $pindahkan = $gambar->moveTo('img/berita_image/' . $nama);
        $berita = new Beritas();
        $berita->jenis_berita = $this->request->getPost("jenis_berita");
        $berita->judul_berita = $this->request->getPost("judul");
        $berita->isi_berita = $this->request->getPost("isi");
        $berita->penulis = $this->session->get('nama_user');
        $berita->tanggal_berita = date('Y-m-d');

        $berita->lampiran_berita = $nama;

        if (!$berita->save()) {
            foreach ($berita->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "webberita",
                'action' => 'tambah'
            ]);
            return;
        }
        if ($pindahkan == true) {
            $this->flash->success("Berita Berhasil Ditambahkan");

            $this->dispatcher->forward([
                'controller' => "webberita",
                'action' => 'webberita'
            ]);
        }

    }


    public function savesAction()
    {
        if ($this->request->isPost()) {
            $post = $this->request->getPost();
            $editberita = Beritas::findFirst($post['id_berita']);
            $editberita->assign(
                [
                    'judul_berita' => $post['judul'],
                    'isi_berita' => $post['isi'],
                    'jenis_berita' => $post['jenis_berita'],
                    'penulis' => $this->session->get('nama_user'),
                    'tanggal' => date('Y-m-d'),


                ]
            );


            if ($editberita->save()) {
                $this->flashSession->success('BERITA BERHASIL DI PERBARUI ');
                $this->dispatcher->forward([
                    'controller' => "webberita",
                    'action' => "webberita"
                ]);

            } else {
                $this->flashSession->error('BERITA GAGAL DIPERBARUI');
                $this->dispatcher->forward([
                    'controller' => "webberita",
                    'action' => "edit"
                ]);

                foreach ($editberita->getMessages() as $message) {
                    $this->flashSession->error($message);
                }

            }


        }


    }


    public function editAction($id_berita)
     {
         $berita = Beritas::findFirstByid_berita($id_berita);


      $this->view->setVars([
        'beritas' => $berita

    ]);

    }





    //  public function editAction($id_berita)
    //{
    //  if ($this->request->isPost()) {
    //    $post = $this->request->getPost();
    //  $berita = Beritas::findFirstById_berita($post['id_berita']);
    //$berita->assign(
    //  [
    //    'jenis_berita'=> $post['jenis_berita'],
    //  'judul_berita' => $post['judul'],
    //'isi_berita' => $post['isi'],
    //'penulis' => $this->session->get('nama_user'),
    //'tanggal' => date('Y-m-d'),
    //   ]
    //   );


    // if ($berita->save()) {
    //   $this->flashSession->success('Berita berhasil diperbarui');
    // $this->dispatcher->forward([
    // 'controller' => "webberita",
    // 'action' => 'webberita'
    // ]);
    // } else {
    //   $this->flashSession->error('jadwal khusus gagal diperbarui');
    // foreach ($berita->getMessages() as $message) {
    //   $this->flashSession->error($message);
    //}

    //$this->dispatcher->forward([
    //  'controller' => "webberita",
    //'action' => 'webberita'

    //}


//}

        //$berita = Beritas::findFirstByid_berita($id_berita);
        //$this->view->setVars([

          //  'beritas' => $berita,

       // ]);


    //}








    public function deleteAction($id_berita)
    {


        $berita =Beritas::findFirstByid_berita($id_berita);

        if(!$berita) {
            $this->flash->error ("Berita Tidak ditemukan");

            $this->dispatcher->forward ([
                'controller'=>"webberita",
                'action'=>"webberita"

            ]);

            return;
        }


        if (!$berita->delete()){

            foreach($berita->getMesagges() as $message){
                $this->flash->error($message);
            }

            $this->dispatcher->forward ([
                'controller'=>"webberita",
                'action' =>"webberita"

            ]);
            return;
        }

        $this->flash->success("Berita telah berhasil Di hapus");

        $this->dispatcher->forward ([
            'controller'=>"webberita",
            'action'=>"webberita"
        ]);

    }







}