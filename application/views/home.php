<div class="services-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h4>Produk <span class="color">&</span> Layanan</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="services-all">
                <div class="col-md-4 col-sm-6 col-xs-12 servis">
                    <div class="single-services">
                        <div class="service-inner layanan">
                            <a class="service-icon" href="<?= base_url('kredit') ?>">
                                <i class="flaticon-point-of-service"></i>
                            </a>
                            <div class="service-content">
                                <h4><a href="<?= base_url('kredit') ?>">Produk Kredit</a></h4>
                                <p class="text-justify">Solusi kebutuhan modal usaha Anda, kredit kendaraan bermotor, biaya pendidikan dan keperluan mendesak lainnya.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 servis">
                    <div class="single-services">
                        <div class="service-inner layanan">
                            <a class="service-icon" href="<?= base_url('dana') ?>">
                                <i class="flaticon-point-of-service"></i>
                            </a>
                            <div class="service-content">
                                <h4><a href="<?= base_url('dana') ?>">Produk Dana</a></h4>
                                <p class="text-justify">Saving Dana anda dengan Aman sekaligus bisa berinvestasi dengan Suku Bunga bersaing dan Pastinya dijamin LPS.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 servis">
                    <div class="single-services">
                        <div class="service-inner layanan">
                            <a class="service-icon" href="#">
                                <i class="flaticon-point-of-service"></i>
                            </a>
                            <div class="service-content">
                                <h4><a href="#">Jasa Layanan</a></h4>
                                <p class="text-justify">Melayani Pembelian PIN Pendaftaran, Pembayaran Uang Kuliah Mahasiswa Universitas Islam Riau, Top Up OVO, Listrik Pra dan Pasca Bayar, Telkom dan Pembayaran Lainnya.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Welcome service area start -->
<div class="welcome-area bg-color-2 area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h4>Business consultant is offering world wide business planning. We are a solution oriented company and your needs are our greatest concern</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single-well end-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="well-services">
                    <div class="services-img">
                        <img src="<?= base_url('assets/') ?>img/service/1.jpg" alt="">
                        <span class="top-icon"><i class="flaticon-graph-3"></i></span>
                        <div class="image-layer">
                            <a href="#"><i class="flaticon-graph-8"></i>Simulasi Kredit</a>
                            <a href="#"><i class="flaticon-graph-3"></i>Form Aplikasi Kredit</a>
                        </div>
                    </div>
                    <div class="main-services">
                        <div class="service-content">
                            <h4>Aplikasi Kredit</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="well-services">
                    <div class="services-img">
                        <img src="<?= base_url('assets/') ?>img/service/2.jpg" alt="">
                        <span class="top-icon"><i class="flaticon-graph-1"></i></span>
                        <div class="image-layer">
                            <a href="<?= base_url('pembukaan-rekening-tabungan') ?>"><i class="flaticon-grocery"></i>Form Pembukaan Tabungan</a>
                        </div>
                    </div>
                    <div class="main-services">
                        <div class="service-content">
                            <h4>Pembukaan Tabungan Online</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="well-services">
                    <div class="services-img">
                        <img src="<?= base_url('assets/') ?>img/service/3.jpg" alt="">
                        <span class="top-icon"><i class="flaticon-bank"></i></span>
                        <div class="image-layer">
                            <a href="#"><i class="flaticon-change"></i>Bank investment plan</a>
                        </div>
                    </div>
                    <div class="main-services">
                        <div class="service-content">
                            <h4>Pembukaan Deposito Online</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single-well end-->
        </div>
    </div>
</div>
<!-- Welcome service area End -->

<div class="project-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Berita <span class="color">Terbaru</span></h3>
                    <!-- <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="project-carousel">
                <!-- single-awesome-project start -->
                <?php foreach ($berita as $row) : ?>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="<?= 'berita/' . $row->slug ?>">
                                    <img src="<?= base_url('upload/berita/' . $row->image) ?>" alt="">
                                </a>
                                <div class="add-actions text-center">
                                    <a href="<?= 'berita/' . $row->slug ?>">
                                        <!-- <i class="port-icon icon icon-picture"></i> -->
                                    </a>
                                </div>
                            </div>
                            <div class="project-dec">
                                <h6><span class="label label-success"><?= $row->kategori; ?></span></h6>
                                <a href="<?= 'berita/' . $row->slug ?>">
                                    <h4><?= ucwords($row->judul); ?></h4>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- End main content -->
</div>

<div class="services-area">
    <div class="container">
        <div class="intro-slider">
            <div class="slider-gambar">
                <a href=""><img src="<?= base_url('assets/') ?>img/client/ayokebank.jpg" alt=""></a>
            </div>
            <div class="slider-gambar">
                <a href=""><img src="<?= base_url('assets/') ?>img/client/YLPI.jpg" alt=""></a>
            </div>
            <div class="slider-gambar">
                <a href=""><img src="<?= base_url('assets/') ?>img/client/perbarindo.jpg" alt=""></a>
            </div>
            <div class="slider-gambar">
                <a href=""><img src="<?= base_url('assets/') ?>img/client/ojk.jpg" alt=""></a>
            </div>
            <div class="slider-gambar">
                <a href=""><img src="<?= base_url('assets/') ?>img/client/lps.png" alt=""></a>
            </div>
        </div>
    </div>
</div>

<script>
    /* Dengan Rupiah 
	var tanpa_rupiah = document.getElementById('plafond');
	tanpa_rupiah.addEventListener('keyup', function(e)
	{
		tanpa_rupiah.value = formatRupiah(this.value);
	});
	
	 Fungsi
	function formatRupiah(angka, prefix)
	{
		var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split	= number_string.split(','),
			sisa 	= split[0].length % 3,
			rupiah 	= split[0].substr(0, sisa),
			ribuan 	= split[0].substr(sisa).match(/\d{3}/gi);
			
		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}
		
		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}*/



    $("#plafond,#bunga,#jkw").keyup(function() {
        var plafon = parseFloat($("#plafond").val());
        var bunga = parseFloat($("#bunga").val());
        var jkw = parseInt($("#jkw").val());
        var bpokok = plafon / jkw;
        var bbunga = plafon * ((bunga / 100) / 12);
        var btotal = bpokok + bbunga;
        $("#bpokoks").val(bpokok.toFixed(0));
        $("#bbungas").val(bbunga.toFixed(0));
        $("#btotals").val(btotal.toFixed(0));
    });
</script>