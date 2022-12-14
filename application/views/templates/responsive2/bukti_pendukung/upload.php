<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Bukti Pendukung</span>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Upload</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div><?= tgl_indo(date('Y-m-d')) ?>
                    <i class="icon-calendar"></i>&nbsp;
                    <span class="thin uppercase hidden-xs"></span>&nbsp;
                </div>
            </div>
        </div>


        <div class="row" style="margin-top: 10px;">
            <?php
            if ($this->session->flashdata('result') != '') {
                ?>
                <div class="alert alert-<?= $this->session->flashdata('mode_alert') ?>" role="alert"><?php echo $this->session->flashdata('result'); ?></div>
                <?php
            }
            ?>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form enctype="multipart/form-data" action="<?= base_url() . 'bukti_pendukung/add' ?>" method="POST" class="form-horizontal form-bordered form-row-stripped">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Jenis Dokumen</label>
                            <div class="col-md-9">
                                <?php echo form_dropdown('jenis_portofolio', array(                                
                                '0' => 'Foto'
                                ,'1' => 'Kartu Pelajar'
                                ,'2' => 'Raport'
                                ,'3' => 'Sertifikat Pelatihan'
                                ,'4' => 'Penghargaan'
                                ,'5' => 'Tugas / Pra Karya'
                                ,'6' => 'Lain-lain'    
                                ), '', 'class="form-control"'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3"> Nama Dokumen</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-folder"></i>
                                </span>
                                <input name="nama_dokumen"  required type="text" class="form-control" placeholder="Nama Dokumen"> </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">File</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-file"></i>
                                </span>
                                <input name="nama_file" required type="file" class="form-control" placeholder="Browse File"><br/>
                                <label style="color: red;font-weight: bold;">Maksimum Upload 20 MB</label>
                                 </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Deskripsi Dokumen</label>
                            <div class="col-md-9">
                                <textarea name="description" rows="4" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">
                                        <i class="fa fa-check"></i> Upload Dokumen</button>

                                </div>
                            </div>
                        </div>
                </form>
                <!-- END FORM-->
            </div>

            <script src="<?= base_url() ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
            <script src="<?= base_url() ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
