<!--Blog Area Start-->
<div class="blog-page-area struktur">
    <div class="container">
        <div class="row">
            <div class="blog-details">
                <!-- Start single blog -->
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <!-- single-blog start -->
                    <article class="blog-post-wrapper">
                        <div class="blog-banner">
                            <a href="#" class="blog-images">
                                <img src="<?= base_url('upload/berita/' . $row->image); ?>" alt="">
                            </a>
                            <div class="blog-content bor text-justify">
                                <div class="blog-category" style="padding-top: 20px;">
                                    <h6><span class="label label-success"><?= $row->kategori; ?></span></h6>
                                </div>
                                <h3><?= strtoupper($row->judul); ?></h3>
                                <?= html_entity_decode($row->isi); ?>
                            </div>
                        </div>
                    </article>
                    <div class="clear"></div>
                </div>
            </div>
            <?php $this->load->view('template/sidebar'); ?>
        </div>
    </div>
</div>
</div>
<!--End of Blog Area-->