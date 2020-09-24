<!--Blog Area Start-->
<div class="blog-page-area struktur">
    <div class="container">
        <div class="row">
            <div class="blog-details">
                <!-- Start single blog -->
                <div class="col-md col-sm col-xs-12">
                    <!-- single-blog start -->
                    <article class="blog-post-wrapper" style="margin-top: 35px;">
                        <h3 class="text-center"><?= ucwords($row->produk); ?></h3>
                        <div class="blog-banner">
                            <a class="blog-images">
                                <img src="<?= base_url('upload/produk/' . $row->image); ?>" alt="">
                            </a>
                            <div class="blog-content bor text-justify">
                                <div class="blog-category" style="padding-top: 20px;">
                                    <!-- <h6><span class="label label-success"><?= $row->jenis; ?></span></h6> -->
                                </div>
                                <!-- <h3><?= strtoupper($row->produk); ?></h3> -->
                                <?php echo $row->deskripsi; ?>
                                <a href="<?= base_url($row->link) ?>" class="btn btn-info btn btn-outline-success">Saya Berminat</a>
                            </div>
                        </div>
                    </article>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- <?//php $this->load->view('template/sidebar_produk'); ?> -->
        </div>
    </div>
</div>
<!--End of Blog Area-->