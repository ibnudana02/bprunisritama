    <!-- Start Slider Area -->
    <div class="intro-area">
        <div class="main-overly"></div>
        <div class="intro-carousel">
            <?php foreach ($slider as $row) : ?>
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="<?php echo base_url('upload/slider/' . $row->image); ?>" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 tombol">
                                            <!-- layer 3 -->
                                            <div class="layer-1-3 text-center ">
                                                <a href="#" class="ready-btn ">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- End Slider Area -->