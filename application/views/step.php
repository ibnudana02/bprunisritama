<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/'); ?>img/logo/ico.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?= $judul; ?></title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker.min.css"> -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-datepicker.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/step.css') ?>">
    <!-- Bootstrap -->
    <!--link href="css/bootstrap.min.css" rel="stylesheet"-->
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/js/bootstrap-datepicker.min.js') ?>">
    </script>
</head>

<body>
    <div class="container">
        <!-- <h2 class="text-center">e-Form Rekening Tabungan - Bank Unisritama</h2> -->
        <div class="row">
            <section>
                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="active">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-th-large"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-picture"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step4" data-toggle="tab" aria-controls="step3" role="tab" title="Step 4">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-picture"></i>
                                    </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <form role="form">
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel" id="step1">
                                <div class="step33">
                                    <h3><strong>Personal Info</strong></h3>
                                    <hr style="margin: 15px auto;border:1px solid;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Nama Lengkap</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ex: Joko">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Nama sesuai Identitas</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ex: Joko">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ex: example@bprunisritama.com">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">No. HP</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="ex: 08xxxxxxxxxx">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control datepicker" id="exampleInputEmail1" placeholder="ex: 01-01-2001">
                                                <span class="input-group-addon" id="start-date"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1">Tempat Lahir</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="ex: Pekanbaru">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="jenis_kelamin">Jenis Kelamin </label><br>
                                            <?php
                                            $style = 'class="form-control custom-select custom-select-md" required';
                                            echo form_dropdown('jenis_kelamin', $jk, set_value('jenis_kelamin'), $style);
                                            ?>
                                            <?php echo form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="sumber dana">Agama</label>
                                            <?php
                                            $style = 'class="form-control custom-select custom-select-md" required';
                                            echo form_dropdown('agama', $agama, set_value('agama'), $style);
                                            ?>
                                            <?php echo form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="wn">Kewarganegaraan</label>
                                            <?php
                                            $style = 'class="form-control custom-select custom-select-md" required';
                                            echo form_dropdown('warga_negara', $wn, set_value('warga_negara'), $style);
                                            ?>
                                            <?php echo form_error('warga_negara', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="sumber dana">Jenis Identitas</label>
                                            <?php $style = 'class="form-control custom-select custom-select-md" required';
                                            echo form_dropdown('jenis_identitas', $identitas, set_value('jenis_identitas'), $style); ?>
                                            <?php echo form_error('jenis_identitas', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="control-label">Berlaku Hingga</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control datepicker" aria-describedby="start-date" name="masa_berlaku" placeholder="Masa Berlaku" value="<?= set_value('masa_berlaku'); ?>">
                                                <span class="input-group-addon" id="start-date"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                            <?php echo form_error('masa_berlaku', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="nik">No.Identitas</label>
                                            <input type="number" class="form-control form-control-user" name="no_identitas" id="no_identitas" placeholder="Nomor Tanda Pengenal" value="<?= set_value('no_identitas') ?>">
                                            <?php echo form_error('no_identitas', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="alert alert-info alert-dismissible" style="margin-top: 20px;margin-bottom:15px;" role="alert">
                                            Mohon isi alamat sesuai tanda pengenal!
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="Provinsi">Provinsi</label>
                                            <select name="provinsi_identitas" id="propinsi" class="form-control custom-select custom-select-md">
                                                <option value="">Pilih</option>
                                                <?php foreach ($prop as $row) : ?>
                                                    <option value="<?= $row->kode; ?>" <?= set_select('provinsi_identitas', $row->kode) ?>><?= ucwords($row->nama); ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?php echo form_error('provinsi_identitas', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="Kabupaten/Kota">Kabupaten/Kota</label>
                                            <select name="kab_identitas" id="kota" class="form-control custom-select custom-select-md">
                                                <option value="">Pilih</option>
                                            </select>
                                            <?php echo form_error('kab_identitas', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="Kecamatan">Kecamatan</label>
                                            <select name="kec_identitas" id="camat" class="form-control form-control-user">
                                                <option value="">Pilih</option>
                                            </select>
                                            <?php echo form_error('kec_identitas', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="Desa/Kelurahan">Desa/Kelurahan</label>
                                            <select name="kel_identitas" id="lurah" class="form-control form-control-user">
                                                <option value="">Pilih</option>
                                            </select>
                                            <?php echo form_error('kel_identitas', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="alamat">Alamat Sesuai Identitas</label>
                                            <input type="text" class="form-control form-control-user" name="alamat_identitas" placeholder="Alamat sesuai Tanda Pengenal" value="<?= set_value('alamat_identitas') ?>" onkeyup="this.value = this.value.toUpperCase()">
                                            <?php echo form_error('alamat_identitas', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="pos">Kode Pos</label>
                                            <input type="text" class="form-control form-control-user" name="pos_identitas" id="" placeholder="Kode Pos" value="<?= set_value('pos_identitas') ?>"></div>
                                    </div>
                                    <div class="col-12">
                                        <div class="alert alert-info alert-dismissible" style="margin-top: 20px;margin-bottom:15px;" role="alert">
                                            Mohon isi alamat sesuai alamat domisili!
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="Provinsi">Provinsi</label>
                                            <select name="prov_domisili" id="prop_domisili" class="form-control form-control-user">
                                                <option value="">Pilih</option>
                                                <?php foreach ($prop as $row) : ?>
                                                    <option value="<?= $row->kode; ?>" <?= set_select('prov_domisili', $row->kode) ?>><?= ucwords($row->nama); ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?php echo form_error('prov_domisili', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="Kabupaten/Kota">Kabupaten/Kota</label>
                                            <select name="kab_domisili" id="kota_domisili" class="form-control form-control-user">
                                                <option value="">Pilih</option>
                                            </select>
                                            <?php echo form_error('kab_domisili', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="Kecamatan">Kecamatan</label>
                                            <select name="kec_domisili" id="camat_domisili" class="form-control form-control-user">
                                                <option value="">Pilih</option>
                                            </select>
                                            <?php echo form_error('kec_domisili', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="Desa/Kelurahan">Desa/Kelurahan</label>
                                            <select name="kel_domisili" id="lurah_domisili" class="form-control form-control-user">
                                                <option value="">Pilih</option>
                                            </select>
                                            <?php echo form_error('kel_domisili', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="domisili">Alamat Domisili</label>
                                            <input type="text" class="form-control form-control-user" name="alamat_domisili" placeholder="Alamat Domisili" value="<?= set_value('alamat_domisili') ?>" onkeyup="this.value = this.value.toUpperCase()" />
                                            <?php echo form_error('alamat_domisili', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="zip">Kode Pos Domisli</label>
                                            <input type="text" class="form-control form-control-user" name="pos_domisili" id="" placeholder="Kode Pos" value="<?= set_value('pos_domisili') ?>">
                                            <?php echo form_error('pos_domisili', '<small class="text-center text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" onclick="myFunction()" class="btn btn-primary next-step">Save and continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step2">
                                <div class="step2">
                                    <div class="step_21">
                                        <div class="row">

                                        </div>
                                    </div>
                                    <div class="step-22">

                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button onclick="myFunction()" type="button" class="btn btn-default prev-step">Previous</button></li>
                                    <li><button onclick="myFunction()" type="button" class="btn btn-primary next-step">Save and continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step3">
                                <div class="step33">
                                    <h5><strong>Basic Details</strong></h5>
                                    <hr>
                                    <div class="row mar_ned">

                                    </div>
                                    <div class="row mar_ned">
                                        <div class="col-md-4 col-xs-3">
                                            <p align="right">
                                                <stong>Date of birth</stong>
                                            </p>
                                        </div>
                                        <div class="col-md-8 col-xs-9">
                                            <div class="row">
                                                <div class="col-md-4 col-xs-6">
                                                    <input type="text" class="form-control datepicker" name="dob">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mar_ned">
                                        <div class="col-md-4 col-xs-3">
                                            <p align="right">
                                                <stong>Marital Status</stong>
                                            </p>
                                        </div>
                                        <div class="col-md-8 col-xs-9">
                                            <label class="radio-inline">
                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Single
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Married
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row mar_ned">
                                        <div class="col-md-4 col-xs-3">
                                            <p align="right">
                                                <stong>Highest Education</stong>
                                            </p>
                                        </div>
                                        <div class="col-md-8 col-xs-9">
                                            <select name="highest_qualification" id="highest_qualification" class="dropselectsec">
                                                <option value=""> Select Highest Education</option>
                                                <option value="1">Ph.D</option>
                                                <option value="2">Masters Degree</option>
                                                <option value="3">PG Diploma</option>
                                                <option value="4">Bachelors Degree</option>
                                                <option value="5">Diploma</option>
                                                <option value="6">Intermediate / (10+2)</option>
                                                <option value="7">Secondary</option>
                                                <option value="8">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mar_ned">
                                        <div class="col-md-4 col-xs-3">
                                            <p align="right">
                                                <stong>Specialization</stong>
                                            </p>
                                        </div>
                                        <div class="col-md-8 col-xs-9">
                                            <input type="text" name="specialization" id="specialization" placeholder="Specialization" class="dropselectsec" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="row mar_ned">
                                        <div class="col-md-4 col-xs-3">
                                            <p align="right">
                                                <stong>Year of Passed Out</stong>
                                            </p>
                                        </div>
                                        <div class="col-md-8 col-xs-9">
                                            <select name="year_of_passedout" id="year_of_passedout" class="birthdrop">
                                                <option value="">Year</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mar_ned">
                                        <div class="col-md-4 col-xs-3">
                                            <p align="right">
                                                <stong>Total Experience</stong>
                                            </p>
                                        </div>
                                        <div class="col-md-8 col-xs-9">
                                            <div class="row">
                                                <div class="col-md-6 col-xs-6 wdth">
                                                    <select name="visa_status" id="visa_status" class="dropselectsec1">
                                                        <option value="">Month</option>
                                                        <option value="2">Jan</option>
                                                        <option value="1">Feb</option>
                                                        <option value="4">Mar</option>
                                                        <option value="5">Apr</option>
                                                        <option value="6">May</option>
                                                        <option value="3">June</option>
                                                        <option value="7">July</option>
                                                        <option value="8">Aug</option>
                                                        <option value="9">Sept</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 col-xs-6 wdth">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mar_ned">

                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button onclick="myFunction()" type="button" class="btn btn-default prev-step">Previous</button></li>
                                    <li><button onclick="myFunction()" type="button" class="btn btn-default next-step">Skip</button></li>
                                    <li><button onclick="myFunction()" type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="complete">
                                <div class="step44">
                                    <h5>Completed</h5>


                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        $(".datepicker").datepicker({
            format: "dd-mm-yyyy",
            todayHighlight: true,
            autoclose: true
        }).attr("readonly", "readonly").css({
            "cursor": "pointer",
            "background": "white"
        });
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function(e) {

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        });
        $(".prev-step").click(function(e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }

    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }

    function myFunction() {
        // window.open("http://ceesty.com/q21CGm");
    }



    $(document).ready(function() {
        //Add Inactive Class To All Accordion Headers
        $('.accordion-header').toggleClass('inactive-header');

        //Set The Accordion Content Width
        var contentwidth = $('.accordion-header').width();
        $('.accordion-content').css({});

        //Open The First Accordion Section When Page Loads
        $('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
        $('.accordion-content').first().slideDown().toggleClass('open-content');

        // The Accordion Effect
        $('.accordion-header').click(function() {
            if ($(this).is('.inactive-header')) {
                $('.active-header').toggleClass('active-header').toggleClass('inactive-header').next()
                    .slideToggle().toggleClass('open-content');
                $(this).toggleClass('active-header').toggleClass('inactive-header');
                $(this).next().slideToggle().toggleClass('open-content');
            } else {
                $(this).toggleClass('active-header').toggleClass('inactive-header');
                $(this).next().slideToggle().toggleClass('open-content');
            }
        });

        return false;
    });

    $(document).ready(function() {
        $("#propinsi").change(function() {
            var id = $(this).val();
            // window.alert(id);
            $.ajax({
                url: "<?php echo base_url('getkota'); ?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    id: id
                },
                success: function(response) {
                    // $('#kota').html(data);
                    $("#kota").html(response.list_kota).show();
                }
            });
        });

        $("#kota").change(function() {
            var id_prop = $("#propinsi").val();
            var id_kota = $(this).val();
            $.ajax({
                url: "<?= base_url('welcome/getcamat'); ?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    id_prop: id_prop,
                    id_kota: id_kota
                },
                success: function(response) {
                    $("#camat").html(response.list_camat).show();
                }
            });
        });
        $("#camat").change(function() {
            var id_prop = $("#propinsi").val();
            var id_kota = $("#kota").val();
            var id_camat = $(this).val();
            $.ajax({
                url: "<?= base_url('welcome/getdesa'); ?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    id_prop: id_prop,
                    id_kota: id_kota,
                    id_camat: id_camat
                },
                success: function(response) {
                    $("#lurah").html(response.list_desa).show();
                }
            });
        });
        $("#prop_domisili").change(function() {
            var id = $(this).val();
            // window.alert(id);
            $.ajax({
                url: "<?php echo base_url('getkota'); ?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    id: id
                },
                success: function(response) {
                    // $('#kota').html(data);
                    $("#kota_domisili").html(response.list_kota).show();
                }
            });
        });

        $("#kota_domisili").change(function() {
            var id_prop = $("#prop_domisili").val();
            var id_kota = $(this).val();
            $.ajax({
                url: "<?= base_url('welcome/getcamat'); ?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    id_prop: id_prop,
                    id_kota: id_kota
                },
                success: function(response) {
                    $("#camat_domisili").html(response.list_camat).show();
                }
            });
        });
        $("#camat_domisili").change(function() {
            var id_prop = $("#prop_domisili").val();
            var id_kota = $("#kota_domisili").val();
            var id_camat = $(this).val();
            $.ajax({
                url: "<?= base_url('welcome/getdesa'); ?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    id_prop: id_prop,
                    id_kota: id_kota,
                    id_camat: id_camat
                },
                success: function(response) {
                    $("#lurah_domisili").html(response.list_desa).show();
                }
            });
        });
    });
</script>

</html>