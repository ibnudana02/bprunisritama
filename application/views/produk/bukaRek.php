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
                                <li><a data-toggle="tab" href="#kontak">Ahli Waris/Kontak</a></li>
                                <li><a data-toggle="tab" href="#pekerjaan">Pekerjaan</a></li>
                                <li><a data-toggle="tab" href="#tambahan">Data Tambahan</a></li>
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
                                        <div class="col-lg-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="alamat_ktp" placeholder="Alamat sesuai Tanda Pengenal">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="propinsi" placeholder="Provinsi" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="kota" placeholder="Kota sesuai Tanda Pengenal" />
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
                                                <input type="text" class="form-control form-control-user" name="kota_surat" placeholder="Kota" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="kode_pos_surat" placeholder="Kode Pos" />
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end tab identitas -->
                                <div id="kontak" class="tab-pane fade">
                                    <p class="alert alert-danger" role="alert" style="margin-top: 25px;">Mohon isi sesuai data sebenarnya!</p>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="nm_ayah" placeholder="Nama Ayah Kandung">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="nm_ibu" placeholder="Nama Gadis Ibu Kandung">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="waris" placeholder="Nama Ahli Waris">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="hb_aw">Hubungan dengan Ahli Waris</label>
                                            <select name="hb_aw" id="" class="form-control custom-select custom-select-md">
                                                <option value="">Ayah</option>
                                                <option value="">Ibu</option>
                                                <option value="">Anak</option>
                                                <option value="">Suami/Istri</option>
                                                <option value="">Mertua</option>
                                                <option value="">Keluarga</option>
                                                <option value="">Saudara</option>
                                                <option value="">Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="alamat_aw"></label>
                                                <input type="text" class="form-control form-control-user" name="alamat_aw" placeholder="Alamat Ahli Waris" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="no_aw"></label>
                                                <input type="text" class="form-control form-control-user" name="no_aw" placeholder="No Ahli Waris">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="sumber dana">Status Pernikahan</label>
                                                <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                                    <option value="">Belum Menikah</option>
                                                    <option value="">Menikah</option>
                                                    <option value="">Duda / Janda</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="nm_pasangan"></label>
                                                <input type="text" name="nm_pasangan" class="form-control form-control-user" placeholder="Nama Pasangan">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for=""></label>
                                                <input type="text" class="form-control form-control-user" name="tempat_lhr" placeholder="Tempat Lahir Pasangan">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for=""></label>
                                                <input type="text" class="form-control form-control-user" name="tgl_lhr" placeholder="Tanggal Lahir Pasangan">
                                            </div>
                                        </div>
                                        <div class="col-lg-12"></div>
                                        <div class="col-lg-2">
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
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for=""></label>
                                                <input type="number" class="form-control form-control-user" name="no_identitas" id="no_identitas" placeholder="Nomor Identitas Pasangan">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for=""></label>
                                                <input type="text" class="form-control form-control-user" name="alamat_ktp" placeholder="Alamat sesuai Identitas">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for=""></label>
                                                <input type="text" class="form-control form-control-user" name="kota" placeholder="Kota sesuai Identitas" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                                <label for="sumber dana">Tujuan Pembukaan Rekening</label>
                                                <select name="sumber" id="sumber" class="form-control custom-select custom-select-md">
                                                    <option value="">Simpanan</option>
                                                    <option value="">Penerimaan Gaji</option>
                                                    <option value="">Penyaluran Kredit</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
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
                                                Mohon dibaca secara seksama sebelum Anda menandatangani Formulir Pembukaan Rekening Tabungan Perorangan karena Anda akan terikat oleh Syarat dan Ketentuan ini setelah Anda menandatangani Formulir Pembukaan Rekening Tabungan Perorangan ini.
                                                <br>
                                                Syarat dan Ketentuan ini merupakan satu kesatuan dan bagian yang tidak terpisahkan dari Formulir Pembukaan Rekening Tabungan Perorangan termasuk perubahannya di kemudian hari. Syarat dan Ketentuan ini berlaku pula untuk setiap pembukaan berikutnya dari produkTabungan yang sama yang dilakukan oleh Nasabah
                                                Syarat dan Ketentuan ini merupakan satu kesatuan dan bagian yang tidak terpisahkan dari Formulir Pembukaan Rekening Tabungan Perorangan termasuk perubahannya di kemudian hari. Syarat dan Ketentuan ini berlaku pula untuk setiap pembukaan berikutnya dari produkTabungan yang sama yang dilakukan oleh Nasabah
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
                    <!-- <div class="panel-footer">
                        <button type="button" class="btn btn-primary pull-right" id="btSubmit">
                            SUBMIT
                        </button>
                        <div class="clearfix"></div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>