<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg-10">
            <div class="card shadow mb-4">
                <!-- <?php echo $error; ?> -->
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="font-weight-bold text-primary">Edit Berita</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body col-12 mx-auto">
                    <div class="table-responsive">
                        <div class="col-10 mx-auto">
                            <form class="user" method="post" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="hidden" name="id_berita" value="<?= $data->id_berita; ?>">
                                    <input type="text" class="form-control form-control-user" name="judul" id="judul" value="<?= strtoupper($data->judul); ?>">
                                    <?php echo form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control custom-select custom-select-md" id="kategori" name="kategori">
                                        <option value="" disabled diselected>--Pilih Kategori--</option>
                                        <?php foreach ($kategori as $row) : ?>
                                            <option <?php if ($row->id_kategori == $data->id_kategori) {
                                                        echo 'selected="selected"';
                                                    } ?> value="<?= $row->id_kategori; ?>"><?= $row->kategori; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Isi</label>
                                    <textarea id="editor" name="isi"><?= $data->isi; ?></textarea>
                                </div>
                                <?php echo form_error('image', '<small class="text-danger pl-5">', '</small>'); ?>
                                <div class="form-group row">
                                    <div class="col">
                                        <label for="image">Gambar</label><br>
                                        <input type="file" class="form-control-file" name="image" value="<?= set_value('image'); ?>">
                                    </div>
                                    <div class="col">
                                        <a href="#" class="thumbnail">
                                            <img src="<?= base_url('upload/berita/' . $data->image); ?>" height="100px" width="120px">
                                            <input type="hidden" name="old_image" value="<?= $data->image; ?>">
                                        </a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 ">
                                        <a href="<?= base_url('admin/berita'); ?>" class="btn btn-google btn-user btn-block">
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