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

						<a href="<?php echo site_url('bahan') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url("bahan/edit") ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $bahan->kd_bahan ?>" />

							<div class="form-group">
								<label for="kd_bahan">Kode Bahan</label>
								<input class="form-control <?php echo form_error('kd_bahan') ? 'is-invalid' : '' ?>" type="text" name="kd_bahan" placeholder="Kode Bahan" value="<?php echo $bahan->kd_bahan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('kd_bahan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="uraian_bahan">Uraian Bahan</label>
								<input class="form-control <?php echo form_error('uraian_bahan') ? 'is-invalid' : '' ?>" type="text" name="uraian_bahan" min="0" placeholder="Uraian Bahan" value="<?php echo $bahan->uraian_bahan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('uraian_bahan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="satuan">Satuan</label>
								<input class="form-control <?php echo form_error('satuan') ? 'is-invalid' : '' ?>" type="text" name="satuan" min="0" placeholder="Satuan" value="<?php echo $bahan->satuan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('satuan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="harga_dasar">Harga Dasar</label>
								<input class="form-control <?php echo form_error('harga_dasar') ? 'is-invalid' : '' ?>" type="text" name="harga_dasar" min="0" placeholder="Harga Dasar" value="<?php echo $bahan->harga_dasar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('harga_dasar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="merk">Merk</label>
								<input class="form-control <?php echo form_error('merk') ? 'is-invalid' : '' ?>" type="text" name="merk" min="0" placeholder="Merk" value="<?php echo $bahan->merk ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('merk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="spesifikasi">Spesifikasi</label>
								<input class="form-control <?php echo form_error('spesifikasi') ? 'is-invalid' : '' ?>" type="text" name="spesifikasi" min="0" placeholder="Spesifikasi" value="<?php echo $bahan->spesifikasi ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('spesifikasi') ?>
								</div>
							</div>

							<input class="btn btn-dark" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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