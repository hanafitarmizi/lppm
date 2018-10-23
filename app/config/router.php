<?php

use Phalcon\Mvc\Router\Group as RouterGroup;

class Lppm extends RouterGroup
{
    public function initialize()
    {
        // Default paths
        $this->setPaths(
            [
                'module' => 'lppm',
                'namespace' => 'LPPMKP\Lppm\Controllers',
            ]
        );

        $this->setPrefix('');
        $this->add('/', 'index::index');


        #kelola

        $this->add('/kelola', 'kelola::kelola');
        $this->add('/masuk', 'auth::login');
        $this->add('/keluar', 'auth::logout');

        $this->add('/loginproses', 'auth::loginproses');

        #pengumuman
        $this->add('/kelola/create', 'kelola::create');
        $this->add('/kelola/delete/{id_pengumuman}','kelola::delete');
        $this->add('/kelola/edit','kelola::edit');

        #berita
        $this->add('/berita', 'webberita::webberita');
        $this->add('/berita/tambah', 'webberita::tambah');
        $this->add('/berita/create', 'webberita::create');
        $this->add('/berita/delete/{id_berita}','webberita::delete');
        $this->add('/berita/edit/{id_berita}','webberita::edit');
        $this->add('/berita/saves','webberita::saves');
    }

}


class Office extends RouterGroup
{
    public function initialize($di)
    {
        // Default paths
        $this->setPaths(
            [
                'module' => 'office',
                'namespace' => 'LPPMKP\Office\Controllers',
            ]
        );

        // All the routes start with /blog
        $this->setPrefix('/office');

        $this->add('/', ['controller' => 'index', 'action' => 'index']);
//        $this->add('/errors/show404', 'error::show404');

        $this->add('/:params', [
                'controller' => 'index',
                'action' => 'index',
                'params' => 3,
            ]
        );
        $this->add('/:controller/:params', [
                'controller' => 1,
                'action' => 'index',
                'params' => 3,
            ]
        );
        $this->add('/:controller/:action/:params', [
                'controller' => 1,
                'action' => 2,
                'params' => 3,
            ]
        );
    }
}

class Monitoring extends RouterGroup
{
    public function initialize($di)
    {
        // Default paths
        $this->setPaths(
            [
                'module' => 'monitoring',
                'namespace' => 'LPPMKP\Monitoring\Controllers',
            ]
        );

        // All the routes start with /blog
        $this->setPrefix('/monitoring');

        $this->add('/', ['controller' => 'index', 'action' => 'index']);

        $this->add('/:params', [
                'controller' => 'index',
                'action' => 'index',
                'params' => 3,
            ]
        );
        $this->add('/:controller/:params', [
                'controller' => 1,
                'action' => 'index',
                'params' => 3,
            ]
        );
        $this->add('/:controller/:action/:params', [
                'controller' => 1,
                'action' => 2,
                'params' => 3,
            ]
        );
    }
}

$router = $di->getRouter();


$router->mount(
    new Lppm()
);
$router->mount(
    new Office()
);

$router->mount(
    new Monitoring()
);

// Define your routes here

$router->handle();
