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
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="font-weight-bold text-primary">List Produk</h4>
                        </div>
                        <div class="col-4"><a href="<?= base_url('admin/add_produk'); ?>" class="btn btn-facebook float-right">Add Produk</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive-md">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="10%">No.</th>
                                    <th>Produk</th>
                                    <th>Jenis Produk</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($data as $row) : ?>
                                    <tr>
                                        <th><?= $no++; ?>
                                        <th><?= htmlspecialchars(ucwords($row->produk)); ?></th>
                                        <th><?= htmlspecialchars(strtoupper($row->jenis)); ?></th>
                                        <th><?= html_entity_decode(substr($row->deskripsi, 0, 80)); ?></th>
                                        <th><img src="<?= base_url('upload/produk/' . $row->image); ?>" width="70" height="70"></th>
                                        <th width><a href="<?php echo $row->id_produk; ?>" class="btn btn-sm btn-info float-center" data-target="#edit<?php echo $row->id_produk; ?>" data-toggle="modal">Edit</a>
                                            <a href="<?php echo $row->id_produk; ?>" class="btn btn-sm btn-danger float-center" data-target="#hapus<?php echo $row->id_produk; ?>" data-toggle="modal">Hapus</a></th>
                                    </tr>
                                    <div id="hapus<?= $row->id_produk; ?>" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                                                    <a href="<?= base_url('admin/delete_produk/' . $row->id_produk) ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete User">Hapus</a>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Kembali">Tidak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="edit<?= $row->id_produk; ?>" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title mt-0">Peringatan!</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5 class="modal-body mt-0">Yakin mengedit data ini?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="<?= base_url('admin/edit/' . $row->id_produk) ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Delete User">Edit</a>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Kembali">Tidak</button>
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