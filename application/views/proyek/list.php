<!DOCTYPE html>
<html lang="en">
<title> Daftar Proyek - DeDiamondPark </title>

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
					<h1 class="h3 mb-0 text-gray-800">Data Proyek</h1>
				</div>


				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('proyek/add') ?>"><i class="fas fa-plus"></i> Tambah Baru</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Kode Proyek</th>
										<th>Nama Proyek</th>
										<th>Type</th>
										<th>Pemilik Proyek</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($proyek as $proyek) : ?>
										<tr>
											<td width="150">
												<?php echo $proyek->kd_proyek ?>
											</td>
											<td>
												<?php echo $proyek->nama_proyek ?>
											</td>
											<td>
												<?php echo $proyek->type ?>
											</td>
											<td>
												<?php echo $proyek->pemilik_proyek ?>
											</td>
											<td width="250">
												<a href="<?php echo site_url('proyek/details/' . $proyek->kd_proyek) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
												<a href="<?php echo site_url('proyek/edit/' . $proyek->kd_proyek) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
												<a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek->kd_proyek) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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