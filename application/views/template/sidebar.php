<div class="col-md-4 col-sm-4 col-xs-12">
    <div class="left-head-blog">
        <div class="left-blog-page">
        </div>
        <div class="left-blog-page">
            <!-- recent start -->
            <div class="left-blog">
                <h4>recent post</h4>
                <div class="recent-post">
                    <?php foreach ($berita as $row) : ?>
                        <!-- start single post -->
                        <div class="recent-single-post">
                            <div class="post-img">
                                <a href="#">
                                    <img src="<?= base_url('upload/berita/' . $row->image); ?>">
                                </a>
                            </div>
                            <div class="pst-content">
                                <p><a href="<?= base_url('artikel/' . $row->slug) ?>"><?= strtoupper($row->judul); ?></a>
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
            </div>
            <!-- recent end -->
        </div>
        <div class="left-blog-page">
            <div class="left-blog">
                <h4>Kategori</h4>
                <ul>
                    <?php foreach ($category as $row) : ?>
                        <li><a href="<?= base_url($row->link) ?>"><?php echo strtoupper($row->kategori); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

    </div>
</div>