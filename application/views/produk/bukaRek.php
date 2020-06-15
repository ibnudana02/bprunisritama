<div class="blog-page-area struktur">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Formulir Pembukaan Rekening Tabungan</h3>
                    </div>
                    <div class="panel-body">
                        <form name="produk" class="user" method="post" action="<?= base_url(); ?>" enctype="multipart/form-data">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Identitas Diri</a></li>
                                <li><a data-toggle="tab" href="#menu1">Pekerjaan</a></li>
                                <li><a data-toggle="tab" href="#menu2">Alamat</a></li>
                                <li><a data-toggle="tab" href="#dokumen">Dokumen</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <p class="alert alert-danger" role="alert">Mohon isi sesuai data sebenarnya!</p>
                                    <div class="form-group">
                                        <input type="text" autofocus class="form-control form-control-user" name="produk" id="produk" placeholder="Nama Lengkap" value="<?= set_value('produk'); ?>">
                                        <?php echo form_error('produk', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control form-control-user" name="produk" id="produk" placeholder="Nomor Tanda Pengenal" value="<?= set_value('produk'); ?>">
                                        <?php echo form_error('produk', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="produk" id="produk" placeholder="Tempat Dikeluarkan Tanda Pengenal" value="<?= set_value('produk'); ?>">
                                        <?php echo form_error('produk', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="e">Berlaku Hingga:</label>
                                        <input type="text" class="form-control form-control-user datepicker" placeholder="Masa Berlaku" />
                                    </div>
                                    <div class="form-group">
                                        <textarea name="alamat_domisili" id="alamat_domisili" rows="3" class="form-control form-control-user" placeholder="Alamat sesuai Domisili"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="kota" placeholder="Kota" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="kode_pos" placeholder="Kode Pos" />
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control form-control-user" name="no" placeholder="No. Hp/Telp" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="email" placeholder="Email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="alamat_surat" placeholder="Alamat Surat Menyurat" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="kota_surat" placeholder="Kota" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="kode_pos_surat" placeholder="Kode Pos" />
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
                                        <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="tempat_lhr" placeholder="Tempat Lahir">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="tgl_lhr" placeholder="Tanggal Lahir">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="nama_ibu" placeholder="Nama Gadis Ibu Kandung">
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <p class="alert alert-danger" role="alert">Mohon isi sesuai data sebenarnya!</p>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="pekerjaan" placeholder="Pekerjaan">
                                    </div>
                                    <div class="form-group">
                                        <label for="sumber dana">Status Pekerjaan</label>
                                        <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                            <option value="">Tetap</option>
                                            <option value="">Kontrak</option>
                                            <option value="">Honorer</option>
                                            <option value="">Paruh-Waktu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="sumber dana">Sumber Penghasilan</label>
                                        <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                            <option value="">Gaji</option>
                                            <option value="">Hasil Investasi</option>
                                            <option value="">Hasil Usaha</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="sumber dana">Tujuan Pembukaan Rekening</label>
                                        <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                            <option value="">Transaksi</option>
                                            <option value="">Investasi/Tabungan</option>
                                            <option value="">Keperluan Pribadi</option>
                                            <option value="">Pinjaman/Kredit</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="sumber dana">Penghasilan/Gaji Kotor per Tahun (Rp.)</label>
                                        <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                            <option value="">Kecil dari 15 Juta</option>
                                            <option value="">Berkisar dari 15 sampai 100 Juta</option>
                                            <option value="">Berkisar dari 100 sampai 200 Juta</option>
                                            <option value="">Lebih dari 200 Juta</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="sumber dana">Penghasilan Lainnya per Tahun (Rp.)</label>
                                        <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                            <option value="">Kecil dari 15 Juta</option>
                                            <option value="">Berkisar dari 15 sampai 100 Juta</option>
                                            <option value="">Berkisar dari 100 sampai 200 Juta</option>
                                            <option value="">Lebih dari 200 Juta</option>
                                        </select>
                                    </div>
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
                                <div id="menu2" class="tab-pane fade">
                                    <p class="alert alert-danger" role="alert">Mohon isi sesuai data sebenarnya!</p>
                                    <div class="form-group">
                                        <label for="sumber dana">Status Tempat Tinggal</label>
                                        <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                            <option value="">Milik Sendiri</option>
                                            <option value="">Sewa</option>
                                            <option value="">Dinas</option>
                                            <option value="">Keluarga</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="sumber dana">Status Pernikahan</label>
                                        <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                            <option value="">Belum Menikah</option>
                                            <option value="">Menikah</option>
                                            <option value="">Duda / Janda</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="tanggungan" placeholder="Jumlah Tanggungan">
                                    </div>
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
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="wn" placeholder="Kewarganegaraan">
                                    </div>
                                    <div class="form-group">
                                        <label for="sumber dana">Pendidikan Terakhir</label>
                                        <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                            <option value="">S3</option>
                                            <option value="">S2</option>
                                            <option value="">S1</option>
                                            <option value="">Diploma</option>
                                            <option value="">SMA/SMK Sederajat</option>
                                            <option value="">SMP</option>
                                            <option value="">SD</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis tabungan">Jenis Tabungan</label>
                                        <select class="form-control custom-select custom-select-md" id="jenis" name="jenis">
                                            <option value="" disabled diselected>--Pilih Jenis Produk--</option>
                                            <?php foreach ($jenis as $row) : ?>
                                                <option value="<?= $row->id_produk; ?>"><?= ucwords($row->produk); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div id="dokumen" class="tab-pane fade">
                                    <p class="alert alert-danger" role="alert">Mohon isi sesuai data sebenarnya!</p>
                                    <?php echo form_error('image', '<small class="text-danger pl-5">', '</small>'); ?>
                                    <div class="form-group">
                                        <label for="image">Lampirkan Foto Tanda Pengenal (KTP, SIM, Passport)</label>
                                        <input type="file" class="form-control-file" name="image" value="<?= set_value('image'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Lampirkan Foto Selfie</label>
                                        <input type="file" class="form-control-file" name="image" value="<?= set_value('image'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Lampirkan Foto Tanda Tangan</label>
                                        <input type="file" class="form-control-file" name="image" value="<?= set_value('image'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Lampirkan Foto NPWP</label>
                                        <input type="file" class="form-control-file" name="image" value="<?= set_value('image'); ?>">
                                    </div>
                                </div>
                            </div>
                            <p><b>Mohon Baca Persyaratan dan Ketentuan berikut ini:</b></p>
                            <div class="scroll">
                                Mohon dibaca secara seksama sebelum Anda menandatangani Formulir Pembukaan Rekening Tabungan Perorangan karena Anda akan terikat oleh Syarat dan Ketentuan ini setelah Anda menandatangani Formulir Pembukaan Rekening Tabungan Perorangan ini.
                                <br>
                                Syarat dan Ketentuan ini merupakan satu kesatuan dan bagian yang tidak terpisahkan dari Formulir Pembukaan Rekening Tabungan Perorangan termasuk perubahannya di kemudian hari. Syarat dan Ketentuan ini berlaku pula untuk setiap pembukaan berikutnya dari produkTabungan yang sama yang dilakukan oleh Nasabah
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <button type="button" class="btn btn-primary pull-right" id="btSubmit">
                            SUBMIT
                        </button>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>