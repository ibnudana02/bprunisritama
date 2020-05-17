<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <?php if ($this->session->flashdata('message')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert"><?= $this->session->flashdata('message') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button></div>
    <?php elseif ($this->session->flashdata('alert')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('alert') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button></div>
    <?php endif; ?>
    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg-10">
            <div class="card shadow mb-4">
                <!-- <?php echo $error; ?> -->
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="font-weight-bold text-primary">Tambah Laporan</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body col-12 mx-auto">
                    <div class="table-responsive">
                        <div class="col-10 mx-auto">
                            <form class="user" method="post" action="<?= base_url('admin/add_laporan'); ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Laporan</label>
                                    <input type="text" class="form-control form-control-user" name="laporan" id="laporan" placeholder="Enter Laporan" value="<?= set_value('laporan'); ?>">
                                    <?php echo form_error('laporan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Tipe</label>
                                    <select class="form-control custom-select custom-select-md" id="tipe" name="tipe">
                                        <option value="" disabled diselected>--Pilih Tipe--</option>
                                        <?php foreach ($tipe as $row) : ?>
                                            <option value="<?= $row->id_tipe; ?>"><?= $row->tipe; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <?php echo form_error('dokumen', '<small class="text-danger">', '</small>'); ?>
                                <div class="form-group">
                                    <label for="dokumen">Dokumen</label>
                                    <input type="file" class="form-control-file" name="dokumen" value="<?= set_value('dokumen'); ?>">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 ">
                                        <a href="<?= base_url('admin/laporan'); ?>" class="btn btn-google btn-user btn-block">
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