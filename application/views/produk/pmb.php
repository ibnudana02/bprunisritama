<!--Blog Area Start-->
<div class="blog-page-area area-padding">
    <div class="container">
        <div class="row">
            <div class="blog-details">
                <!-- Start single blog -->
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <!-- single-blog start -->

                    <article class="blog-post-wrapper">
                        <div class="blog-banner">
                            <a href="#" class="blog-images">
                                <!-- <img src="<?= base_url('assets/') ?>img/blog/pmb.jpg" alt=""> -->
                                <img src="<?= base_url('upload/produk/' . $row->image); ?>" alt="">
                            </a>
                            <hr>
                            <div class="blog-content">
                                <div class="blog-category">
                                    <!-- <span>Pembayaran Mahasiswa</span> -->
                                    <span><?= $row->jenis; ?></span>
                                </div>
                                <!-- <h4>The universal acceptance of Consultation has given a tremendous</h4> -->
                                <h3><?= strtoupper($row->produk); ?></h3>

                                <?= ucfirst($row->deskripsi); ?>

                            </div>
                        </div>
                    </article>

                    <div class="clear"></div>
                </div>
                <!-- single-blog end -->
            </div>
            <!-- End main column -->
            <!-- End main column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="left-head-blog">
                    <div class="left-blog-page">
                        <!-- search option start -->
                        <form action="#">
                            <div class="blog-search-option">
                                <input type="text" placeholder="Search...">
                                <button class="button" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                        <!-- search option end -->
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
            <!-- End left sidebar -->
        </div>
        <!-- End row -->
    </div>
</div>
</div>
<!--End of Blog Area-->