<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <?= $this->session->flashdata('message'); ?>
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">User Registration</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('admin/registration'); ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name'); ?>">
                                <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                                <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>
                            <?php echo form_error('image', '<small class="text-danger pl-5">', '</small>'); ?>
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control-file" name="image" value="<?= set_value('image'); ?>">
                            </div>
                            <div class="form-group">
                                <label>Role User</label>
                                <select class="form-control custom-select custom-select-md" id="role_id" name="role_id">
                                    <option value="" disabled diselected>--Pilih Role--</option>
                                    <?php foreach ($role as $row) : ?>
                                        <option value="<?= $row->id_role; ?>"><?= $row->role; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button class="btn btn-primary btn-user btn-block" type="submit">
                                Register User
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>