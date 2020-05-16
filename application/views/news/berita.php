<div class="blog-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h4>Berita <span class="color">Terbaru</span></h4>
                </div>
            </div>
        </div>
        <div class="row" style="padding-bottom: 20px;">
            <div class="blog-grid">
                <?php foreach ($berita as $row) : ?>
                    <!-- Start single blog -->
                    <div class="col-md-4 col-sm-6 col-xs-12 blog">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a class="image-scale" href="<?= 'berita/'.$row->slug ?>">
                                    <img src="<?= base_url('upload/berita/' . $row->image) ?>" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-category" style="padding: 0 15px;">
                                    <h6><span class="label label-success"><?= $row->kategori; ?></span></h6>
                                </div>
                                <div class="blog-title">
                                    <a href="<?= 'berita/'.$row->slug ?>">
                                        <h5><?= ucwords($row->judul); ?></h4>
                                    </a>
                                </div>
                                <div class="berita-more">
                                    <a href="<?= 'berita/'.$row->slug ?>">Selengkapnya <i class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End single blog -->
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>