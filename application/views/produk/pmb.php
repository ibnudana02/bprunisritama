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
                                <img src="<?= base_url('upload/produk/' . $row->image); ?>" alt="">
                            </a>
                            <div class="blog-content bor">
                                <div class="blog-category" style="padding-top: 20px;">
                                    <!-- <span><?= $row->jenis; ?></span> -->
                                    <h6><span class="label label-success"><?= $row->jenis; ?></span></h6>
                                </div>
                                <h3><?= strtoupper($row->produk); ?></h3>
                                <?= ucfirst($row->deskripsi); ?>
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