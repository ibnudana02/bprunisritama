<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <!-- <?php echo $error; ?> -->
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="mx-auto font-weight-bold text-primary">Tambah Pegawai</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body col-12 mx-auto">
                    <div class="table-responsive">
                        <div class="col-10 mx-auto">
                            <form class="user" method="post" action="<?= base_url('admin/add_pegawai'); ?>">
                                <div class="form-group">
                                    <label>Nama Pegawai</label>
                                    <input type="text" class="form-control form-control-user" name="nama" id="nama" placeholder="Enter Nama Pegawai" value="<?= set_value('nama'); ?>">
                                    <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <select class="form-control custom-select custom-select-md" id="jabatan" name="jabatan">
                                        <option value="" disabled diselected>--Pilih Jabatan--</option>
                                        <?php foreach ($jabatan as $row) : ?>
                                            <option value="<?= $row->id_jabatan; ?>"><?= $row->jabatan; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 ">
                                        <a href="<?= base_url('admin/pegawai'); ?>" class="btn btn-google btn-user btn-block">
                                            Cancel
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-facebook btn-user btn-block">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->