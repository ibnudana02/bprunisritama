    <!-- Start Service area -->
    <div class="services-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Our <span class="color">Services</span></h3>
                        <p>Memberikan Layanan Prima Kepada Nasabah Dalam Penghimpunan Dana Dan Penyaluran Kredit. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="services-all">
                    <!-- Start services -->
                    <?php foreach ($data as $row) : ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-services">
                                <div class="service-inner">
                                    <a class="service-icon" href="#">
                                        <i class="flaticon-presentation-17"></i>
                                    </a>
                                    <div class="service-content">
                                        <!-- <a><a href="#">Business Analytics</a></h4> -->
                                        <h4><a href="#"><?= strtoupper($row->layanan); ?></a></h4>
                                        <p><?= ucwords($row->deskripsi); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!-- End services -->
                    <div class="col-md-12 text-center">
                        <a class="load-more-btn" href="services.html">More services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service area -->