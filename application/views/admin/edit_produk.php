<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="row">
        <div class="col-lg-10">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="mx-auto font-weight-bold text-primary">Edit Produk</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body col-12 mx-auto">
                    <div class="table-responsive">
                        <div class="col-10 mx-auto">
                            <form class="user" method="post" action="" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $produk->id_produk?>"/>
                                <div class="form-group">
                                    <label>Produk</label>
                                    <input type="text" class="form-control form-control-user" name="produk" id="produk" placeholder="Enter produk" value="<?= $produk->produk ?>">
                                    <?php echo form_error('produk', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Produk</label>
                                    <select class="form-control custom-select custom-select-md" id="jenis" name="jenis">
                                        <option value="" disabled diselected>--Pilih Jenis Produk--</option>
                                        <?php foreach ($data as $row) : ?>
                                            <option <?php if($row->id_jenis==$produk->jenis){
                                                echo 'selected="selected"';
                                                } ?> value="<?= $row->id_jenis; ?>"><?= strtoupper($row->jenis); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" rows="3" class="form-control" required data-error="Write your deskripsi" ><?= $produk->deskripsi ?></textarea>
                                </div>
                                <?php echo form_error('image', '<small class="text-danger pl-5">', '</small>'); ?>
                                <div class="form-group">
                                    <label for="image">Gambar</label>
                                    <input type="file" class="form-control-file" name="image" value="<?= set_value('image'); ?>">
                                    <input type="hidden" name="old_image" value="<?= $produk->image ?>" />
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
<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            // toolbar: ['heading', '|', 'bold', 'italic', 'link']
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(err => {
            console.error(err.stack);
        });
</script>