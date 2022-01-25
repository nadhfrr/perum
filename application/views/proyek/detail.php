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
					<!-- <div class="card-header">
						<a href="<?php echo site_url('bahan/add') ?>"><i class="fas fa-plus"></i> Tambah Baru </a>
					</div> -->
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Jenis Pekerjaan</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($detailrab as $detailrab) : ?>
										<tr>
											<td width="50">
												<?php echo $detailrab->id_rab ?>
											</td>
											<td>
												<?php echo $detailrab->nama_rab ?>
											</td>
											<td>
												<?php echo $bahan->satuan ?>
											</td>
											<td>
												Rp<?php echo number_format($bahan->harga_dasar) ?>
											</td>
											<td>
												<?php echo $bahan->merk ?>
											</td>
											<td>
												<?php echo $bahan->spesifikasi ?>
											</td>

											<td width="250">
												<a href="<?php echo site_url('bahan/edit/' . $bahan->kd_bahan) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit </a>
												<a onclick="deleteConfirm('<?php echo site_url('bahan/delete/' . $bahan->kd_bahan) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus </a>
											</td>
										</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("_partials/modal.php") ?>

	<?php $this->load->view("_partials/js.php") ?>

	<script>
		function deleteConfirm(url) {
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>
</body>

</html>