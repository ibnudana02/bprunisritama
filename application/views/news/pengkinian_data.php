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
                            <a href="#" class="blog-images">
                                <img src="<?= base_url('upload/b6.jpg'); ?>" alt="">
                            </a>
                            <hr>
                            <div class="blog-content">
                                <div class="blog-category">
                                    <span>INFORMASI LAYANAN NASABAH</span>
                                </div>
                                <h3>PENGKINIAN DATA NASABAH</h3>
                                <p class="text-justify visi">
                                    Nasabah Bank Unisritama yang terhormat, Perkenankan kami untuk menyampaikan terima kasih atas kepercayaan dan kerjasama Anda selama ini. Terkait dengan Peraturan Otoritas Jasa Keuangan mengenai Penerapan Program Anti Pencucian Uang dan Pencegahan Pendanaan Terorisme di Sektor Jasa Keuangan, dengan ini kami harapkan kerjasamanya untuk menyampaikan setiap perubahan data/informasi yang pernah disampaikan kepada kami disertai dengan dokumen pendukung.
                                </p>
                                <p class="text-justify visi">
                                    Perlu kami informasikan bahwa sesuai dengan peraturan dimaksud, bank wajib menolak transaksi, membatalkan transaksi dan/atau menutup hubungan usaha, apabila :
                                    <ul class="marker-list">
                                        <li>Nasabah tidak memenuhi permintaan informasi dan dokumen pendukung;</li>
                                        <li>Diketahui dan/atau patut diduga menggunakan dokumen palsu;</li>
                                        <li>Menyampaikan informasi yang diragukan kebenarannya;</li>
                                        <li>Berbentuk shell bank atau bank yang mengizinkan rekeningnya digunakan oleh shell bank; </li>
                                        <li>Memiliki aktivitas transaksi yang berkaitan dengan tindak pidana pencucian uang dan pendanaan terorisme; dan </li>
                                        <li>Memiliki sumber dana transaksi yang diketahui dan/atau patut diduga berasal dari tindak pidana. </li>
                                    </ul>
                                </p>
                                <p class="text-justify visi">
                                    Formulir pengkinian data dapat Anda peroleh di kantor Bank Unisritama terdekat atau dengan mengunduh formulir dibawah ini: <br>

                                    <ul class="marker-list">
                                        <li><a href="#">Formulir Perubahan Data Nasabah Perorangan</a></li>
                                        <li><a href="#">Formulir Perubahan Data Nasabah Non-Perorangan</a></li>
                                    </ul>
                                </p>
                                <p class="text-justify visi">
                                    Formulir yang sudah dilengkapi mohon diserahkan ke kantor Bank Unisritama terdekat atau dikirim melalui email unisritamabpr@yahoo.co.id <br>
                                    Untuk informasi lebih lanjut, dapat menghubungi Customer Service kami di Telepon: 0761-63381
                                </p>
                                <p class="text-justify visi">
                                    Demikian yang dapat kami sampaikan. Atas perhatian dan kerjasamanya, kami ucapkan terima kasih. <br>
                                    Hormat kami,<br>
                                    <br><strong>PT. BPR Unisritama</strong>
                                </p>
                                <hr>
                            </div>
                        </div>
                    </article>

                    <div class="clear"></div>
                </div>
                <!-- single-blog end -->
            </div>
            <!-- End main column -->
            <!-- End main column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="left-head-blog">
                    <div class="left-blog-page">
                    </div>
                    <div class="left-blog-page">
                        <!-- recent start -->
                        <div class="left-blog">
                            <h4>recent post</h4>
                            <div class="recent-post">
                                <?php foreach ($berita as $row) : ?>
                                    <!-- start single post -->
                                    <div class="recent-single-post">
                                        <div class="post-img">
                                            <a href="#">
                                                <img src="<?= base_url('upload/berita/' . $row->image); ?>">
                                            </a>
                                        </div>
                                        <div class="pst-content">
                                            <p><a href="<?= base_url('artikel/' . $row->slug) ?>"><?= strtoupper($row->judul); ?></a>
                                                <div class="blog-meta">
                                                    <span class="date-type">
                                                        <i class="fa fa-calendar"></i>
                                                        <?= $row->update_on; ?>
                                                    </span>
                                                </div>
                                        </div>
                                    </div>
                                    <!-- End single post -->
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- recent end -->
                    </div>
                    <div class="left-blog-page">
                        <div class="left-blog">
                            <h4>Kategori</h4>
                            <ul>
                                <?php foreach ($category as $row) : ?>
                                    <li><a href="<?= base_url($row->link) ?>"><?php echo strtoupper($row->kategori); ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End left sidebar -->
        </div>
        <!-- End row -->
    </div>
</div>
</div>
<!--End of Blog Area-->