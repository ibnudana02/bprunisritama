<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="font-weight-bold text-primary">Daftar Nasabah eForm</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive-md">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Referensi</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tujuan Pembukaan</th>
                                    <th>Jenis Tabungan</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($data as $row) : ?>
                                    <tr>
                                        <th><?= $no++; ?>
                                        <th><?= htmlspecialchars($row->kd_ref); ?></th>
                                        <th><?= htmlspecialchars($row->nm_lengkap); ?></th>
                                        <th><?= htmlspecialchars($row->tujuan_buka); ?></th>
                                        <th><?= htmlspecialchars(strtoupper($row->produk)); ?></th>
                                        <th><?= htmlspecialchars($row->status); ?></th>
                                        <th width><a href="<?= base_url('acc-nsb/' . $row->id_nsb) ?>" id="acc" class="btn btn-sm btn-info float-center"><i class="fas fa-check"></i></a>
                                            <a href="<?= base_url('cetak-nasabah-tab/' . $row->id_nsb) ?>" target="_blank" class="btn btn-sm btn-success float-center"><i class="fas fa-print"></i></a>
                                            <a href="<?php echo $row->id_nsb; ?>" class="btn btn-sm btn-danger float-center" data-target="#hapus<?php echo $row->id_nsb; ?>" data-toggle="modal"><i class="fas fa-trash"></i></a></th>
                                    </tr>
                                    <div id="hapus<?= $row->id_nsb; ?>" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                                                    <a href="<?= base_url('del-nsb/' . $row->id_nsb) ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete User">Hapus</a>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('#acc').click(function() {
            var status = <?php echo $row->status ?>;
            if (status == 'APPROVED') {
                $('a')
            }
        });
        $('#acc').get
    })
</script>