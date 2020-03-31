<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- <title>Home - Bank Unisritama</title> -->
    <title><?= $judul; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/'); ?>img/logo/favicon.ico"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/'); ?>img/logo/ico.png">

    <!-- all css here -->

    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap4.css"> -->
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/owl.carousel.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/owl.theme.default.css"> -->
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
</head>

<body>

    <!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

    <div id="preloader"></div>
    <header class="header-one">
        <!-- Start top bar -->
        <div class="topbar-area fix hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="topbar-left">
                            <div class="quote-button">
                                <a href="#" class="quote-btn" title="Quick view" data-toggle="modal" data-target="#quoteModal">free consultaion</a>
                            </div>
                            <div class="top-social">
                                <ul>
                                    <li><a href="https://www.linkedin.com/company/pt-bpr-unisritama" target="_blank" data-toggle="tooltip" data-placement="right" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com/bpr_unisritama" target="_blank" data-toggle="tooltip" data-placement="right" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://wa.me/6282391031212" target="_blank" data-toggle="tooltip" data-placement="right" title="Whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                                    <li><a href="https://twitter.com/bpr_unisritama" target="_blank" data-toggle="tooltip" data-placement="right" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/bankunisritama/" target="_blank" data-toggle="tooltip" data-placement="right" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6 col-sm-6">
                        <div class="topbar-right">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="left" title="Email Corporate"><i class="fa fa-envelope"></i> unisritamabpr@yahoo.co.id</a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="left" title="Telpon Kantor"><i class="fa fa-phone"></i> (0761) - 63381</a></li>
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
    <!-- header end -->