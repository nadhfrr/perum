<!DOCTYPE html>
<html lang="en">
<title> RAB - DeDiamondPark </title>

<head>
	<?php $this->load->view("_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<div class="d-sm-flex align-items-center justify-content-between mb-4">
					<h1 class="h3 mb-0 text-gray-800"> RAB </h1>
				</div>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('proyek') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>ID RAB</th>
										<th>Jenis Pekerjaan</th>
										<th>Volume</th>
										<th>Satuan</th>
										<th>Harga Satuan</th>
										<th>Jumlah Harga</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($detailrab as $detailrab) : ?>
										<tr>
											<td width="80">
												<?php echo $detailrab->id_rab ?>
												<!-- <input class="btn btn-secondary" type="button" name="btn" data-toggle="modal" data-target="#addModal" value="Tolak" /> -->
												<a href="<?php echo site_url('detailrab/edit/' . $detailrab->id_rab) ?>" class="btn btn-small text-danger"><i class="fas fa-plus"></i></a>
											</td>
											<td width="">
												<?php echo $detailrab->nama_rab ?>
											</td>
											<td width="">
												0.00
											</td>
											<td width="">
												m2
											</td>
											<td width="">
												Rp.0
											</td>
											<td width="">
												Rp.0
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>

						<div class=""></div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("_partials/footer.php") ?>
			<!-- Modal Add Product-->
			<form action="/product/save" method="post">
				<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Detail Rekap Pendaftaran</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">

								<div class="form-group">
									<label>Alasan Ditolak:</label>
									<textarea class="form-control <?php echo form_error('alasan') ? 'is-invalid' : '' ?>" name="alasan" rows="2" id="alasan"></textarea>
									<!-- <input type="text" class="form-control" name="product_name" placeholder="Product Name"> -->
								</div>

							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-secondary">Simpan</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
							</div>
						</div>
					</div>
				</div>
			</form>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("_partials/scrolltop.php") ?>
	<?php $this->load->view("_partials/modal.php") ?>

	<?php $this->load->view("_partials/js.php") ?>

	<script>
		function deleteConfirm(url) {
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>

	<script>
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
			acc[i].addEventListener("click", function() {
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.maxHeight) {
					panel.style.maxHeight = null;
				} else {
					panel.style.maxHeight = panel.scrollHeight + "px";
				}
			});
		}
	</script>
</body>

</html>