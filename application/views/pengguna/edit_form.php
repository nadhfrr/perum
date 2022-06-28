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

			<!-- Card  -->
			<div class="card mb-3">
				<div class="card-header">

					<a href="<?php echo site_url('pengguna') ?>"><i class="fas fa-arrow-left"></i>
						Kembali</a>
				</div>
				<div class="card-body">
					<?php foreach ($pengguna as $p) { ?>
						<form action="<?php echo base_url("pengguna/edit"); ?>" method="post" enctype="multipart/form-data">

							<div class="form-group">
								<label for="noreg_user">No. Registrasi User</label>
								<input class="form-control" type="hidden" name="id" value="<?php echo $p->id ?>">
								<input class="form-control" type="text" name="noreg_user" value="<?php echo $p->noreg_user ?>">
							</div>
							<div class="form-group">
								<label for="name">Nama</label>
								<input class="form-control" type="text" name="name" value="<?php echo $p->name ?>">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input class="form-control" type="text" name="email" value="<?php echo $p->email ?>">
							</div>
							<div class="form-group">
								<label for="image">Profil User</label>
								<input class="form-control" type="text" name="image" value="<?php echo $p->image ?>">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input class="form-control" type="text" name="password" value="<?php echo $p->password ?>">
							</div>
							<div class="form-group">
								<label for="role_id">Role ID User</label>
								<input class="form-control" type="text" name="role_id" value="<?php echo $p->role_id ?>">
							</div>

							<button class="btn btn-primary" type="reset" name="btn">Reset</button>
							<button class="btn btn-dark" type="submit" name="btn">Simpan</button>
						</form>
					<?php } ?>

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