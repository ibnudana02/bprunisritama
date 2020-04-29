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
                                        <div class="col-md-12">
                                            <!-- layer 1 -->
                                            <div class="layer-1-2">
                                                <h1 class="title2">World resolutions for <span class="color">business leaders</span></h1>
                                            </div>
                                            <!-- layer 2 -->
                                            <div class="layer-1-1 ">
                                                <p>A consulting or consultancy firm is a business of one or more experts that provides professional advice.</p>
                                            </div>
                                            <!-- layer 3 -->
                                            <div class="layer-1-3">
                                                <a href="#" class="ready-btn left-btn">Our Services</a>
                                                <a href="#" class="ready-btn right-btn">Our Projects</a>
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