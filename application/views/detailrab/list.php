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
										<th>Jenis Pekerjaan</th>
										<th>Volume</th>
										<th>Satuan</th>
										<th>Harga Satuan</th>
										<th>Jumlah Harga</th>
									</tr>
								</thead>
								<tbody>

									<tr>
										<td width="500">
											<style>
												.accordion {
													background-color: #eee;
													color: #444;
													cursor: pointer;
													padding: 18px;
													width: 100%;
													border: none;
													text-align: left;
													outline: none;
													font-size: 15px;
													transition: 0.4s;
												}

												.active,
												.accordion:hover {
													background-color: #ccc;
												}

												.accordion:after {
													content: '\002B';
													color: #777;
													font-weight: bold;
													float: right;
													margin-left: 5px;
												}

												.active:after {
													content: "\2212";
												}

												.panel {
													padding: 0 18px;
													background-color: white;
													max-height: 0;
													overflow: hidden;
													transition: max-height 0.2s ease-out;
												}
											</style>

											<button class="accordion">1. Pekerjaan Pengukuran dan Pondasi</button>
											<div class="panel">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
													sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
													Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
													nisi ut aliquip ex ea commodo consequat.</p>
											</div>

											<button class="accordion">2. Pekerjaan Pasang Bata</button>
											<div class="panel">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>

											<button class="accordion">3. Pekerjaan Atap</button>
											<div class="panel">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>

											<button class="accordion">4. Pekerjaan Rangka Plafon Hollow</button>
											<div class="panel">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>

											<button class="accordion">5. Pekerjaan Lantai 1:5</button>
											<div class="panel">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>

											<button class="accordion">6. Pekerjaan Pintu dan Jendela (kusen)</button>
											<div class="panel">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>

											<button class="accordion">7. Pekerjaan Pengecatan</button>
											<div class="panel">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>

											<button class="accordion">8. Pekerjaan Penutup Atap</button>
											<div class="panel">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>

											<button class="accordion">9. Pekerjaan Beton 1 : 2 : 3</button>
											<div class="panel">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>

											<button class="accordion">10. Pekerjaan Plesteran 1 : 2 : 10</button>
											<div class="panel">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>

											<button class="accordion">11. Pekerjaan Sanitasi</button>
											<div class="panel">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>

											<button class="accordion">12. Pekerjaan Alat Penggantung</button>
											<div class="panel">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>

											<button class="accordion">13. Pekerjaan Carport</button>
											<div class="panel">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>

											<button class="accordion">14. Elektrikal</button>
											<div class="panel">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
											</div>
										</td>
										<?php foreach ($detailrab as $detailrab) : ?>
											<td width="140">
												<?php echo $detailrab->volume ?>
											</td>
											<td width="200">
												<?php echo $detailrab->satuan ?>
											</td>
											<td width="90">
												<?php echo $detailrab->harga_satuan ?>
											</td>
											<td width="200">
												<?php echo $detailrab->jumlah_harga ?>
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