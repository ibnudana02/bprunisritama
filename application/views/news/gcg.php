<div class="about-area struktur" style="margin-top: 40px;">
    <div class="container">
        <div class="row">
            <div class="blog-grid">
                <!-- Start single blog -->
                <?php foreach ($data as $row) : ?>
                    <div class="col-md-4 col-sm-4 col-xs-12 blog">
                        <div class="single-blog">
                            <div class="blog-content">
                                <div class="blog-title" style="padding: 0 25px;">
                                    <a href="">
                                        <h5><?= $row->laporan ?></h4>
                                    </a>
                                </div>
                                <div class="single-page-head">
                                    <div class="download-btn">
                                        <div class="about-btn text-center">                                            
                                            <a href="<?= base_url('upload/laporan/') ?>" class="down-btn">Download <i class="fa fa-file-pdf-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- End single blog -->
            </div>
        </div>
    </div>
</div>