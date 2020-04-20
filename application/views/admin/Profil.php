<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $heading; ?></h1>
    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <!-- <h6 class="mx-auto font-weight-bold text-primary">List User</h6> -->
                            <h4 class="font-weight-bold text-primary">Profil</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body col-12 mx-auto">
                    <div class="table-responsive">
                        <div class="col-10 mx-auto">
                            <div class="form-group user">
                                <label>Nama</label>
                                <input type="text" class="form-control form-control-user" value="<?= $user['name']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control form-control-user" value="<?= $user['email']; ?>" disabled>
                            </div>
                            <div class="form-group user">
                                <label for="Image">Gambar</label><br>
                                <img src="<?= base_url('upload/user/' . $user['image']); ?>" class="rounded" alt="" height="100px" width="100px">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->