<!-- Start Footer bottom Area -->
<footer class="footer-1">
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <div class="footer-logo">
                                <a href="#"><img src="<?php echo base_url('assets/'); ?>img/logo/unisri-logo1.png" alt=""></a>
                            </div>
                            <p><b>PT. BPR Unisritama</b></p>
                            <p><b>Kantor Pusat </b><br>Jl. Soekarno-Hatta No. 03, Desa Kubang Jaya, Kec. Siak Hulu, Kabupaten Kampar, Riau</p>
                            <br>
                            <p>Telp: <b>(0761) 63381</b><br>
                                Email: <b>unisritamabpr@yahoo.co.id</b><br>
                                Website: <b>www.bprunisritama.com</b>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-4 col-sm-4 col-xs-12 fanpage">
                    <div class="footer-content">
                        <div class="footer-head">
                            <h4 class="footer-title"><span>Facebook Fanpage</span></h4>
                        </div>
                        <div class="">
                            <!-- <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbankunisritama%2F&tabs=timeline&width=300&height=280&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="300" height="280" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> -->
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <h4 class="footer-title"><span>Kategori Berita</span></h4>
                            <ul class=" footer-list">
                                <li><a href="<?= base_url('kategori_berita/berita_terbaru') ?>">Berita Terbaru</a></li>
                                <li><a href="<?= base_url('kategori_berita/profil') ?>">Profil Perusahaan</a></li>
                                <li><a href="<?= base_url('kategori_berita/milad') ?>">Milad</a></li>
                                <li><a href="<?= base_url('produk') ?>">Produk</a></li>
                            </ul>
                        </div>
                        <br>
                        <div class="footer-head">
                            <h4 class="footer-title"><span>Follow Us</span></h4>
                            <div class="foot-social">
                                <ul>
                                    <li><a href="https://www.instagram.com/bpr_unisritama" class="instagram" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram "></i></a></li>
                                    <li><a href="https://wa.me/6282391031212" class="whatsapp" target="_blank" data-toggle="tooltip" data-placement="top" title="Whatsapp"><i class="fa fa-whatsapp "></i></a></li>
                                    <li><a href="https://twitter.com/bpr_unisritama" class="twitter" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter "></i></a></li>
                                    <li><a href="https://www.facebook.com/bankunisritama/" class="facebook" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook "></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs">
                    <div class="copyright text-center">
                        <p class="copyright-text">
                            Copyright © 2020 -
                            <a href="<?= base_url() ?>">Bank Unisritama</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- all js here -->

<!-- jquery latest version -->
<script src="<?php echo base_url('assets/'); ?>js/vendor/jquery-1.12.4.min.js" type="text/javascript"></script>
<!-- bootstrap js -->
<script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/bootstrap-datepicker.min.js"></script>
<!-- owl.carousel js -->
<script src="<?php echo base_url('assets/'); ?>js/owl.carousel.min.js"></script>
<!-- Counter js -->
<script src="<?php echo base_url('assets/'); ?>js/jquery.counterup.min.js"></script>
<!-- waypoint js -->
<script src="<?php echo base_url('assets/'); ?>js/waypoints.js"></script>
<!-- stellar js -->
<script src="<?php echo base_url('assets/'); ?>js/jquery.stellar.min.js"></script>
<!-- magnific js -->
<script src="<?php echo base_url('assets/'); ?>js/magnific.min.js"></script>
<!-- venobox js -->
<script src="<?php echo base_url('assets/'); ?>js/venobox.min.js"></script>
<!-- meanmenu js -->
<script src="<?php echo base_url('assets/'); ?>js/jquery.meanmenu.js"></script>
<!-- Form validator js -->
<script src="<?php echo base_url('assets/'); ?>js/form-validator.min.js"></script>
<!-- plugins js -->
<script src="<?php echo base_url('assets/'); ?>js/plugins.js"></script>
<!-- main js -->
<script src="<?php echo base_url('assets/'); ?>js/main.js"></script>
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5eb8f4db8ee2956d739feb30/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script> -->
<!--End of Tawk.to Script-->
</body>

</html>