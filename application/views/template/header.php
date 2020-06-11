<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $judul; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/'); ?>img/logo/ico.png">
    <link rel="stylesheet" href="<?= base_url('assets/leaflet/leaflet.css') ?>">
    <script src="<?= base_url('assets/leaflet/leaflet.js') ?>"></script>
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap-datepicker.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/owl.transitions.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/meanmenu.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/icon.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/flaticon.css">
    <!-- magnific css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/magnific.min.css">
    <!-- venobox css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/venobox.css">
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/responsive.css">

    <!-- modernizr css -->
    <script src="<?php echo base_url('assets/'); ?>js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/orgchart.js"></script>
</head>

<body>
    <div id="preloader"></div>
    <header class="header-one">
        <!-- Start top bar -->
        <div class="topbar-area fix ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="topbar-left">
                            <div class="quote-button hidden-xs">
                                <a href="<?= base_url('admin') ?>" target="_blank" class="quote-btn" title="Quick view">Login</a>
                            </div>
                            <div class="top-social hidden-xs">
                                <ul>
                                    <li><a href="https://www.instagram.com/bpr_unisritama" class="instagram" target="_blank" data-toggle="tooltip" data-placement="right" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://wa.me/6282391031212" class="whatsapp" target="_blank" data-toggle="tooltip" data-placement="right" title="Whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                                    <li><a href="https://twitter.com/bpr_unisritama" class="twitter" target="_blank" data-toggle="tooltip" data-placement="right" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/bankunisritama/" class="facebook" target="_blank" data-toggle="tooltip" data-placement="right" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-sm-6">
                        <div class="topbar-right">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="left" title="Telpon Kantor"><i class="fa fa-phone"></i> (0761) - 63381</a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="left" title="Email Corporate"><i class="fa fa-envelope"></i> unisritamabpr@yahoo.co.id</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End top bar -->
        <!-- Menu area -->
        <?php $this->load->view('template/menu'); ?>
        <!-- End menu area -->
    </header>