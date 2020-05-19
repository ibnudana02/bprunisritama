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
                            <h4 class="font-weight-bold text-primary">Tambah Berita</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body col-12 mx-auto">
                    <div class="table-responsive">
                        <div class="col-10 mx-auto">
                            <form class="user" method="post" action="<?= base_url('admin/add_berita'); ?>" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" class="form-control form-control-user" name="judul" id="judul" placeholder="Enter Judul" value="<?= set_value('judul'); ?>">
                                    <?php echo form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control custom-select custom-select-md" id="kategori" name="kategori">
                                        <option value="" disabled diselected>--Pilih Kategori--</option>
                                        <?php foreach ($kategori as $row) : ?>
                                            <option value="<?= $row->id_kategori; ?>"><?= $row->kategori; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div id="toolbar-container"></div>
                                <div class="form-group">
                                    <label>Isi</label>
                                    <textarea id="editor" name="isi"></textarea>
                                </div>
                                <?php echo form_error('image', '<small class="text-danger pl-5">', '</small>'); ?>
                                <div class="form-group">
                                    <label for="image">Gambar</label>
                                    <input type="file" class="form-control-file" name="image" value="<?= set_value('image'); ?>">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 ">
                                        <a href="<?= base_url('admin/kategori'); ?>" class="btn btn-google btn-user btn-block">
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
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/decoupled-document/ckeditor.js"></script> -->
<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            // toolbar: ['heading', '|', 'bold', 'italic', 'link', 'alignment']
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(err => {
            console.error(err.stack);
        });
</script>