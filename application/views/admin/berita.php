<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg">
            <div class="card shadow mb-4 table-responsive-md">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <!-- <h6 class="mx-auto font-weight-bold text-primary">List User</h6> -->
                            <h4 class="font-weight-bold text-primary">List Berita</h4>
                        </div>
                        <div class="col-4"><a href="<?= base_url('admin/add_berita'); ?>" class="btn btn-facebook float-right">Tambah Berita</a></div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="10%">No.</th>
                                    <th width="10%">Tanggal</th>
                                    <th width="10%">Gambar</th>
                                    <th width="15%">Kategori</th>
                                    <th width="15%">Judul</th>
                                    <th width="15%">Penulis</th>
                                    <th width="15%">Isi</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                date_default_timezone_set('Asia/Jakarta');
                                foreach ($data as $row) : ?>
                                    <tr>
                                        <th><?= $no++; ?></th>
                                        <th><?php echo $row->update_on; ?></th>
                                        <th><img src="<?= base_url('upload/berita/' . $row->image); ?>" width="70" height="70"> </th>
                                        <th><?= htmlspecialchars($row->kategori); ?></th>
                                        <th><?= html_entity_decode($row->judul); ?></th>
                                        <th><?= htmlspecialchars($row->penulis); ?></th>
                                        <th><?= html_entity_decode(substr($row->isi, 0, 42)); ?></th>
                                        <th width><a href="<?php echo $row->id_berita; ?>" class="btn btn-sm btn-info float-center" data-target="#edit<?php echo $row->id_berita; ?>" data-toggle="modal">Edit</a>
                                            <a href="<?php echo $row->id_berita; ?>" class="btn btn-sm btn-danger float-center" data-target="#hapus<?php echo $row->id_berita; ?>" data-toggle="modal">Hapus</a></th>
                                    </tr>
                                    <div id="hapus<?= $row->id_berita; ?>" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                                                    <a href="<?= base_url('admin/delete_berita/' . $row->id_berita) ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete User">Hapus</a>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Kembali">Tidak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="edit<?= $row->id_berita; ?>" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                                                    <a href="<?= base_url('admin/update/' . $row->id_berita) ?>" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Delete User">Edit</a>
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