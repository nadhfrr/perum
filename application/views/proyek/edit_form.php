<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>
    <title> Edit Rincian Bahan - DeDiamondPark </title>
</head>

<body id="page-top">

    <?php $this->load->view("_partials/navbar.php") ?>
    <div id="wrapper">

        <?php $this->load->view("_partials/sidebar.php") ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <?php $this->load->view("_partials/breadcrumb.php") ?>

                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>

                <!-- Card  -->
                <div class="card mb-3">
                    <div class="card-header">

                        <a href="<?php echo site_url('proyek') ?>"><i class="fas fa-arrow-left"></i>
                            Kembali</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php base_url("proyek/edit") ?>" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="id" value="<?php echo $proyek->kd_proyek ?>" />

                            <div class="form-group">
                                <label for="kd_proyek">Kode Proyek</label>
                                <input class="form-control <?php echo form_error('kd_proyek') ? 'is-invalid' : '' ?>" type="text" name="kd_proyek" placeholder="Kode Proyek" value="<?php echo $proyek->kd_proyek ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('kd_proyek') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nama_proyek">Nama Proyek</label>
                                <input class="form-control <?php echo form_error('nama_proyek') ? 'is-invalid' : '' ?>" type="text" name="nama_proyek" min="0" placeholder="Nama Proyek" value="<?php echo $proyek->nama_proyek ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_proyek') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="type">Type</label>
                                <input class="form-control <?php echo form_error('type') ? 'is-invalid' : '' ?>" type="text" name="type" min="0" placeholder="Type" value="<?php echo $proyek->type ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('type') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pemilik_proyek">Pemilik Proyek</label>
                                <input class="form-control <?php echo form_error('pemilik_proyek') ? 'is-invalid' : '' ?>" type="text" name="pemilik_proyek" min="0" placeholder="Pemilik Proyek" value="<?php echo $proyek->pemilik_proyek ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('pemilik_proyek') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="keterangan_lain">Keterangan Lain</label>
                                <input class="form-control <?php echo form_error('keterangan_lain') ? 'is-invalid' : '' ?>" type="text" name="keterangan_lain" min="0" placeholder="Keterangan Lain" value="<?php echo $proyek->keterangan_lain ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('keterangan_lain') ?>
                                </div>
                            </div>

                            <input class="btn btn-dark" type="submit" name="btn" value="Simpan" />
                        </form>

                    </div>

                    <div class="card-footer small text-muted">
                        *Wajib diisi
                    </div>


                </div>
                <!-- /.container-fluid -->

                <!-- Sticky Footer -->
                <?php $this->load->view("_partials/footer.php") ?>

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <?php $this->load->view("_partials/scrolltop.php") ?>

        <?php $this->load->view("_partials/js.php") ?>

</body>

</html>