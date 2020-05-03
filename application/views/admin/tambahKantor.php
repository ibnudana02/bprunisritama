<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <!-- <h6 class="mx-auto font-weight-bold text-primary">List User</h6> -->
                            <h4 class="font-weight-bold text-primary">Tambah Data Kantor</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body col-12 mx-auto">
                    <div class="table-responsive">
                        <div class="col-10 mx-auto">
                            <form class="user" method="post" action="<?= base_url('admin/add_kantor'); ?>">
                                <div class="form-group">
                                    <label>Kantor </label>
                                    <input type="text" class="form-control form-control-user" name="kantor" id="kantor" placeholder="Enter kantor" value="<?= set_value('kantor'); ?>">
                                    <?php echo form_error('kantor', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Alamat </label>
                                    <input type="text" class="form-control form-control-user" name="alamat" id="alamat" placeholder="Enter alamat" value="<?= set_value('alamat'); ?>">
                                    <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Telp </label>
                                    <input type="text" class="form-control form-control-user" name="telp" id="telp" placeholder="Enter telp" value="<?= set_value('telp'); ?>">
                                    <?php echo form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Email </label>
                                    <input type="text" class="form-control form-control-user" name="email" id="email" placeholder="Enter email" value="<?= set_value('email'); ?>">
                                    <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 ">
                                        <a href="#" class="btn btn-google btn-user btn-block">
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