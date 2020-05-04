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