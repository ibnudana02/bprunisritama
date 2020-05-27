<div class="about-area struktur" style="margin-top: 40px;">
    <div class="container">
        <div class="row">
            <div class="blog-grid">
                <!-- Start single blog -->
                <?php foreach ($data as $row) : ?>
                    <div class="col-md-4 col-sm-4 col-xs-12 blog">
                        <div class="single-blog">
                            <div class="blog-content">
                                <div class="blog-title" style="padding: 0 25px;">
                                    <a href="">
                                        <h5><?= $row->laporan ?></h4>
                                    </a>
                                </div>
                                <div class="single-page-head">
                                    <div class="download-btn">
                                        <div class="about-btn text-center">
                                            <a href="<?= base_url('upload/laporan/' . $row->dokumen) ?>" class="down-btn">Download <i class="fa fa-file-pdf-o"></i></a>
                                            <a href="<?= $row->id_laporan ?>" class="down-btn" data-target="#view<?php echo $row->id_laporan; ?>" data-toggle="modal">View <i class="fa fa-file-pdf-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="view<?= $row->id_laporan; ?>" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0"><?= strtoupper($row->laporan); ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body" style="height: 500px;">
                                    <iframe src="<?= base_url('upload/laporan/' . $row->dokumen) ?>" frameborder="0" style="width:100%;height:100%;border:none;"></iframe>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Tutup">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- End single blog -->
            </div>
        </div>
    </div>
</div>