<head>
    <?php echo $script_captcha; ?>
</head>
<!-- Start contact Area -->
<div class="contact-page" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p class="classic-title">
                    <span>Information</span>
                </p>
                <p><b>PT. BPR Unisritama</b></p>
                <?php foreach ($data as $row) : ?>
                    <p class="classic-title">
                        <span><?= ucwords($row->kantor); ?></span>
                    </p>
                    <div class="contact-icon" style="margin-bottom: 10px;">
                        <div class="contact-inner">
                            <a href="#"><i class="icon icon-map-marker"></i><span><?= ucwords($row->alamat) ?></span></a>
                            <a href="#"><i class="icon icon-phone"></i><span><?= $row->telp ?></span></a>
                        </div>
                    </div>
                    <!-- <br> -->
                <?php endforeach; ?>
            </div>
            <!-- End contact icon -->
            <div class="col-md-6 col-sm-6 col-xs-12" style="padding-bottom: 60px;">
                <div class="contact-form">
                    <div class="row">
                        <form id="contactForm" method="POST" action="<?= base_url('contact') ?>" class="contact-form">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <?php echo $captcha ?>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <button type="submit" id="submit" class="contact-btn">Submit</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End contact Form -->
        </div>
    </div>
</div>