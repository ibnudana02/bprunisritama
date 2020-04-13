<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $heading; ?></h1>
    <!-- <p class="mb-4">Fitur ini digunakan untuk Menambah dan menghapus Kategori. Hanya dapat diakses oleh Administrator.</p> -->
    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <!-- <h6 class="mx-auto font-weight-bold text-primary">List User</h6> -->
                            <h4 class="font-weight-bold text-primary">Corporate</h4>
                        </div>
                        <!-- <div class="col-4"><a href="<?= base_url('admin/add_kategori'); ?>" class="btn btn-facebook float-right">Add Kategori</a></div> -->
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive-md">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Corporate</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($data as $row) : ?>
                                    <tr>
                                        <th><?= $no++; ?>
                                        <th><?= htmlspecialchars($row->company); ?></th>
                                        <th><?= htmlspecialchars($row->alamat); ?></th>
                                        <th><?= htmlspecialchars($row->email); ?></th>
                                        <!-- <th width><a href="<?php echo $row->id_kategori; ?>" class="btn btn-sm btn-info float-center" data-target="#edit<?php echo $row->id_kategori; ?>" data-toggle="modal">Edit</a>
                                            <a href="<?php echo $row->id_kategori; ?>" class="btn btn-sm btn-danger float-center" data-target="#hapus<?php echo $row->id_kategori; ?>" data-toggle="modal">Hapus</a></th> -->
                                    </tr>

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