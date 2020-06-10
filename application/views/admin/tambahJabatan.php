<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $heading; ?></h1>
    <p class="mb-4">Fitur ini digunakan untuk Menambah dan menghapus Kategori. Hanya dapat diakses oleh Administrator.</p>
    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="font-weight-bold text-primary">Tambah Jabatan</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body col-12 mx-auto">
                    <div class="table-responsive">
                        <div class="col-10 mx-auto">
                            <form class="user" method="post" action="<?= base_url('admin/add_jabatan'); ?>">
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" class="form-control form-control-user" name="jabatan" id="jabatan" placeholder="Enter Jabatan" value="<?= set_value('kategorijabatan'); ?>">
                                    <?php echo form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Alias</label>
                                    <input type="text" class="form-control form-control-user" name="alias" id="alias" placeholder="Enter Alias" value="<?= set_value('alias'); ?>">
                                    <?php echo form_error('alias', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 ">
                                        <a href="<?= base_url('admin/jabatan'); ?>" class="btn btn-google btn-user btn-block">
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