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

					<form action="<?php base_url('pengguna/add') ?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="id_pengguna">ID Pengguna</label>
							<input class="form-control <?php echo form_error('id_pengguna') ? 'is-invalid' : '' ?>" type="text" name="id_pengguna" placeholder="ID Pengguna" />
							<div class="invalid-feedback">
								<?php echo form_error('id_pengguna') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="username">Username</label>
							<input class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" type="text" name="username" min="0" placeholder="Username" />
							<div class="invalid-feedback">
								<?php echo form_error('username') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="password">Password</label>
							<input class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="text" name="password" min="0" placeholder="Password" />
							<div class="invalid-feedback">
								<?php echo form_error('password') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="vw_password">Ulangi Password</label>
							<input class="form-control <?php echo form_error('vw_password') ? 'is-invalid' : '' ?>" type="text" name="vw_password" min="0" placeholder="Konfirmasi Password" />
							<div class="invalid-feedback">
								<?php echo form_error('vw_password') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="nama">Nama</label>
							<input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" min="0" placeholder="Nama" />
							<div class="invalid-feedback">
								<?php echo form_error('nama') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="jabatan">Jabatan</label>
							<input class="form-control <?php echo form_error('jabatan') ? 'is-invalid' : '' ?>" type="text" name="jabatan" min="0" placeholder="Jabatan" />
							<div class="invalid-feedback">
								<?php echo form_error('jabatan') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="level">Level User</label>
							<input class="form-control <?php echo form_error('level') ? 'is-invalid' : '' ?>" type="text" name="level" min="0" placeholder="Level" />
							<div class="invalid-feedback">
								<?php echo form_error('level') ?>
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