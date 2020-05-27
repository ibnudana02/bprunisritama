<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $heading; ?></h1>
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <!-- start card for gcg -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h6><a href="<?= base_url('admin/laporan') ?>">Company Report</a></h6>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $laporanCount; ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('admin/in_mail') ?>"> <i class="fas fa-fw fa-file-signature fa-2x text-gray-300"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start card for produk -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                <h6><a href="<?= base_url('admin/produk'); ?>">Produk</a></h6>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $produkCount; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-dolly-flatbed fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start card for berita -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                <h6><a href="<?= base_url('admin/berita'); ?>">Berita</a></h6>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $beritaCount; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-newspaper fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start card for Manajemen  -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                <h6><a href="#">Manajemen</a></h6>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">#</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start card for jenis produk  -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                <h6><a href="<?= base_url('admin/jenis'); ?>">Jenis Produk</a></h6>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jenisCount; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start card for Layanan  -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                <h6><a href="#">Layanan</a></h6>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $layananCount; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start card for Pegawai  -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                <h6><a href="<?= base_url('admin/pegawai'); ?>">Pegawai</a></h6>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pegawaiCount; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start card for Penghargaan  -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                <h6><a href="<?= base_url('admin/awards'); ?>">Penghargaan</a></h6>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $awardsCount; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->