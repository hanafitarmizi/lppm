<?php
/**
 * Created by PhpStorm.
 * User: ahmadfauzirahman
 * Date: 23/05/18
 * Time: 18:16
 */
?>

<div class="user-img">
    <img src="<?= $this->url->get('img/foto_user/' . $this->session->get('foto')) ?>" alt="user-img"
         title="Mat Helme"
         class="img-circle img-thumbnail img-responsive">
    <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
</div>
<h5 class="text-capitalize"><a href="#"><?= $this->session->get('user')->nama ?></a></h5>

<ul class="list-inline">
    <li>
        <a href="#">
            <i class="zmdi zmdi-settings"></i>
        </a>
    </li>
    <li>
        <a href="" data-toggle="modal" data-target="#modalLogout" class="text-custom">
            <i class="zmdi zmdi-power"></i>
        </a>
    </li>

</ul>
<a class="btn btn-default btn-block" href="<?= $this->url->get('') ?>">TA</a>