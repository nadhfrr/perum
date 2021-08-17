<!DOCTYPE html>
<html lang="en">
<title>Daftar Pengguna - DeDiamondPark</title>
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
					<h1 class="h3 mb-0 text-gray-800">Data Pengguna</h1>
				</div>
				

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('pengguna/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>ID Pengguna</th>
										<th>Username</th>
										<th>Nama</th>
										<th>Jabatan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($pengguna as $pengguna) : ?>
										<tr>
											<td width="150">
												<?php echo $pengguna->id_pengguna ?>
											</td>
											<td>
												<?php echo $pengguna->username ?>
											</td>
											<td>
												<?php echo $pengguna->nama ?>
											</td>
											<td>
												<?php echo $pengguna->jabatan ?>
											</td>

											<td width="250">
												<a href="<?php echo site_url('pengguna/edit/' . $pengguna->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
												<a onclick="deleteConfirm('<?php echo site_url('pengguna/delete/' . $pengguna->id) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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