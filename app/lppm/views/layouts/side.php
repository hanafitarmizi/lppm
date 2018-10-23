<ul>

    <li>
        <a class="waves-effect" href="<?= $this->url->get('penjadwalan') ?>">
            <i class="zmdi zmdi-view-dashboard"></i><span>Dashboard</span></a>
    </li>
    <?php if ($this->session->get('user')->hak_akses == 'kordinatorTA' || $this->session->get('user')->hak_akses == 'kajur'): ?>
        <li class="text-muted menu-title">Koordinator TA</li>
        <li>
            <a class="waves-effect" href="<?= $this->url->get('penjadwalan/jadwal-seminar/data-request') ?>">
                <i class="zmdi zmdi-mail-send"></i><span>Data Request Seminar</span></a>
        </li>
        <li>
            <a class="waves-effect" href="<?= $this->url->get('penjadwalan/jadwal-seminar/data-selesai') ?>">
                <i class="zmdi zmdi-archive"></i><span>Data Selesai Seminar</span></a>
        </li>
        <li>
            <a class="waves-effect" href="<?= $this->url->get('penjadwalan/rule-jadwal') ?>">
                <i class="zmdi zmdi-8tracks"></i><span>Rule Jadwal Seminar</span></a>
        </li>
        <li>
            <a class="waves-effect" href="<?= $this->url->get('penjadwalan/jadwal-mengajar') ?>">
                <i class="zmdi zmdi-view-list"></i><span>Jadwal Mengajar Dosen</span></a>
        </li>
        <li class="has_sub">
            <a class="waves-effect " href="javascript:void(0);">
                <i class="zmdi zmdi-invert-colors"></i>
                <span>Tambahan</span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="list-unstyled" style="display: none;">
                <li>
                    <a href="<?= $this->url->get('penjadwalan/telegram') ?>">
                        <i class="zmdi zmdi-mail-send"></i><span>Telegram bot</span></a>
                </li>
                <li>
                    <a href="<?= $this->url->get('penjadwalan/rule-jadwal/show-calendar') ?>">
                        <i class="zmdi zmdi-calendar"></i><span>Kalender Nasional</span>
                    </a>
                </li>
                <li>
                    <a href="<?= $this->url->get('penjadwalan/jadwal-mengajar/cek-nip-kosong-pada-jadwal-kuliah') ?>">
                        <i class="zmdi zmdi-block-alt"></i><span>Cek NIP Kosong</span></a>
                </li>

            </ul>
        </li>
        <li>
            <a class="waves-effect" href="<?= $this->url->get('penjadwalan/jadwal-mengajar') ?>">
                <i class="zmdi zmdi-view-list"></i><span>Jadwal Kuliah</span></a>
        </li>
        <li>
            <a class="waves-effect" href="<?= $this->url->get('penjadwalan/dosen/pembimbing') ?>">
                <i class="zmdi zmdi-graduation-cap"></i><span>Dosen Pembimbing</span></a>
        </li>
    <?php elseif ($this->session->get('user')->hak_akses == 'mahasiswa'): ?>
        <li class="text-muted menu-title">Mahasiswa TA</li>
        <li>
            <a class="waves-effect"
               href="<?= $this->url->get('penjadwalan/index/jadwal-seminar-dan-bimbingan') ?>">
                <i class="zmdi zmdi-assignment-return"></i><span>Jadwal TA</span></a>
        </li>
        <li>
            <a class="waves-effect"
               href="<?= $this->url->get('penjadwalan/jadwal-bimbingan/booking-jadwal-bimbingan') ?>">
                <i class="zmdi zmdi-assignment-o"></i><span>Booking Bimbingan</span></a>
        </li>
        <li>
            <a class="waves-effect" href="<?= $this->url->get('penjadwalan/jadwal-bimbingan/data-request') ?>">
                <i class="zmdi zmdi-assignment-account"></i><span>Bimbingan Saya</span></a>
        </li>
        <li>
            <a class="waves-effect" href="<?= $this->url->get('penjadwalan/jadwal-seminar/buat-jadwal-seminar') ?>">
                <i class="zmdi zmdi-assignment-o"></i></i><span>Booking Jadwal Seminar</span></a>
        </li>

        <li>
            <a class="waves-effect" href="<?= $this->url->get('penjadwalan/jadwal-seminar/data-request') ?>">
                <i class="zmdi zmdi-assignment"></i><span>Seminar Saya</span></a>
        </li>
    <?php endif; ?>



    <?php if ($this->session->get('user')->hak_akses == 'dosen' || $this->session->get('user')->hak_akses == 'kordinatorTA'): ?>
        <li class="text-muted menu-title">Dosen</li>
        <li>
            <a class="waves-effect" href="<?= $this->url->get('penjadwalan/jadwal-seminar/jadwal-dosen') ?>">
                <i class="zmdi zmdi-graduation-cap"></i><span>Jadwal Seminar Saya</span></a>
        </li>
        <li>
            <a class="waves-effect " href="javascript:void(0);">
                <i class="zmdi zmdi-assignment-o"></i>
                <span>Set Bimbinganku</span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="list-unstyled" style="display: none;">
                <li>
                    <a href="<?= $this->url->get('penjadwalan/jadwal-bimbingan/set-jadwal-bimbingan') ?>">Set Jadwal
                        Bimbingan</a>
                </li>
                <li>
                    <a href="<?= $this->url->get('penjadwalan/jadwal-bimbingan/data-set-jadwal-bimbingan') ?>">
                        Data Set Bimbingan
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="waves-effect " href="javascript:void(0);">
                <i class="zmdi zmdi-assignment"></i>
                <span>Jadwal Bimbinganku</span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="list-unstyled" style="display: none;">
                <li>
                    <a href="<?= $this->url->get('penjadwalan/jadwal-bimbingan/data-request-dosen-validate') ?>">
                        Data Jadwal Bimbingan
                    </a>
                </li>
                <li>
                    <a href="<?= $this->url->get('penjadwalan/jadwal-bimbingan/data-request-dosen') ?>">
                        Data Request Bimbingan
                    </a>
                </li>

                <li>
                    <a href="<?= $this->url->get('penjadwalan/jadwal-bimbingan/jadwal-bimbingan-selesai') ?>">
                        Jadwal Bimbingan Selesai
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="waves-effect " href="javascript:void(0);">
                <i class="zmdi zmdi-accounts-alt"></i>
                <span>Mahasiswaku</span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="list-unstyled" style="display: none;">
                <li>
                    <a href="<?= $this->url->get('penjadwalan/jadwal-bimbingan/mahasiswaku/proposal') ?>">Bimbingan
                        Proposal</a>
                </li>
                <li>
                    <a href="<?= $this->url->get('penjadwalan/jadwal-bimbingan/mahasiswaku/hasil') ?>">Bimbingan
                        Hasil</a>
                </li>
                <li>
                    <a href="<?= $this->url->get('penjadwalan/jadwal-bimbingan/mahasiswaku/sidang') ?>">Bimbingan
                        Sidang</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="waves-effect " href="javascript:void(0);">
                <i class="zmdi zmdi-attachment"></i>
                <span>Jadwal Lain Saya</span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="list-unstyled" style="display: none;">
                <li>
                    <a href="<?= $this->url->get('penjadwalan/jadwal-mengajar/data') ?>">
                        </i><span>Jadwal mengajar</span>
                    </a>
                </li>
                <li>
                    <a href="<?= $this->url->get('penjadwalan/dosen/pembimbing/' . base64_encode($this->session->get('user')->nip_nim) . '/1') ?>">
                        <span>Jadwal Khusus</span>
                    </a>

                </li>
            </ul>
        </li>


    <?php endif; ?>
    <?php if ($this->session->get('user')->hak_akses == 'kajur' || $this->session->get('user')->hak_akses == 'kordinatorTA'): ?>
        <li class="text-muted menu-title">Ketua Jurusan</li>
        <li>
            <a class="waves-effect" href="<?= $this->url->get('penjadwalan/index/laporan') ?>">
                <i class="zmdi zmdi-assignment"></i><span>Laporan</span></a>
        </li>
        <li>
            <a class="waves-effect" href="<?= $this->url->get('penjadwalan/rule-jadwal/seminar-day') ?>">
                <i class="zmdi zmdi-assignment-o"></i><span>Buat Seminar Day</span></a>
        </li>


    <?php endif; ?>


</ul>