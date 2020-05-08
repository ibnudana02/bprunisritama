<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="banner-content">
                    <div class="brand-items">
                        <div class="single-brand-item">
                            <a href="#"><img src="<?= base_url('assets/') ?>img/client/ayokebank.jpg" alt=""></a>
                        </div>
                        <div class="single-brand-item">
                            <a href="#"><img src="<?= base_url('assets/') ?>img/client/lps.png" alt=""></a>
                        </div>
                        <div class="single-brand-item">
                            <a href="#"><img src="<?= base_url('assets/') ?>img/client/ojk.jpg" alt=""></a>
                        </div>
                        <div class="single-brand-item">
                            <a href="#"><img src="<?= base_url('assets/') ?>img/client/perbarindo.jpg" alt=""></a>
                        </div>
                        <div class="single-brand-item">
                            <a href="#"><img src="<?= base_url('assets/') ?>img/client/YLPI.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h5>Memberikan Pelayanan Yang Prima Kepada Nasabah <br> Dalam Kegiatan Penghimpunan Dana Dan Penyaluran Kredit </h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="services-all">
                <?php foreach ($data as $row) : ?>
                    <div class="col-md-4 col-sm-6 col-xs-12 ">
                        <div class="single-services">
                            <div class="service-inner layanan">
                                <a class="service-icon" href="#">
                                    <i class="flaticon-point-of-service"></i>
                                </a>
                                <div class="service-content">
                                    <h4><a href="#"><?= strtoupper($row->layanan); ?></a></h4>
                                    <p class="text-justify"><?= ucwords($row->deskripsi); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="col-md-12 text-center">
                    <a class="load-more-btn" href="#">More services</a>
                </div>
            </div>
        </div>
    </div>
</div>