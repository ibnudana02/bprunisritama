<div class="col-md-4 col-sm-4 col-xs-12">
    <div class="left-head-blog">
        <div class="left-blog-page">
            <!-- recent start -->
            <div class="left-blog">
                <h4>recent post</h4>
                <div class="recent-post">
                    <?php foreach ($berita as $row) : ?>
                        <!-- start single post -->
                        <div class="recent-single-post">
                            <div class="post-img">
                                <a href="<?= 'berita/'.$row->slug ?>">
                                    <img src="<?= base_url('upload/berita/' . $row->image); ?>">
                                </a>
                            </div>
                            <div class="pst-content">
                                <p class="jam"><a href="<?= base_url('berita/' . $row->slug) ?>"><?= strtoupper(substr($row->judul, 0, 42)); ?></a>
                                    <div class="blog-meta">
                                        <span class="date-type">
                                            <i class="fa fa-calendar"></i>
                                            <?= $row->update_on; ?>
                                        </span>
                                    </div>
                            </div>
                        </div>
                        <!-- End single post -->
                    <?php endforeach; ?>
                </div>
                <div class="text-center berita-load">
                    <a href="<?= base_url('berita') ?>">Berita Lainnya</a>
                </div>
            </div>
            <!-- recent end -->
        </div>
    </div>
</div>