<link rel="shortcut icon" href="<?= base_url() ?>front-end/assets/img/logo-perum.png">
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('detailpekerjaan', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <!-- Card  -->
            <div class="card mb-3">
                <div class="card-header">

                    <a href="<?php echo site_url('detailpekerjaan') ?>"><i class="fas fa-arrow-left"></i>
                        Kembali</a>
                </div>
                <div class="card-body">

                    <?php foreach ($detailpekerjaan as $dpk) : ?>
                        <form action="<?php base_url("proyek/edit") ?>" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="id_pekerjaan" value="<?php echo $dpk['id_pekerjaan'] ?>" />

                            <div class="form-group">
                                <label for="volume">Volume</label>
                                <input class="form-control <?php echo form_error('volume') ? 'is-invalid' : '' ?>" type="text" name="volume" placeholder="Keterangan Lain" value="<?php echo $dpk['volume'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('volume') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jumlah_harga">Jumlah Harga</label>
                                <input class="form-control <?php echo form_error('jumlah_harga') ? 'is-invalid' : '' ?>" type="text" name="jumlah_harga" placeholder="Keterangan Lain" value="<?php echo $dpk['jumlah_harga'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('jumlah_harga') ?>
                                </div>
                            </div>

                            <input class="btn btn-dark" type="submit" name="btn" value="Simpan" />
                        </form>
                    <?php endforeach; ?>
                </div>

                <div class="card-footer small text-muted">
                    *Wajib diisi
                </div>


            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->