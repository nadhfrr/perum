<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("_partials/head.php") ?>
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

						<a href="<?php echo site_url('pengguna') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url("pengguna/edit") ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $pengguna->id ?>" />

							<div class="form-group">
								<label for="id_pengguna">ID Pengguna</label>
								<input class="form-control <?php echo form_error('id_pengguna') ? 'is-invalid' : '' ?>" type="text" name="id_pengguna" placeholder="ID Pengguna" value="<?php echo $pengguna->id_pengguna ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('id_pengguna') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="username">Username</label>
								<input class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" type="text" name="username" min="0" placeholder="Username" value="<?php echo $pengguna->username ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('username') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="password">Password</label>
								<input class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="text" name="password" min="0" placeholder="password" value="<?php echo $pengguna->password ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="vw_password">Ulangi Password</label>
								<input class="form-control <?php echo form_error('vw_password') ? 'is-invalid' : '' ?>" type="text" name="vw_password" min="0" placeholder="vw_password" value="<?php echo $pengguna->vw_password ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('vw_password') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Nama</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" min="0" placeholder="nama" value="<?php echo $pengguna->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jabatan">Jabatan</label>
								<input class="form-control <?php echo form_error('jabatan') ? 'is-invalid' : '' ?>" type="text" name="jabatan" min="0" placeholder="jabatan" value="<?php echo $pengguna->jabatan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('jabatan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="level">Level User</label>
								<input class="form-control <?php echo form_error('level') ? 'is-invalid' : '' ?>" type="text" name="level" min="0" placeholder="level" />
								<div class="invalid-feedback">
									<?php echo form_error('level') ?>
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