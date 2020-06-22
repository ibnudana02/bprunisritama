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
                            <a class="blog-images">
                                <img src="<?= base_url('upload/produk/' . $row->image); ?>" alt="">
                            </a>
                            <div class="blog-content bor text-justify">
                                <div class="blog-category" style="padding-top: 20px;">
                                    <!-- <h6><span class="label label-success"><?= $row->jenis; ?></span></h6> -->
                                </div>
                                <h3><?= strtoupper($row->produk); ?></h3>
                                <?php echo $row->deskripsi; ?>
                                <a href="<?= base_url($row->link) ?>" class="btn btn-info btn btn-outline-success">Saya Berminat</a>
                            </div>
                        </div>
                    </article>
                    <div class="clear"></div>
                </div>
            </div>
            <?php $this->load->view('template/sidebar_produk'); ?>
        </div>
    </div>
</div>
<div class="share-sossial-buttons">
    <!-- Untuk Facebook -->
    <a href="http://www.facebook.com/sharer.php?u=https://dumetschool.com" target="_blank">
        <img src="https://www.kursuswebsite.org/wp-content/uploads/2017/03/facebook.png" alt="Facebook" />
    </a>

    <!-- Untuk Google+ -->
    <a href="https://plus.google.com/share?url=https://dumetschool.com" target="_blank">
        <img src="https://www.kursuswebsite.org/wp-content/uploads/2017/03/google.png" alt="Google" />
    </a>

    <!-- Untuk Twitter -->
    <a href="https://twitter.com/share?url=https://dumetschool.com&text=Simple%20Share%20Buttons&hashtags=simplesharebuttons" target="_blank">
        <img src="https://www.kursuswebsite.org/wp-content/uploads/2017/03/twitter.png" alt="Twitter" />
    </a>
</div>
<!--End of Blog Area-->