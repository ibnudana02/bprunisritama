<div class="blog-page-area struktur">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="margin-bottom: 15px;">
                <img src="<?= base_url('assets/img/client/banner-buka-tab.png') ?>" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Formulir Pembukaan Rekening Tabungan</h3>
                    </div>
                    <div class="panel-body">
                        <form name="produk" class="user" method="post" action="<?= base_url(); ?>" enctype="multipart/form-data">
                            <ul class="nav nav-pills">
                                <li class="active"><a data-toggle="tab" href="#identitas">Identitas Diri</a></li>
                                <li><a data-toggle="tab" href="#pekerjaan">Pekerjaan</a></li>
                                <li><a data-toggle="tab" href="#tambahan">Informasi Lainnya</a></li>
                                <li><a data-toggle="tab" href="#dokumen">Dokumen</a></li>
                                <li><a data-toggle="tab" href="#accept">Persetujuan</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="identitas" class="tab-pane fade in active">
                                    <p class="alert alert-danger" role="alert" style="margin-top: 25px;">Mohon isi sesuai data sebenarnya!</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" autofocus class="form-control form-control-user" name="produk" id="produk" placeholder="Nama Lengkap" value="<?= set_value('produk'); ?>">
                                                <?php echo form_error('produk', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" autofocus class="form-control form-control-user" name="produk" id="produk" placeholder="Nama Sesuai Identitas" value="<?= set_value('produk'); ?>">
                                                <?php echo form_error('produk', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="jenis_kelamin">Jenis Kelamin </label><br>
                                                <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                                    <option value="">Laki-laki</option>
                                                    <option value="">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="sumber dana">Agama</label>
                                                <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                                    <option value="">Islam</option>
                                                    <option value="">Katolik</option>
                                                    <option value="">Kristen</option>
                                                    <option value="">Hindu</option>
                                                    <option value="">Budha</option>
                                                    <option value="">Kong Hu Cu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="wn">Kewarganegaraan</label>
                                                <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                                    <option value="" disabled>--Kewarganegaraan--</option>
                                                    <option value="">Indonesia</option>
                                                    <option value="">Asing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="sumber dana">Jenis Identitas</label>
                                                <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                                    <option value="">KTP</option>
                                                    <option value="">SIM</option>
                                                    <option value="">Passport</option>
                                                    <option value="">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="e">Berlaku Hingga</label>
                                                <input type="text" class="form-control form-control-user" placeholder="Masa Berlaku" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="number" class="form-control form-control-user" name="no_identitas" id="no_identitas" placeholder="Nomor Tanda Pengenal">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="alamat_ktp" placeholder="Alamat sesuai Tanda Pengenal">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <select name="prop" id="prop" class="form-control form-control-user">
                                                    <option value="">Pilih</option>
                                                    <?php foreach ($prop as $row) : ?>
                                                        <option value="<?= $row->kode; ?>"><?= ucwords($row->nama); ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <select name="kota" id="kota" class="form-control form-control-user">
                                                    <option value="">Pilih</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="kec" placeholder="Kecamatan" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="kel" placeholder="Kelurahan / Desa" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="kode_pos" id="" placeholder="Kode Pos"></div>
                                        </div>
                                        <div class="col-lg-12"></div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="tempat_lhr" placeholder="Tempat Lahir">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="tgl_lhr" placeholder="Tanggal Lahir">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="number" class="form-control form-control-user" name="no" placeholder="No. Hp/Telp" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="alamat_surat" placeholder="Alamat Domisili" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="propinsi" placeholder="Provinsi" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="kota" placeholder="Kota / Kabupaten" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="kec" placeholder="Kecamatan" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="kel" placeholder="Kelurahan / Desa" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="kode_pos" id="" placeholder="Kode Pos"></div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="npwp" id="" placeholder="No. NPWP"></div>
                                        </div>
                                    </div>
                                </div> <!-- end tab identitas -->
                                <div id="pekerjaan" class="tab-pane fade">
                                    <p class="alert alert-danger" role="alert" style="margin-top: 25px;">Mohon isi sesuai data sebenarnya!</p>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="sumber dana">Profesi</label>
                                                <!-- <input type="text" class="form-control form-control-user" name="pekerjaan" placeholder="Pekerjaan"> -->
                                                <select name="profesi" id="" class="form-control form-control-user">
                                                    <option value="">Pegawai Negeri / Swasta</option>
                                                    <option value="">Profesional</option>
                                                    <option value="">Wiraswasta</option>
                                                    <option value="">Pelajar</option>
                                                    <option value="">Pensiunan</option>
                                                    <option value="">IRT</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="jenis_pekerjaan">Jenis Pekerjaan</label>
                                            <select name="jenis_pekerjaan" id="" class="form-control form-control-user">
                                                <option value="">Pemerintah</option>
                                                <option value="">Perusahaan</option>
                                                <option value="">CV</option>
                                                <option value="">Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="sumber dana">Status Pekerjaan</label>
                                                <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                                    <option value="">Tetap</option>
                                                    <option value="">Kontrak</option>
                                                    <option value="">Honorer</option>
                                                    <option value="">Paruh-Waktu</option>
                                                    <option value="">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="sumber dana">Sumber Penghasilan</label>
                                                <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                                    <option value="">Gaji</option>
                                                    <option value="">Hasil Usaha</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" name="jabatan" id="" class="form-control form-control-user" placeholder="Jabatan">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" name="gaji" id="" class="form-control form-control-user" placeholder="Gaji / Pendapatan Perbulan">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="nm_perusahaan" id="" class="form-control form-control-user" placeholder="Nama Perusahaan / Usaha">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <input type="text" name="alamat_perusahaan" class="form-control form-control-user" placeholder="Alamat Perusahaan / Usaha">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" name="no_kantor" id="" class="form-control form-control-user" placeholder="No. Telp Kantor / Usaha">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="frm-group">
                                                <input type="text" name="email_kantor" id="" class="form-control form-control-user" placeholder="Email Kantor">
                                            </div>
                                        </div>
                                        <div class="col-lg-12"></div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="sumber dana">Penghasilan/Gaji Kotor per Tahun (Rp.)</label>
                                                <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                                    <option value="">Kecil dari 15 Juta</option>
                                                    <option value="">Berkisar dari 15 sampai 100 Juta</option>
                                                    <option value="">Berkisar dari 100 sampai 200 Juta</option>
                                                    <option value="">Lebih dari 200 Juta</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="sumber dana">Penghasilan Lainnya per Tahun (Rp.)</label>
                                                <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                                    <option value="">Kecil dari 15 Juta</option>
                                                    <option value="">Berkisar dari 15 sampai 100 Juta</option>
                                                    <option value="">Berkisar dari 100 sampai 200 Juta</option>
                                                    <option value="">Lebih dari 200 Juta</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="sumber dana">Total Penghasilan per Tahun (Rp.)</label>
                                                <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                                    <option value="">Kecil dari 15 Juta</option>
                                                    <option value="">Berkisar dari 15 sampai 100 Juta</option>
                                                    <option value="">Berkisar dari 100 sampai 200 Juta</option>
                                                    <option value="">Lebih dari 200 Juta</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end tab pekerjaan -->
                                <div id="tambahan" class="tab-pane fade">
                                    <p class="alert alert-danger" role="alert" style="margin-top: 25px;">Mohon isi sesuai data sebenarnya!</p>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="sumber dana">Status Tempat Tinggal</label>
                                                <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                                    <option value="">Milik Sendiri</option>
                                                    <option value="">Sewa</option>
                                                    <option value="">Dinas</option>
                                                    <option value="">Keluarga</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="">Jumlah Tanggungan</label>
                                                <input type="text" class="form-control form-control-user" name="tanggungan" placeholder="Jumlah Tanggungan">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="jenis tabungan">Jenis Deposito</label>
                                                <select class="form-control custom-select custom-select-md" id="jenis" name="jenis">
                                                    <option value="" disabled diselected>--Pilih Jenis Deposito--</option>
                                                    <?php foreach ($jenis as $row) : ?>
                                                        <option value="<?= $row->id_produk; ?>"><?= ucwords($row->produk); ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="sumber dana">Pendidikan Terakhir</label>
                                                <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                                    <option value="" disabled>--Pendidikan Terakhir--</option>
                                                    <option value="">S3</option>
                                                    <option value="">S2</option>
                                                    <option value="">S1</option>
                                                    <option value="">Diploma</option>
                                                    <option value="">SMA/SMK Sederajat</option>
                                                    <option value="">SMP</option>
                                                    <option value="">SD</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for=""></label>
                                                <input type="text" class="form-control form-control-user" name="email" placeholder="Email" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="dokumen" class="tab-pane fade">
                                    <p class="alert alert-danger" role="alert" style="margin-top: 25px;">Mohon isi sesuai data sebenarnya!</p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="image">Lampirkan Foto Tanda Pengenal (KTP, SIM, Passport)</label>
                                                <input type="file" class="form-control-file" name="image" value="<?= set_value('image'); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="image">Lampirkan Foto Kartu Keluarga</label>
                                                <input type="file" class="form-control-file" name="image" value="<?= set_value('image'); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="image">Lampirkan Foto Selfie</label>
                                                <input type="file" class="form-control-file" name="image" value="<?= set_value('image'); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="image">Lampirkan Foto Tanda Tangan</label>
                                                <input type="file" class="form-control-file" name="image" value="<?= set_value('image'); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="image">Lampirkan Foto NPWP</label>
                                                <input type="file" class="form-control-file" name="image" value="<?= set_value('image'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="accept" class="tab-pane fade">
                                    <p class="alert alert-danger" role="alert" style="margin-top: 25px;">Syaratan dan Ketentuan</p>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="scroll">
                                                <p>Mohon Syarat dan Ketentuan ini dibaca secara seksama sebelum Anda menandatangani Formulir Pembukaan Rekening Tabungan Perorangan karena Anda akan terikat oleh Syarat dan Ketentuan ini setelah Anda menandatangani Formulir Pembukaan Rekening Tabungan Perorangan ini.</p>

                                                <p>Syarat dan Ketentuan ini merupakan satu kesatuan dan bagian yang tidak terpisahkan dari Formulir Pembukaan Rekening Tabungan Perorangan termasuk perubahannya di kemudian hari. Syarat dan Ketentuan ini berlaku pula untuk setiap pembukaan berikutnya dari produkTabungan yang sama yang dilakukan oleh Nasabah</p>

                                                <p><strong>1. Syarat-Syarat Umum</strong><br />
                                                    a. Nasabah adalah perorangan yang telah berusia di atas 17 tahun dan mempunyai kartu identitas (KTP/Paspor/KITAS) yang masih berlaku dan/atau yayasan (selanjutnya disebut &ldquo;Nasabah&rdquo;).<br />
                                                    b. Sebagai bukti kepemilikan TABUNGAN, Bank Unisritama akan menerbitkan buku TABUNGAN dan Kartu Tabungan.<br />
                                                    c. Kartu Tabungan dapat digunakan oleh Nasabah untuk melakukan cek saldo, penyetoran, penarikan, dan pemindahbukuan melalui mesin EDC (Electronic Data Capture).<br />
                                                    d. Buku TABUNGAN, Kartu Tabungan, dan PIN (Personal Identification Number) bersifat rahasia dan tidak untuk diberikan kepada pihak selain Nasabah.<br />
                                                    e. Dalam hal buku TABUNGAN dicuri atau hilang, Nasabah wajib melaporkan secara tertulis dengan melampirkan surat keterangan kehilangan dari kepolisian kepada kantor Bank Unisritama dimana rekening dibuka selama jam kerja dalam bentuk dan isi yang dapat diterima oleh Bank Unisritama.<br />
                                                    f. Sebelum pemberitahuan tertulis diterima oleh Bank Unisritama, setiap transaksi yang dilakukan dengan buku TABUNGAN yang hilang menjadi tanggung jawab Nasabah sepenuhnya.<br />
                                                    g. Nasabah bertanggung jawab sepenuhnya atas segala kerugian yang timbul karena adanya pemalsuan buku TABUNGAN, penyalahgunaan dalam bentuk apapun atas buku TABUNGAN, kerugian atau tuntutan yang timbul karena kehilangan buku TABUNGAN, kerusakan dan/atau kegagalan bekerjanya mesin EDC di luar kekuasaan Bank Unisritama.<br />
                                                    h. Bank Unisritama tidak melayani transaksi apapun terhadap rekening TABUNGAN milik Nasabah yang dilaporkan hilang oleh Nasabah kepada Bank Unisritama. Untuk dapat kembali melakukan transaksi atas rekening TABUNGAN tersebut, Nasabah dapat mengajukan permohonan penggantian buku TABUNGAN ke kantor Bank Unisritama dimana rekening pertama dibuka.<br />
                                                    i. Bank Unisritama berhak memblokir/menutup rekening tanpa pemberitahuan terlebih dahulu apabila saldo Nasabah nihil dalam buku TABUNGAN atau tidak aktif sesuai dengan ketentuan yang berlaku di Bank Unisritama atau apabila dipandang perlu karena data-data yang diserahkan ke Bank Unisritama ternyata terbukti tidak benar atau ada dugaan/indikasi rekening disalahgunakan untuk tujuan penipuan/tindak pidana.<br />
                                                    j. Apabila terdapat perbedaan antara saldo yang tertera pada buku TABUNGAN dengan saldo yang tercatat pada pembukuan Bank Unisritama, maka yang akan digunakan sebagai pedoman adalah saldo yang tercatat pada pembukuan Bank Unisritama, kecuali dapat dibuktikan sebaliknya.<br />
                                                    k. Nasabah wajib menanggung biaya-biaya yang timbul sehubungan dengan penerbitan dan atau penggunaan Kartu Tabungan, antara lain tetapi tidak terbatas pada biaya pembuatan/penggantian Kartu Tabungan dan buku TABUNGAN, biaya administrasi, biaya transaksi, dan biaya lainnya.<br />
                                                    l. Besarnya biaya-biaya dimaksud pada poin k di atas berikut perubahannya akan diberitahukan kepada Nasabah dalam bentuk dan melalui sarana apapun. Biaya-biaya tersebut langsung didebet oleh Bank Unisritama dari rekening TABUNGAN Nasabah yang bersangkutan.<br />
                                                    m. Nasabah wajib memberitahukan secara tertulis kepada Bank Unisritama apabila terdapat perubahan data-data dan tanda tangan Nasabah. Bank Unisritama tidak bertanggung jawab atas akibat dari kelalaian Nasabah dalam memperbaharui data Nasabah pada Bank Unisritama.<br />
                                                    n. Apabila Nasabah meninggal dunia, Bank Unisritama berhak meminta dokumen-dokumen keahliwarisan yang disyaratkan oleh Bank Unisritama agar Bank Unisritama dapat mencairkan saldo rekening TABUNGAN kepada ahli waris yang ditentukan dalam dokumen keahliwarisan. Dengan pencairan saldo rekening TABUNGAN milik Nasabah yang telah meninggal dunia kepada ahli waris atau kuasanya yang mendapat hak sesuai dengan dokumen keahliwarisan, maka Bank Unisritama dibebaskan dari seluruh tanggung jawab berkaitan dengan rekening TABUNGAN milik Nasabah.<br />
                                                    o. Apabila di kemudian hari Nasabah mengajukan fasilitas Kartu ATM, maka Nasabah secara otomatis menyetujui syarat-syarat dan ketentuan-ketentuan Kartu ATM.<br />
                                                    p. Selama Nasabah masih memiliki hutang kepada Bank Unisritama berdasarkan pinjaman uang, bunga, provisi, materai, atau biaya-biaya yang timbul berdasarkan apapun juga, Bank Unisritama berhak dan sepanjang perlu dengan ini diberi kuasa oleh Nasabah untuk mendebet rekening Nasabah dan menggunakannya untuk pembayaran kembali atas setiap jumlah uang yang setiap waktu terutang kepada Bank Unisritama. Segala akibat yang timbul dari pendebetan rekening TABUNGAN tersebut menjadi tanggung jawab Nasabah sepenuhnya.<br />
                                                    q. Bank Unisritama berhak melakukan koreksi atas saldo Nasabah jika terjadi kesalahan posting yang dilakukan oleh Bank Unisritama. Nasabah melepaskan Bank Unisritama dari segala tuntutan atau gugatan atas perbaikan kesalahan tersebut.<br />
                                                    r. Nasabah harus mencetak transaksi yang telah dilakukan pada buku TABUNGAN.<br />
                                                    s. Buku TABUNGAN tidak diperbolehkan untuk dititipkan ataupun disimpan pada Bank Unisritama termasuk pegawainya. Segala resiko yang terjadi atas penitipan buku TABUNGAN menjadi tanggung jawab Nasabah.<br />
                                                    t. Dalam hal buku TABUNGAN rusak/cacat, maka Nasabah dapat mengajukan permohonan penggantian kepada kantor Bank Unisritama tempat membuka rekening TABUNGAN dengan menyerahkan buku TABUNGAN yang rusak/cacat tersebut.<br />
                                                    u. Penerbitan buku TABUNGAN tidak dikenakan biaya, sedangkan penggantian buku TABUNGAN yang hilang/rusak/cacat karena kesalahan Nasabah dikenakan biaya sesuai dengan ketentuan Bank Unisritama.<br />
                                                    v. Penutupan rekening TABUNGAN dikenakan biaya penutupan. Besarnya biaya penutupan rekening TABUNGAN maupun perubahannya akan diberitahukan oleh Bank Unisritama kepada Nasabah dalam bentuk dan melalui sarana apapun.<br />
                                                    w. Rekening TABUNGAN yang ditutup dalam masa periode undian tidak akan diikutsertakan dalam setiap undian yang diadakan oleh Bank Unisritama.<br />
                                                    x. Pada saat penutupan rekening, buku TABUNGAN harus diserahkan kembali kepada Bank Unisritama sehingga menjadi tidak berlaku lagi.<br />
                                                    y. Dengan membuka rekening TABUNGAN, maka Nasabah tunduk dan menyetujui ketentuan-ketentuan ini, termasuk setiap perubahannya yang akan diberitahukan terlebih dahulu oleh Bank Unisritama dalam bentuk dan melalui sarana apapun.<br />
                                                    z. Simpanan dalam TABUNGAN dijamin oleh Lembaga Penjamin Simpanan (LPS) sesuai ketentuan perundang-undangan yang berlaku.</p>

                                                <p><strong>2. Penyetoran dan Penarikan Dana</strong><br />
                                                    a. Setoran pertama dan setoran selanjutnya dapat diberitahukan oleh Bank Unisritama dalam bentuk dan melalui sarana apapun.<br />
                                                    b. Penyetoran dapat dilakukan bebas setiap saat dengan atau tanpa disertai buku TABUNGAN selama kas buka pada waktu jam kerja kantor Bank Unisritama atau dapat juga dilakukan melalui petugas tabungan melalui sistem EDC.<br />
                                                    c. Nasabah wajib melengkapi Formulir Setoran/Transfer (F-TAB-05) atau Formulir Penarikan (F-TAB-07) untuk setiap transaksi penyetoran atau penarikan tanpa melalui sistem EDC.<br />
                                                    d. Setoran dengan Cek atau Bilyet Giro atau transaksi kiriman uang masuk akan dikreditkan ke dalam rekening TABUNGAN setelah dana efektif diterima oleh Bank Unisritama.<br />
                                                    e. Kecuali produk TABUNGAN MAPAN, TABUNGAN MAPAN XTRA, TABUNGAN PLUS XTRA, dan TABUNGAN SUPER, penarikan dana atau pemindahbukuan dana dapat dilakukan bebas setiap saat dengan menggunakan buku TABUNGAN asli selama kas buka pada waktu jam kerja kantor Bank Unisritama atau dapat juga dilakukan melalui petugas tabungan melalui sistem EDC.<br />
                                                    f. Produk TABUNGAN MAPAN, TABUNGAN MAPAN XTRA, TABUNGAN PLUS XTRA , dan TABUNGAN SUPER adalah produk simpanan berjangka, sehingga penarikan dana atau pemindahbukuan dana hanya dapat dilakukan setelah jangka waktu simpanan berakhir.<br />
                                                    g. Penarikan atau pemindahbukuan dana yang dilakukan bukan oleh Nasabah sendiri hanya dapat dilakukan di kantor Bank Unisritama tempat membuka rekening TABUNGAN dan harus dilengkapi dengan surat kuasa bermaterai cukup dari Nasabah serta kartu identitas asli milik Nasabah dan Penerima Kuasa.<br />
                                                    h. Apabila tanda tangan pada Formulir Penarikan berbeda dengan tanda tangan pada buku TABUNGAN/identitas asli/pembukuan Bank Unisritama, maka Bank Unisritama berhak untuk menolak transaksi. Jika Nasabah tidak dapat menyerahkan kartu identitas aslinya, Bank Unisritama berhak untuk menahan buku TABUNGAN untuk dilakukan pemeriksaan lebih lanjut sampai dapat dipastikan kebenaran penarikan yang dilakukan ataupun menolak transaksi Nasabah tersebut sampai dapat ditunjukannya kartu identitas asli dari Nasabah.<br />
                                                    i. Bank Unisritama berhak meminta kartu identitas asli dari Nasabah untuk penarikan tunai.<br />
                                                    j. Nasabah wajib memberikan informasi sumber dana dan tujuan transaksi untuk setiap transaksi lebih dari Rp.100 juta, baik secara sekaligus maupun bertahap dalam 1 hari.</p>

                                                <p><strong>3. Perhitungan dan Pembayaran Bunga</strong><br />
                                                    a. Rekening TABUNGAN akan diberikan bunga yang dihitung harian (khusus TABUNGAN PLUS, TABUNGAN PLUS XTRA, TABUNGAN PLUS MAXI, dan TABUNGAN SUPER) atau yang dihitung berdasarkan saldo akhir bulan (khusus TABUNGAN MAPAN dan TABUNGAN MAPAN XTRA) atau yang dihitung berdasarkan saldo terendah bulanan (jenis TABUNGAN lainnya).<br />
                                                    b. Pemberian bunga akan dilakukan pada akhir bulan dari bulan yang bersangkutan dan langsung dikreditkan atau ditambahkan pada saldo Nasabah yang tercatat pada pembukuan Bank Unisritama.<br />
                                                    c. Besarnya suku bunga ditentukan oleh Bank Unisritama, dan apabila terjadi perubahan suku bunga, maka perubahan tersebut dapat diberlakukan tanpa pemberitahuan terlebih dahulu kepada Nasabah.<br />
                                                    d. Setiap pendapatan bunga akan dikenakan pajak penghasilan (PPh) sesuai ketentuan perpajakan yang berlaku dan akan dibebankan kepada Nasabah.</p>

                                                <p><strong>4. Penanganan Keluhan</strong><br />
                                                    a. Dalam hal Nasabah akan menyampaikan keluhan kepada Bank Unisritama sehubungan dengan rekening TABUNGAN, dapat dilakukan secara tertulis kepada kantor pusat Bank Unisritama atau melalui surel di cs@bprindra.com dengan dilampiri dengan fotokopi identitas diri Nasabah dan dokumen pendukung lainnya.<br />
                                                    b. Bank Unisritama akan menanggapi keluhan tersebut sesuai dengan kebijakan dan prosedur yang berlaku di Bank Unisritama, selambat-lambatnya 7 hari kerja sejak diterimanya keluhan tersebut.<br />
                                                    c. Keluhan Nasabah yang disampaikan kepada Bank Unisritama setelah 3 (tiga) bulan atau lebih sejak tanggal transaksi, tidak akan dilayani oleh Bank Unisritama.</p>

                                                <p><strong>5. Force Majeure</strong><br />
                                                    a. Bank Unisritama tidak bertanggung jawab atas kelalaian pelaksanaan kewajiban dalam hal terjadi peristiwa Force Majeure. Pelaksanaan kewajiban tersebut ditunda selama berlangsung peristiwa Force Majeure tersebut.<br />
                                                    b. Nasabah dengan ini menjamin dan membebaskan Bank Unisritama dari segala kewajiban, tuntutan, gugatan, dan klaim apapun dari pihak manapun juga, termasuk dari Nasabah sendiri, dalam hal Bank Unisritama tidak dapat melaksanakan perintah dari Nasabah karena sebab-sebab yang diakibatkan oleh peristiwa Force Majeure.</p>

                                                <p><strong>6. Hukum yang Berlaku</strong><br />
                                                    a. Setiap transaksi perbankan yang dilakukan Nasabah akan diproses berdasarkan hukum yang berlaku di Negara Republik Indonesia.<br />
                                                    b. Syarat dan Ketentuan ini serta pelaksanaannya dan penafsirannya dalam segala hal diatur oleh serta diartikan dan ditafsirkan dengan hukum Negara Republik Indonesia.<br />
                                                    c. Nasabah dan Bank Unisritama memilih domisili tetap dan permanen di Panitera Pengadilan Negeri Singaraja.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12" style="margin-top: 15px;">
                                            <button type="button" class="btn btn-primary center-block" id="btSubmit">
                                                SUBMIT
                                            </button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>