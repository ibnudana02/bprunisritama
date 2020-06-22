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
        <div class="col-lg">
            <div class="card shadow mb-4 table-responsive-md">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <!-- <h6 class="mx-auto font-weight-bold text-primary">List User</h6> -->
                            <h4 class="font-weight-bold text-primary">List Report</h4>
                        </div>
                        <div class="col-4"><a href="<?= base_url('admin/add_laporan'); ?>" class="btn btn-facebook float-right">Tambah Laporan</a></div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Laporan</th>
                                    <th>Tipe</th>
                                    <th>Preview</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                date_default_timezone_set('Asia/Jakarta');
                                foreach ($data as $row) : ?>
                                    <tr>
                                        <th><?= $no++; ?></th>
                                        <th><?= strtoupper($row->laporan); ?></th>
                                        <th><?= $row->tipe; ?></th>
                                        <th><a href="<?= $row->id_laporan ?>" class="btn btn-sm btn-primary float-center" data-target="#view<?php echo $row->id_laporan; ?>" data-toggle="modal">View</a></th>
                                        <th width><a href="<?php echo $row->id_laporan; ?>" class="btn btn-sm btn-info float-center" data-target="#edit<?php echo $row->id_laporan; ?>" data-toggle="modal">Edit</a>
                                            <a href="<?php echo $row->id_laporan; ?>" class="btn btn-sm btn-danger float-center" data-target="#hapus<?php echo $row->id_laporan; ?>" data-toggle="modal">Hapus</a></th>
                                    </tr>
                                    <div id="hapus<?= $row->id_laporan; ?>" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title mt-0">Peringatan!</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5 class="modal-body mt-0">Yakin menghapus data ini?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="<?= base_url('admin/delete_laporan/' . $row->id_laporan) ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete User">Hapus</a>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Kembali">Tidak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="edit<?= $row->id_laporan; ?>" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title mt-0">Peringatan!</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5 class="modal-body mt-0">Yakin menghapus data ini?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="<?= base_url('admin/update/' . $row->id_laporan) ?>" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Delete User">Edit</a>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Kembali">Tidak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="view<?= $row->id_laporan; ?>" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title mt-0"><?= strtoupper($row->laporan); ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body" style="height: 420px;">
                                                    <!-- <h5 class="modal-body mt-0">Yakin menghapus data ini?</h5> -->

                                                    <embed src="<?= base_url('upload/laporan/' . $row->dokumen) ?>" type='application/pdf' width='100%' height='420px' />
                                                </div>
                                                <div class="modal-footer">
                                                    <!-- <a href="<?= base_url('admin/update/' . $row->id_laporan) ?>" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Delete User">Edit</a> -->
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Tutup">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->