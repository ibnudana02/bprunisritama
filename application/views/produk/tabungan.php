<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="breadcrumb">
                <div class="bread-inner">
                    <ul class="breadcrumb-bg">
                        <li class="home-bread">Home</li>
                        <li>About us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start project Area -->
<div class="project-area-2">
    <div class="container-fluid">
        <div class="row">
            <div class="project-content project-2">
                <!-- single-awesome-project start -->
                <?php foreach ($data as $row) : ?>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="<?= base_url('assets/'); ?>#">
                                    <img src="<?= base_url('assets/'); ?>img/project/p1.jpg" alt="" />
                                </a>
                                <div class="add-actions text-center">
                                    <a class="venobox" data-gall="myGallery" href="<?= base_url('assets/'); ?>img/project/p1.jpg">
                                        <i class="port-icon icon icon-picture"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="project-dec">
                                <h4><?= $row->produk; ?></h4>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- End main content -->
</div>
<!-- End project Area -->