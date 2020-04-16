<!-- Start project Area -->
<div class="about-area struktur">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Penghargaan</h2>
        </div>
        <hr>
        <div class="row">
            <div class="project-content">
                <?php foreach ($data as $row) : ?>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <!-- single-awesome-project start -->
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#">
                                    <img src="<?= base_url('upload/awards/' . $row->gambar) ?>" alt="" />
                                </a>
                                <div class="add-actions text-center">
                                    <a class="venobox" data-gall="myGallery" href="<?= base_url('upload/awards/' . $row->gambar) ?>">
                                        <i class="port-icon icon icon-picture"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="project-dec">
                                <h4><?= $row->nama; ?></h4>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- End main content -->
</div>
<!-- End project Area -->