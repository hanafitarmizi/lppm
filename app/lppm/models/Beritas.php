<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/22/2018
 * Time: 10:38 AM
 */

namespace LPPMKP\Lppm\Models;


class Beritas extends \Phalcon\Mvc\Model
{

    public $id_berita;
    public $jenis_berita;
    public $judul_berita;
    public $isi_berita;
    public $penulis;
    public $tanggal_berita;
    public $lampiran_berita;


    public function initialize()
    {
        $this->setSchema("db_web_lppm");
        $this->setSource("berita_web");
    }



    public function getSource()
    {
        return 'berita_web';
    }


    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }



    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}