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
            <div class="intro-berita">
                <?php foreach ($berita as $row) : ?>
                    <div class="slider-berita">
                        <div class="well-services">
                            <div class="services-img">
                                <a href="" class="">
                                    <img src="<?= base_url('upload/berita/' . $row->image) ?>" alt="">
                                </a>
                                <span class="top-icon"><i class="flaticon-graph-6"></i></span>
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <h6><span class="label label-success"><?= $row->kategori; ?></span></h6>
                                    <h5><?= ucwords($row->judul); ?></h5>
                                    <a class="service-btn" href="#">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>