<!-- header-area start -->
<div id="sticker" class="header-area hidden-xs">
    <div class="container">
        <div class="row">
            <!-- logo start -->
            <div class="col-md-3 col-sm-3">
                <div class="logo">
                    <!-- Brand -->
                    <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                        <!-- <img src="<?php echo base_url('assets/'); ?>img/logo/logo.png" alt=""> -->
                        <img src="<?php echo base_url('assets/'); ?>img/logo/unisri-logo.png" alt="">
                    </a>
                </div>
            </div>
            <!-- logo end -->
            <div class="col-md-9 col-sm-9">
                <!-- mainmenu start -->
                <nav class="navbar navbar-default">
                    <div class="collapse navbar-collapse" id="navbar-example">
                        <div class="main-menu">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="pagess" href="<?= base_url() ?>">Home</a></li>
                                <li><a class="pagess">Tentang Kami</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?= base_url('tentang_kami') ?>">Profil Perusahaan</a></li>
                                        <li><a href="<?= base_url('tentang_kami/sejarah') ?>">Sejarah</a></li>
                                        <li><a href="<?= base_url('tentang_kami/visi_misi') ?>">Visi & Misi</a></li>
                                        <li><a href="<?= base_url('tentang_kami/manajemen') ?>">Board Manajemen</a></li>
                                        <li><a href="<?= base_url('tentang_kami/struktur') ?>">Struktur Organisasi</a></li>
                                        <li><a href="<?= base_url('tentang_kami/awards') ?>">Penghargaan</a></li>
                                        <li><a href="<?= base_url('tentang_kami/location') ?>">Lokasi Kantor</a></li>
                                    </ul>
                                </li>
                                <li><a class="pagess">Produk dan Layanan</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?= base_url('produk/pmb') ?>">Pembayaran Mahasiswa</a></li>
                                        <li><a href="<?= base_url('produk/') ?>">Online Payment</a></li>
                                        <li class="dropdown"><a class="dropbtn" href="<?= base_url('produk/') ?>">Deposito</a>
                                            <div class="dropdown-content">
                                                <a href="#">Deposito Masyarakat</a>
                                                <a href="#">Deposito Berjangka</a>
                                            </div>
                                        </li>
                                        <li class="dropdown"><a class="dropbtn" href="<?= base_url('produk/') ?>">Tabungan</a>
                                            <div class="dropdown-content">
                                                <a href="#">Tabungan Sejahtera</a>
                                                <a href="#">Tabungan Umroh</a>
                                                <a href="#">TabunganKu</a>
                                                <a href="#">Tabungan Qurban</a>
                                            </div>
                                        </li>
                                        <li class="dropdown"><a class="dropbtn" href="<?= base_url('produk/') ?>">Kredit</a>
                                            <div class="dropdown-content">
                                                <a href="#">Kredit Bakulan</a>
                                                <a href="#">Kredit Konsumtif</a>
                                                <a href="#">Kredit Produktif</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="pagess">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?= base_url('news/') ?>">Artikel</a></li>
                                        <li><a href="<?= base_url('news/') ?>">Laporan Publikasi</a></li>
                                        <li><a href="<?= base_url('news/') ?>">GCG Report</a></li>
                                        <li><a href="<?= base_url('news/') ?>">Pengkinian Data Nasabah</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('tentang_kami/contact') ?>">Hubungi Kami</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- mainmenu end -->
            </div>
        </div>
    </div>
</div>
<!-- header-area end -->
<!-- mobile-menu-area start -->
<div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <div class="logo">
                        <a href="index.html"><img src="<?php echo base_url('assets/'); ?>img/logo/unisri-logo.png" alt="" /></a>
                    </div>
                    <nav id="dropdown">
                        <ul>
                            <li><a class="pagess" href="index.html">Home</a></li>
                            <li><a class="pagess" href="#">Tentang Kami</a>
                                <ul class="sub-menu">
                                    <li><a href="<?= base_url('tentang_kami') ?>">Profil Perusahaan</a></li>
                                    <li><a href="<?= base_url('tentang_kami/sejarah') ?>">Sejarah</a></li>
                                    <li><a href="<?= base_url('tentang_kami/visi_misi') ?>">Visi & Misi</a></li>
                                    <li><a href="<?= base_url('tentang_kami/manajemen') ?>">Board Manajemen</a></li>
                                    <li><a href="<?= base_url('tentang_kami/struktur') ?>">Struktur Organisasi</a></li>
                                    <li><a href="<?= base_url('tentang_kami/awards') ?>">Penghargaan</a></li>
                                    <li><a href="<?= base_url('tentang_kami/location') ?>">Lokasi Kantor</a></li>
                                </ul>
                            </li>
                            <li><a class="pagess" href="#">Produk dan Layanan</a>
                                <ul class="sub-menu">
                                    <li><a href="<?= base_url() ?>">Pembayaran Mahasiswa</a></li>
                                    <li><a href="<?= base_url() ?>">Online Payment</a></li>
                                    <li><a href="<?= base_url() ?>">Deposito</a></li>
                                    <li><a href="<?= base_url() ?>">Tabungan</a></li>
                                    <li><a href="<?= base_url() ?>">Kredit</a></li>
                                </ul>
                            </li>
                            <li><a class="pagess" href="#">News</a>
                                <ul class="sub-menu">
                                    <li><a href="<?= base_url('news/') ?>">Artikel</a></li>
                                    <li><a href="<?= base_url('news/') ?>">Laporan Publikasi</a></li>
                                    <li><a href="<?= base_url('news/') ?>">GCG Report</a></li>
                                    <li><a href="<?= base_url('news/') ?>">Pengkinian Data Nasabah</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url('tentang_kami/contact') ?>">Hubungi Kami</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area end -->