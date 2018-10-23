<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/18/2018
 * Time: 1:52 PM
 */

?>



<body>
<!-- Pre loader -->


<div id="app" class="paper-loading">

    <main>
        <div id="primary" class="p-t-b-100 height-full ">
            <div class="container">
                <?php echo $this->getContent(); ?>
                <h2> Tambah Berita Baru</h2>

                    <form action="<?= $this->url->get('berita/create') ?>" method="post" role="form"
                          enctype="multipart/form-data">

                        <div class="form-group">
                            <select class="form-control" id="select" name="jenis_berita">
                                <option>-----Pilih Jenis Berita-----</option>
                                <option value="pengabdian">pengabdian</option>
                                <option value="penelitian">penelitian</option>
                                <option value="diskusi">diskusi</option>
                                <option value="beasiswa">beasiswa</option>
                                <option value="akademik">akademik</option>
                            </select>
                        </div>



                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg"
                                   placeholder="Judul Pengumuman" name="judul">
                        </div>
                        <h4>Masukan isi berita</h4>
                        <div class="form-group ">
                            <textarea class="ckeditor" id="ckeditor" name="isi"  class="form-control"></textarea>
                        </div>


                        <div class="form-group">
                            <code>Upload Lampiran</code>
                            <input type="file"
                                   placeholder="Upload Lampiran"   name="lampiran_berita"/>

                        </div>
                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Tambah">

                    </form>

            </div>
        </div>
        <!-- #primary -->
    </main>
    <!-- Login modal -->


</div>
<!--End Page page_wrrapper -->


</body>

