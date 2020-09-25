<head>
    <style>
        .form-required {
            color: #cd201f;
        }

        .form-required:before {
            content: ' ';
        }
    </style>
</head>
<div class="blog-page-area struktur">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                <?php if ($this->session->flashdata('message')) : ?>
                    <div class="alert alert-success alert-dismissible text-center" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                <?php endif; ?>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Formulir Pembukaan Rekening Tabungan</h3>
                    </div>
                    <div class="panel-body">
                        <form name="produk" class="user" method="post" action="<?= base_url('pembukaan-rekening-tabungan'); ?>" enctype="multipart/form-data">
                            <ul class="nav nav-pills">
                                <li class="active"><a data-toggle="tab" href="#identitas">Identitas Diri</a></li>
                                <li><a data-toggle="tab" href="#kontak">Ahli Waris/Kontak</a></li>
                                <li><a data-toggle="tab" href="#pekerjaan">Pekerjaan</a></li>
                                <li><a data-toggle="tab" href="#tambahan">Data Tambahan</a></li>
                                <li><a data-toggle="tab" href="#dokumen">Dokumen & Persetujuan</a></li>
                                <!-- <li><a data-toggle="tab" href="#accept">Persetujuan</a></li> -->
                            </ul>
                            <div class="tab-content">
                                <div id="identitas" class="tab-pane fade in active">
                                    <p class="alert alert-danger" role="alert" style="margin-top: 25px;">Mohon isi sesuai data sebenarnya!</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" autofocus class="form-control form-control-user" name="nm_lengkap" id="nm_lengkap" placeholder="Nama Lengkap" value="<?= set_value('nm_lengkap'); ?>" onkeyup="this.value = this.value.toUpperCase()">
                                                <!-- <span class="form-required">*</span> -->
                                                <?php echo form_error('nm_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="nm_identitas" id="nm_identitas" placeholder="Nama Sesuai Identitas" value="<?= set_value('nm_identitas'); ?>" onkeyup="this.value = this.value.toUpperCase()">
                                                <?php echo form_error('nm_identitas', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="jenis_kelamin">Jenis Kelamin </label><br>
                                                <?php
                                                $style = 'class="form-control custom-select custom-select-md" required';
                                                echo form_dropdown('jenis_kelamin', $jk, set_value('jenis_kelamin'), $style);
                                                ?>
                                                <?php echo form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="sumber dana">Agama</label>
                                                <?php
                                                $style = 'class="form-control custom-select custom-select-md" required';
                                                echo form_dropdown('agama', $agama, set_value('agama'), $style);
                                                ?>
                                                <?php echo form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="wn">Kewarganegaraan</label>
                                                <?php
                                                $style = 'class="form-control custom-select custom-select-md" required';
                                                echo form_dropdown('warga_negara', $wn, set_value('warga_negara'), $style);
                                                ?>
                                                <?php echo form_error('warga_negara', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="sumber dana">Jenis Identitas</label>
                                                <?php $style = 'class="form-control custom-select custom-select-md" required';
                                                echo form_dropdown('jenis_identitas', $identitas, set_value('jenis_identitas'), $style); ?>
                                                <?php echo form_error('jenis_identitas', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">Berlaku Hingga</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control datepicker" aria-describedby="start-date" name="masa_berlaku" placeholder="Masa Berlaku" value="<?= set_value('masa_berlaku'); ?>">
                                                    <span class="input-group-addon" id="start-date"><span class="fa fa-calendar"></span></span>
                                                    <!-- <span class="input-group-btn" id="start-date"><button class="btn btn-default">S</button></span> -->
                                                </div>
                                                <?php echo form_error('masa_berlaku', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="number" class="form-control form-control-user" name="no_identitas" id="no_identitas" placeholder="Nomor Tanda Pengenal" value="<?= set_value('no_identitas') ?>">
                                                <?php echo form_error('no_identitas', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="tempat_lahir" placeholder="Tempat Lahir" value="<?= set_value('tempat_lahir') ?>" onkeyup="this.value = this.value.toUpperCase()">
                                                <?php echo form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control datepicker" aria-describedby="start-date" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?= set_value('tgl_lahir'); ?>">
                                                    <span class="input-group-addon" id="start-date"><span class="fa fa-calendar"></span></span>
                                                </div>
                                                <?php echo form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="number" class="form-control form-control-user" name="no_hp" placeholder="No. Hp/Telp" value="<?= set_value('no_hp'); ?>" />
                                                <?php echo form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="alert alert-info alert-dismissible" role="alert">
                                                Mohon isi alamat sesuai tanda pengenal!
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="Provinsi">Provinsi</label>
                                                <select name="provinsi_identitas" id="propinsi" class="form-control form-control-user">
                                                    <option value="">Pilih</option>
                                                    <?php foreach ($prop as $row) : ?>
                                                        <option value="<?= $row->kode; ?>" <?= set_select('provinsi_identitas', $row->kode) ?>><?= ucwords($row->nama); ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <?php echo form_error('provinsi_identitas', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="Kabupaten/Kota">Kabupaten/Kota</label>
                                                <select name="kab_identitas" id="kota" class="form-control form-control-user">
                                                    <option value="">Pilih</option>
                                                </select>
                                                <?php echo form_error('kab_identitas', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="Kecamatan">Kecamatan</label>
                                                <select name="kec_identitas" id="camat" class="form-control form-control-user">
                                                    <option value="">Pilih</option>
                                                </select>
                                                <?php echo form_error('kec_identitas', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="Desa/Kelurahan">Desa/Kelurahan</label>
                                                <select name="kel_identitas" id="lurah" class="form-control form-control-user">
                                                    <option value="">Pilih</option>
                                                </select>
                                                <?php echo form_error('kel_identitas', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="alamat_identitas" placeholder="Alamat sesuai Tanda Pengenal" value="<?= set_value('alamat_identitas') ?>" onkeyup="this.value = this.value.toUpperCase()">
                                                <?php echo form_error('alamat_identitas', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="pos_identitas" id="" placeholder="Kode Pos" value="<?= set_value('pos_identitas') ?>"></div>
                                        </div>
                                        <div class="col-lg-12"></div>

                                        <div class="col-lg-12">
                                            <div class="alert alert-info alert-dismissible" role="alert">
                                                Mohon isi alamat domisili!
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="Provinsi">Provinsi</label>
                                                <select name="prov_domisili" id="prop_domisili" class="form-control form-control-user">
                                                    <option value="">Pilih</option>
                                                    <?php foreach ($prop as $row) : ?>
                                                        <option value="<?= $row->kode; ?>" <?= set_select('prov_domisili', $row->kode) ?>><?= ucwords($row->nama); ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <?php echo form_error('prov_domisili', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="Kabupaten/Kota">Kabupaten/Kota</label>
                                                <select name="kab_domisili" id="kota_domisili" class="form-control form-control-user">
                                                    <option value="">Pilih</option>
                                                </select>
                                                <?php echo form_error('kab_domisili', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="Kecamatan">Kecamatan</label>
                                                <select name="kec_domisili" id="camat_domisili" class="form-control form-control-user">
                                                    <option value="">Pilih</option>
                                                </select>
                                                <?php echo form_error('kec_domisili', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="Desa/Kelurahan">Desa/Kelurahan</label>
                                                <select name="kel_domisili" id="lurah_domisili" class="form-control form-control-user">
                                                    <option value="">Pilih</option>
                                                </select>
                                                <?php echo form_error('kel_domisili', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="alamat_domisili" placeholder="Alamat Domisili" value="<?= set_value('alamat_domisili') ?>" onkeyup="this.value = this.value.toUpperCase()" />
                                                <?php echo form_error('alamat_domisili', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="pos_domisili" id="" placeholder="Kode Pos" value="<?= set_value('pos_domisili') ?>"></div>
                                            <?php echo form_error('pos_domisili', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div> <!-- end tab identitas -->
                                <div id="kontak" class="tab-pane fade">
                                    <p class="alert alert-danger" role="alert" style="margin-top: 25px;">Mohon isi sesuai data sebenarnya!</p>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="nm_ayah" placeholder="Nama Ayah Kandung" value="<?= set_value('nm_ayah') ?>" onkeyup="this.value = this.value.toUpperCase()">
                                                <?php echo form_error('nm_ayah', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="nm_ibu" placeholder="Nama Gadis Ibu Kandung" value="<?= set_value('nm_ibu') ?>" onkeyup="this.value = this.value.toUpperCase()">
                                                <?php echo form_error('nm_ibu', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="nm_ahli_waris" placeholder="Nama Ahli Waris" value="<?= set_value('nm_ahli_waris') ?>" onkeyup="this.value = this.value.toUpperCase()">
                                                <?php echo form_error('nm_ahli_waris', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="hb_aw">Hubungan dengan Ahli Waris</label>
                                            <?php
                                            $style = 'class="form-control custom-select custom-select-md" required';
                                            echo form_dropdown('hb_ahli_waris', $aw, '', $style);
                                            ?>
                                            <?php echo form_error('hb_ahli_waris', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="alamat_aw"></label>
                                                <input type="text" class="form-control form-control-user" name="alamat_ahli_waris" placeholder="Alamat Ahli Waris" style="margin-top: 5px;" value="<?= set_value('alamat_ahli_waris') ?>" onkeyup="this.value = this.value.toUpperCase()" />
                                                <?php echo form_error('alamat_ahli_waris', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="no_aw"></label>
                                                <input type="text" class="form-control form-control-user" name="no_ahli_waris" placeholder="No Ahli Waris" style="margin-top: 5px;" value="<?= set_value('no_ahli_waris') ?>">
                                                <?php echo form_error('no_ahli_waris', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="status_pernikahan dana">Status Pernikahan</label>
                                                <?php
                                                $style = 'class="form-control custom-select custom-select-md" required';
                                                echo form_dropdown('status_menikah', $status, '', $style);
                                                ?>
                                                <?php echo form_error('status_menikah', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="nm_pasangan"></label>
                                                <input type="text" name="nm_pasangan" class="form-control form-control-user" placeholder="Nama Pasangan" style="margin-top: 5px;" value="<?= set_value('nm_pasangan') ?>" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for=""></label>
                                                <input type="text" class="form-control form-control-user" name="tmp_lhr_pasangan" placeholder="Tempat Lahir Pasangan" style="margin-top: 5px;" value="<?= set_value('tmp_lhr_pasangan') ?>" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label"></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-user datepicker" aria-describedby="start-date" name="tgl_lhr_pasangan" placeholder="Tanggal Lahir Pasangan" style="margin-top: 5px;" value="<?= set_value('tgl_lhr_pasangan') ?>">
                                                    <span class="input-group-addon" id="start-date" style="margin-top: 5px;"><span class="fa fa-calendar"></span></span>
                                                </div>
                                                <?php echo form_error('tgl_lhr_pasangan', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-12"></div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label for="jenis_id_pasangan">Jenis Identitas</label>
                                                <?php
                                                $style = 'class="form-control custom-select custom-select-md" required';
                                                echo form_dropdown('identitas_pasangan', $identitas, '', $style);
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for=""></label>
                                                <input type="number" class="form-control form-control-user" name="no_identitas_pasangan" placeholder="Nomor Identitas Pasangan" style="margin-top: 5px;" value="<?= set_value('no_identitas_pasangan') ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for=""></label>
                                                <input type="text" class="form-control form-control-user" name="alamat_pasangan" placeholder="Alamat Pasangan" style="margin-top: 5px;" value="<?= set_value('alamat_pasangan') ?>" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for=""></label>
                                                <input type="number" class="form-control form-control-user" name="no_pasangan" placeholder="No. HP Pasangan" style="margin-top: 5px;" value="<?= set_value('no_pasangan') ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="pekerjaan" class="tab-pane fade">
                                    <p class="alert alert-danger" role="alert" style="margin-top: 25px;">Mohon isi sesuai data sebenarnya!</p>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group text-center">
                                                <label for="profesi">Profesi</label>
                                                <?php
                                                $style = 'class="form-control custom-select custom-select-md" required';
                                                echo form_dropdown('profesi', $profesi, '', $style);
                                                ?>
                                                <?php echo form_error('profesi', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="jenis_pekerjaan">Jenis Pekerjaan</label>
                                            <?php
                                            $style = 'class="form-control custom-select custom-select-md" required';
                                            echo form_dropdown('jenis_pekerjaan', $jenis_pekerjaan, '', $style);
                                            ?>
                                            <?php echo form_error('jenis_pekerjaan', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="status_pekerjaan">Status Pekerjaan</label>
                                                <?php
                                                $style = 'class="form-control custom-select custom-select-md" required';
                                                echo form_dropdown('status_pekerjaan', $status_pekerjaan, '', $style);
                                                ?>
                                                <?php echo form_error('status_pekerjaan', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="sumber_dana">Sumber Penghasilan</label>
                                                <?php
                                                $style = 'class="form-control custom-select custom-select-md" required';
                                                echo form_dropdown('sumber_dana', $sumber_dana, '', $style);
                                                ?>
                                                <?php echo form_error('sumber_dana', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" name="jabatan" id="" class="form-control form-control-user" placeholder="Jabatan" value="<?= set_value('jabatan') ?>" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" name="gaji_bln" id="" class="form-control form-control-user" placeholder="Gaji per Bulan" value="<?= set_value('gaji_bln') ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="perusahaan" id="" class="form-control form-control-user" placeholder="Nama Perusahaan / Usaha" value="<?= set_value('perusahaan') ?>" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <input type="text" name="alamat_kantor" class="form-control form-control-user" placeholder="Alamat Perusahaan / Usaha" value="<?= set_value('alamat_kantor') ?>" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input type="text" name="telp_kantor" id="" class="form-control form-control-user" placeholder="No. Telp Kantor / Usaha" value="<?= set_value('telp_kantor') ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="frm-group">
                                                <input type="text" name="email_kantor" id="" class="form-control form-control-user" placeholder="Email Kantor" value="<?= set_value('email_kantor') ?>" onkeyup="this.value = this.value.toLowerCase()">
                                            </div>
                                        </div>
                                        <div class="col-lg-12"></div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="gaji_thn">Penghasilan/Gaji Kotor per Tahun (Rp.)</label>
                                                <select name="gaji_thn" id="gaji_thn" class="form-control custom-select custom-select-md">
                                                    <option value="">Kecil dari 15 Juta</option>
                                                    <option value="">Berkisar dari 15 sampai 100 Juta</option>
                                                    <option value="">Berkisar dari 100 sampai 200 Juta</option>
                                                    <option value="">Lebih dari 200 Juta</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="tambahan_penghasilan">Penghasilan Lainnya per Tahun (Rp.)</label>
                                                <select name="tambahan_penghasilan" id="tambahan_penghasilan" class="form-control custom-select custom-select-md">
                                                    <option value="">Kecil dari 15 Juta</option>
                                                    <option value="">Berkisar dari 15 sampai 100 Juta</option>
                                                    <option value="">Berkisar dari 100 sampai 200 Juta</option>
                                                    <option value="">Lebih dari 200 Juta</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="tot_penghasilan">Total Penghasilan per Tahun (Rp.)</label>
                                                <select name="tot_penghasilan" id="tot_penghasilan" class="form-control custom-select custom-select-md">
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
                                                <label for="status_rumah">Status Tempat Tinggal</label>
                                                <?php
                                                $style = 'class="form-control custom-select custom-select-md" required';
                                                echo form_dropdown('status_rumah', $status_rumah, '', $style);
                                                ?>
                                                <?php echo form_error('status_rumah', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="">Jumlah Tanggungan</label>
                                                <input type="text" class="form-control form-control-user" name="tanggungan" placeholder="Jumlah Tanggungan" value="<?= set_value('tanggungan') ?>">
                                                <?php echo form_error('tanggungan', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="tujuan_buka">Tujuan Pembukaan Rekening</label>
                                                <?php
                                                $style = 'class="form-control custom-select custom-select-md" required';
                                                echo form_dropdown('tujuan_buka', $tujuan_buka, '', $style);
                                                ?>
                                                <?php echo form_error('tujuan_buka', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="jenis tabungan">Jenis Tabungan</label>
                                                <select class="form-control custom-select custom-select-md" id="jenis_tab" name="jenis_tab">
                                                    <option value="" disabled diselected>--Pilih Jenis Produk--</option>
                                                    <?php foreach ($jenis as $row) : ?>
                                                        <option value="<?= $row->id_produk; ?>"><?= ucwords($row->produk); ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <?php echo form_error('jenis_tab', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-12"></div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="pendidikan">Pendidikan Terakhir</label>
                                                <?php
                                                $style = 'class="form-control custom-select custom-select-md" required';
                                                echo form_dropdown('pendidikan', $pendidikan, '', $style);
                                                ?>
                                                <?php echo form_error('pendidikan', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for=""></label>
                                                <input type="text" class="form-control form-control-user" name="email" placeholder="Email" value="<?= set_value('email') ?>" onkeyup="this.value = this.value.toLowerCase()" />
                                                <?php echo form_error('email', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for=""></label>
                                                <input type="text" class="form-control form-control-user" name="npwp" id="npwp" placeholder="No. NPWP" value="<?= set_value('npwp') ?>"></div>
                                            <?php echo form_error('npwp', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="dokumen" class="tab-pane fade">
                                    <p class="alert alert-danger" role="alert" style="margin-top: 25px;">Mohon isi sesuai data sebenarnya!</p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="image">Lampirkan Foto Tanda Pengenal (KTP, SIM, Passport)</label>
                                                <input type="file" class="form-control-file" name="ft_identitas" required>
                                                <?php echo form_error('ft_identitas', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="image">Lampirkan Foto Kartu Keluarga</label>
                                                <input type="file" class="form-control-file" name="ft_kk" required>
                                                <?php echo form_error('ft_kk', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="image">Lampirkan Foto Selfie</label>
                                                <input type="file" class="form-control-file" name="ft_diri" required>
                                                <?php echo form_error('ft_diri', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="image">Lampirkan Foto Tanda Tangan</label>
                                                <input type="file" class="form-control-file" name="ft_ttd" required>
                                                <?php echo form_error('ft_ttd', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="image">Lampirkan Foto NPWP</label>
                                                <input type="file" class="form-control-file" name="ft_npwp">
                                                <?php echo form_error('ft_npwp', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="alert alert-danger" role="alert">Syaratan dan Ketentuan</p>
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
                                            <button type="submit" class="btn btn-primary center-block" id="btSubmit">
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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="<?php echo base_url('assets/'); ?>js/vendor/jquery-1.12.4.min.js" type="text/javascript"></script>
<!-- <script src="<?php echo base_url('assets/'); ?>js/jquery.mask.js"></script> -->
<script>
    $(document).ready(function() {
        $("#propinsi").change(function() {
            var id = $(this).val();
            var data = "kabupaten";
            // window.alert(id);
            $.ajax({
                url: "<?php echo base_url('getDati'); ?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    id: id,
                    data: data,
                },
                success: function(response) {
                    // $('#kota').html(data);
                    $("#kota").html(response.list_kota).show();
                }
            });
        });

        $("#kota").change(function() {
            var id = $(this).val();
            var data = "kecamatan";
            $.ajax({
                url: "<?= base_url('getDati'); ?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    id: id,
                    data: data,
                },
                success: function(response) {
                    $("#camat").html(response.list_kota).show();
                }
            });
        });
        $("#camat").change(function() {
            var id = $(this).val();
            var data = "desa";
            $.ajax({
                url: "<?= base_url('getDati'); ?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    id: id,
                    data: data,
                },
                success: function(response) {
                    $("#lurah").html(response.list_kota).show();
                }
            });
        });
        $("#prop_domisili").change(function() {
            var id = $(this).val();
            var data = "kabupaten";
            // window.alert(id);
            $.ajax({
                url: "<?php echo base_url('getDati'); ?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    id: id,
                    data: data,
                },
                success: function(response) {
                    // $('#kota').html(data);
                    $("#kota_domisili").html(response.list_kota).show();
                }
            });
        });

        $("#kota_domisili").change(function() {
            var id = $(this).val();
            var data = "kecamatan";
            $.ajax({
                url: "<?= base_url('getDati'); ?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    id: id,
                    data: data,
                },
                success: function(response) {
                    $("#camat_domisili").html(response.list_kota).show();
                }
            });
        });
        $("#camat_domisili").change(function() {
            var id = $(this).val();
            var data = "desa";
            $.ajax({
                url: "<?= base_url('getDati'); ?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    id: id,
                    data: data,
                },
                success: function(response) {
                    $("#lurah_domisili").html(response.list_kota).show();
                }
            });
        });
        $(".datepicker").datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            // todayHighlight: true,
        });
    });
</script>