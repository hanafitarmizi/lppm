<?php



?>


<section class="p-t-b-50 s4 masonry-post">
    <div class="container">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Pengumuman LPPM

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
                                <form action="<?= $this->url->get('kelola/create') ?>" method="post" role="form"
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
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Tanggal</th>

                            <th style="width: 40px">Aksi</th>
                        </tr>

                        <?php foreach ($pengumumans as $pengumuman) : ?>
                        <tr>
                            <td><?= $pengumuman->id_pengumuman ?></td>
                            <td><?=$pengumuman->judul_pengumuman ?></td>
                            <td>
                            <?=$pengumuman->isi_pengumuman ?>
                            </td>
                        <td> <?=$pengumuman->tanggal_pengumuman ?></td>
                            <td>
                                <button type="button" class="btn btn-danger"
                                        data-toggle="modal" data-target="#modalhapus<?= $pengumuman->id_pengumuman ?>"  ><i class="icon-trash-can3">

                                    </i>

                                </button>

                                <button type="button" class="btn btn-warning " data-toggle="modal" data-target="#modaledit<?= $pengumuman->id_pengumuman ?>"><i class="icon-edit">

                                    </i>

                                </button>
                            </td>




                                <div class="modal fade" id="modaledit<?= $pengumuman->id_pengumuman ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog width-600" role="document">
                                        <div class="modal-content no-r "><a href="#" data-dismiss="modal" aria-label="Close"
                                                                            class="paper-nav-toggle active"><i></i></a>
                                            <div
                                                    class="modal-body no-p">
                                                <div class="text-center p-40 p-b-0">
                                                    <img src="assets/img/dummy/u4.png" alt="">
                                                    <h3>Pebarui Pengumuman</h3>

                                                </div>
                                                <div class="light p-40 b-t-b">
                                                    <form action="<?= $this->url->get('kelola/edit') ?>" method="post" role="form"
                                                          enctype="multipart/form-data">

                                                        <input type="hidden" name="id_pengumuman" value="<?= $pengumuman->id_pengumuman ?>">

                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-lg"
                                                                   name="judul" value="<?=$pengumuman->judul_pengumuman ?>">
                                                        </div>
                                                        <div class="form-group ">
                                                            <textarea id="elm1"   name="isi" class="form-control" value=" <?=$pengumuman->isi_pengumuman ?>"></textarea>
                                                        </div>



                                                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Ubah">

                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>






                            <div class="modal fade " tabindex="-1" role="dialog" id="modalhapus<?= $pengumuman->id_pengumuman ?>"
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
