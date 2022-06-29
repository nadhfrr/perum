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

					<a href="<?php echo site_url('upah') ?>"><i class="fas fa-arrow-left"></i>
						Kembali</a>
				</div>
				<div class="card-body">

					<form action="<?php base_url("upah/edit") ?>" method="post" enctype="multipart/form-data">

						<!-- <input type="hidden" name="id" value="<?php echo $upah->kd_upah ?>" /> -->

						<div class="form-group">
							<label for="kd_upah">Kode Bahan</label>
							<input class="form-control <?php echo form_error('kd_upah') ? 'is-invalid' : '' ?>" type="text" name="kd_upah" placeholder="Kode Upah" value="<?php echo $upah->kd_upah ?>" />
							<div class="invalid-feedback">
								<?php echo form_error('kd_upah') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="uraian_upah">Uraian Upah</label>
							<input class="form-control <?php echo form_error('uraian_upah') ? 'is-invalid' : '' ?>" type="text" name="uraian_upah" min="0" placeholder="Uraian Upah" value="<?php echo $upah->uraian_upah ?>" />
							<div class="invalid-feedback">
								<?php echo form_error('uraian_upah') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="satuan">Satuan</label>
							<input class="form-control <?php echo form_error('satuan') ? 'is-invalid' : '' ?>" type="text" name="satuan" min="0" placeholder="Satuan" value="<?php echo $upah->satuan ?>" />
							<div class="invalid-feedback">
								<?php echo form_error('satuan') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="harga_dasar">Harga Dasar</label>
							<input class="form-control <?php echo form_error('harga_dasar') ? 'is-invalid' : '' ?>" type="text" name="harga_dasar" min="0" placeholder="Harga Dasar" value="<?php echo $upah->harga_dasar ?>" />
							<div class="invalid-feedback">
								<?php echo form_error('harga_dasar') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="merk">Merk</label>
							<input class="form-control <?php echo form_error('merk') ? 'is-invalid' : '' ?>" type="text" name="merk" min="0" placeholder="Merk" value="<?php echo $upah->merk ?>" />
							<div class="invalid-feedback">
								<?php echo form_error('merk') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="spesifikasi">Spesifikasi</label>
							<input class="form-control <?php echo form_error('spesifikasi') ? 'is-invalid' : '' ?>" type="text" name="spesifikasi" min="0" placeholder="Spesifikasi" value="<?php echo $upah->spesifikasi ?>" />
							<div class="invalid-feedback">
								<?php echo form_error('spesifikasi') ?>
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