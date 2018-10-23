<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/22/2018
 * Time: 10:49 AM
 */

?>

<?php



?>


<section class="p-t-b-50 s4 masonry-post">
    <div class="container">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Berita LPPM

                    </h3>

                    <?php echo $this->getContent(); ?>
                    <div class="row">

                        <div class="col-md-2 ">
                            <button type="button" class="btn btn-primary  btn-lg" data-toggle="modal" data-target="#modaltambahkandata"><i class="icon-plus-square s-24"></i>Tambahkan



                            </button>
                        </div>
                    </div>




                </div>
            </div>
            <!-- /.box-header -->

            <!-----Modal form tambah data -->


            <div class="modal fade" id="modaltambahkandata" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog width-600" role="document">
                    <div class="modal-content no-r "><a href="#" data-dismiss="modal" aria-label="Close"
                                                        class="paper-nav-toggle active"><i></i></a>
                        <div
                            class="modal-body no-p">
                            <div class="text-center p-40 p-b-0">
                                <img src="assets/img/dummy/u4.png" alt="">
                                <h3>Masukkan Pengumuman Baru</h3>

                            </div>
                            <div class="light p-40 b-t-b">
                                <form action="<?= $this->url->get('berita/create') ?>" method="post" role="form"
                                      enctype="multipart/form-data">

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg"
                                               placeholder="Judul Pengumuman" name="judul">
                                    </div>
                                    <div class="form-group ">
                                        <textarea id="elm1"  placeholder="Masukkan isi" name="isi" class="form-control"></textarea>
                                    </div>


                                    <div class="form-group">
                                        <code>Upload Lampiran</code>
                                        <input type="file"
                                               placeholder="Upload Lampiran"   name="lampiran_pengumuman"/>

                                    </div>
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Tambah">

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!---end modal-->
            <div class="box-body">

                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Jenis Berita</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Tanggal</th>

                        <th style="width: 40px">Aksi</th>
                    </tr>

                    <?php foreach ($beritas as $berita) : ?>
                        <tr>
                            <td><?= $berita->id_berita ?></td>
                            <td><?=$berita->jenis_berita ?></td>
                            <td>
                                <?=$berita->judul_berita ?>
                            </td>
                            <td> <?=$berita->isi_berita ?></td>
                            <td> <?=$berita->tanggal_berita ?></td>

                            <td>
                                <button type="button" class="btn btn-danger"
                                        data-toggle="modal" data-target="#modalhapus<?= $berita->id_berita ?>"  ><i class="icon-trash-can3">

                                    </i>

                                </button>

                                <button type="button" class="btn btn-warning " data-toggle="modal" data-target="#modaledit<?= $berita->id_berita ?>"><i class="icon-edit">

                                    </i>

                                </button>
                            </td>






                        </tr>






                        <div class="modal fade " tabindex="-1" role="dialog" id="modalhapus<?= $berita->id_berita ?>"
                             aria-labelledby="mySmallModalLabel"
                             aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="text-center">Apakah Anda Yakin Ingin Menghapus Pengumuman ini</h4>
                                    </div>

                                    <div class="modal-body">

                                        <div class="row">
                                            <form action="<?= $this->url->get('kelola/delete/'.$pengumuman->id_pengumuman)?>" method="post">


                                                <div class="col-lg-6">
                                                    <button class="btn btn-success  btn-block" >Ya</button>
                                                </div>
                                                <div class="col-lg-6">
                                                    <button class="btn btn-default btn-block" data-dismiss="modal">Tidak</button>
                                                </div>
                                        </div>


                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

                    <?php endforeach;?>

                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin float-right">
                    <li class="page-item"><a href="#" class="page-link">«</a>
                    </li>
                    <li class="page-item"><a href="#" class="page-link">1</a>
                    </li>
                    <li class="page-item"><a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item"><a href="#" class="page-link">3</a>
                    </li>
                    <li class="page-item"><a href="#" class="page-link">»</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.box -->

        <!-- /.col -->

        <!-- /.row -->

    </div>
    <!-- /.box-body -->
    </div>
    <!-- /.box -->
    </div>
    </div>
</section>

