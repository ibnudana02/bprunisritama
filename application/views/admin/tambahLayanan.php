<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg-10">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="mx-auto font-weight-bold text-primary">Tambah Layanan</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body col-12 mx-auto">
                    <div class="table-responsive">
                        <div class="col-10 mx-auto">
                            <form class="user" method="post" action="<?= base_url('admin/add_layanan'); ?>">
                                <div class="form-group">
                                    <label>Layanan</label>
                                    <input type="text" class="form-control form-control-user" name="layanan" id="layanan" placeholder="Enter layanan" value="<?= set_value('layanan'); ?>">
                                    <?php echo form_error('layanan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" rows="3" class="form-control" required data-error="Write your deskripsi"></textarea>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 ">
                                        <a href="<?= base_url('admin/layanan'); ?>" class="btn btn-google btn-user btn-block">
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
<script src="<?= base_url('assets/'); ?>ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
</script>