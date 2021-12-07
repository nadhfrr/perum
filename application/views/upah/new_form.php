<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("_partials/head.php") ?>
	<title> Tambah Rincian Upah - DeDiamondPark </title>
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

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('upah') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('upah/add') ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="kd_upah">Kode Upah</label>
								<input class="form-control <?php echo form_error('kd_upah') ? 'is-invalid' : '' ?>" type="text" name="kd_upah" placeholder="Kode Upah" />
								<div class="invalid-feedback">
									<?php echo form_error('kd_upah') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="uraian_upah">Uraian Upah</label>
								<input class="form-control <?php echo form_error('uraian_upah') ? 'is-invalid' : '' ?>" type="text" name="uraian_upah" min="0" placeholder="Uraian Upah" />
								<div class="invalid-feedback">
									<?php echo form_error('uraian_upah') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="satuan">Satuan</label>
								<input class="form-control <?php echo form_error('satuan') ? 'is-invalid' : '' ?>" type="text" name="satuan" min="0" placeholder="Satuan" />
								<div class="invalid-feedback">
									<?php echo form_error('satuan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="harga_dasar">Harga Dasar</label>
								<input class="form-control <?php echo form_error('harga_dasar') ? 'is-invalid' : '' ?>" type="text" name="harga_dasar" min="0" placeholder="Harga Dasar" />
								<div class="invalid-feedback">
									<?php echo form_error('harga_dasar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="merk">Merk</label>
								<input class="form-control <?php echo form_error('merk') ? 'is-invalid' : '' ?>" type="text" name="merk" min="0" placeholder="Merk" />
								<div class="invalid-feedback">
									<?php echo form_error('merk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="spesifikasi">Spesifikasi</label>
								<input class="form-control <?php echo form_error('spesifikasi') ? 'is-invalid' : '' ?>" type="text" name="spesifikasi" min="0" placeholder="Spesifikasi" />
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