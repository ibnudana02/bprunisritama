<div class="blog-area bg-color-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h4>Berita <span class="color">Terbaru</span></h4>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($berita as $row) : ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="well-services">
                        <div class="services-img">
                            <a href="" class="image-scale">
                                <img src="<?= base_url('upload/berita/' . $row->image) ?>" alt="">
                            </a>
                            <span class="top-icon"><i class="flaticon-graph-6"></i></span>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4><?= $row->kategori; ?></h4>
                                <p><?= strtoupper($row->judul); ?></p>
                                <a class="service-btn" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
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

<div class="container">
    <div class="intro-slider">
        <div class="slider-gambar">
            <img src="<?= base_url('assets/') ?>img/client/ayokebank.jpg" alt="">
        </div>
        <div class="slider-gambar">
            <img src="<?= base_url('assets/') ?>img/client/YLPI.jpg" alt="">
        </div>
        <div class="slider-gambar">
            <img src="<?= base_url('assets/') ?>img/client/perbarindo.jpg" alt="">
        </div>
        <div class="slider-gambar">
            <img src="<?= base_url('assets/') ?>img/client/ojk.jpg" alt="">
        </div>
        <div class="slider-gambar">
            <img src="<?= base_url('assets/') ?>img/client/lps.png" alt="">
        </div>
    </div>
</div>