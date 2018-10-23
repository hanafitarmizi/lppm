<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/5/2018
 * Time: 1:55 PM
 */

namespace LPPMKP\Lppm\Controllers;
use Phalcon\Mvc\Controller;
use LPPMKP\Lppm\Models\Pengguna;

class AuthController extends Controller
{


    public function initialize()
    {
        if ($this->session->has('user') == true) {
            $this->response->redirect('penjadwalan/error/found/404');
        }
    }


    public function loginAction () {




    }


 public function loginprosesAction(){

     $id_user = $this->request->getPost('id_user');
     $password = $this->request->getPost('password');

     $pengguna = Pengguna::findFirstByid_user($id_user);


     if($pengguna->id_user==$id_user &&$pengguna->password == $password) {

         $this->session->set('id_user', $pengguna->id_user);
         $this->session->set('password', $pengguna->password);
         $this->session->set('nama_user', $pengguna->nama_user);
         $this->response->redirect('kelola');
     }
     elseif ( $pengguna->id_user != $id_user || $pengguna->password != $password) {
         $this->flashSession->notice('Username Password Tidak Benar');
         $this->response->redirect('masuk');
     }

     else {
         $this->flashSession->error('Username Atau Password Tidak Ada');
         $this->response->redirect('masuk');
     }

     }





    public function logoutAction()
    {
        $penggunas = pengguna::find();

        $isi_pengguna = false;
        foreach ($penggunas as $pengguna) {
            if ($this->session->get('id_user') == $pengguna->id_user) {
                $isi_pengguna = true;
            }
        }
        if ($isi_pengguna == true) {
            $this->session->destroy();
            $this->response->redirect('masuk');

        }else{
            $this->response->redirect('');

        }
    }





}