<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Multiple Upload</title>
</head>

<body>
    <?php echo form_open_multipart('welcome/upload') ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control-file" name="nama">
                <?php echo form_error('ft_identitas', '<small class="text-center text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="image">Lampirkan Foto Tanda Pengenal (KTP, SIM, Passport)</label>
                <input type="file" class="form-control-file" name="ft_identitas" required>
                <?php echo form_error('ft_identitas', '<small class="text-center text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="image">Lampirkan Foto Kartu Keluarga</label>
                <input type="file" class="form-control-file" name="ft_kk" required>
                <?php echo form_error('ft_kk', '<small class="text-center text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="image">Lampirkan Foto Selfie</label>
                <input type="file" class="form-control-file" name="ft_diri" required>
                <?php echo form_error('ft_diri', '<small class="text-center text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="image">Lampirkan Foto Tanda Tangan</label>
                <input type="file" class="form-control-file" name="ft_ttd" required>
                <?php echo form_error('ft_ttd', '<small class="text-center text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="image">Lampirkan Foto NPWP</label>
                <input type="file" class="form-control-file" name="ft_npwp" required>
                <?php echo form_error('ft_npwp', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
    </div>
    <input type="submit" value="Upload" name="upload">
    <?php echo form_close() ?>
</body>

</html>