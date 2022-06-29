<link rel="shortcut icon" href="<?= base_url() ?>front-end/assets/img/logo-perum.png">
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<div class="row">
		<div class="col-lg">
			<?= form_error('pengguna', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

			<?= $this->session->flashdata('message'); ?>

			<?php if ($this->session->flashdata('success')) : ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
			<?php endif; ?>

			<div class="card mb-3">
				<div class="card-header">
					<a href="<?php echo site_url('pengguna') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
				</div>
				<div class="card-body">

					<form class="user" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="noreg_user">No. Registrasi User</label>
							<input class="form-control <?php echo form_error('noreg_user') ? 'is-invalid' : '' ?>" type="text" name="noreg_user" placeholder="nomor registrasi anggota" />
							<div class="invalid-feedback">
								<?php echo form_error('noreg_user') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="name">Nama</label>
							<input class="form-control <?php echo form_error('name') ? 'is-invalid' : '' ?>" type="text" name="name" min="0" placeholder="nama" />
							<div class="invalid-feedback">
								<?php echo form_error('name') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<input class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" type="text" name="email" min="0" placeholder="email" />
							<div class="invalid-feedback">
								<?php echo form_error('email') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="image">Profil User</label>
							<input class="form-control <?php echo form_error('image') ? 'is-invalid' : '' ?>" type="text" name="image" min="0" placeholder="pilih foto" />
							<div class="invalid-feedback">
								<?php echo form_error('image') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="password">Password</label>
							<input class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="text" name="password" min="0" placeholder="masukkan password" />
							<div class="invalid-feedback">
								<?php echo form_error('password') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="role_id">Role ID User</label>
							<input class="form-control <?php echo form_error('role_id') ? 'is-invalid' : '' ?>" type="text" name="role_id" min="0" placeholder="role_id user" />
							<div class="invalid-feedback">
								<?php echo form_error('role_id') ?>
							</div>
						</div>

						<input class="btn btn-dark" type="submit" name="btn" value="Simpan" />
					</form>

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

<!-- Modal -->
<!-- <div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div> -->