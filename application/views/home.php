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
                            <a class="service-icon" href="#">
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
                            <a class="service-icon" href="#">
                                <i class="flaticon-point-of-service"></i>
                            </a>
                            <div class="service-content">
                                <h4><a href="#">Produk Dana</a></h4>
                                <p class="text-justify">Solusi kebutuhan modal usaha Anda, kredit kendaraan bermotor, biaya pendidikan dan keperluan mendesak lainnya.</p>
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
                                <p class="text-justify">Solusi kebutuhan modal usaha Anda, kredit kendaraan bermotor, biaya pendidikan dan keperluan mendesak lainnya.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-area bg-color-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h4>Berita <span class="color">Terbaru</span></h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="intro-berita">
                <?php foreach ($berita as $row) : ?>
                    <div class="slider-berita">
                        <div class="well-services">
                            <div class="services-img">
                                <a href="" class="">
                                    <img src="<?= base_url('upload/berita/' . $row->image) ?>" alt="">
                                </a>
                                <span class="top-icon"><i class="flaticon-graph-6"></i></span>
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <h6><span class="label label-success"><?= $row->kategori; ?></span></h6>
                                    <h5><?= ucwords($row->judul); ?></h5>
                                    <a class="service-btn" href="#">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
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