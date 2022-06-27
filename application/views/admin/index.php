<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<!-- <h2 style="color: 00000;">
		Selamat datang, <?php echo $this->session->userdata($user['name']); ?>&nbsp;<img src="<?php echo base_url() ?>assets/img/happy.png" width="22" height="22">
	</h2> -->
	<h4 style=" margin-left: 75%;">
		<script type='text/javascript'>
			var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei',
				'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
			];

			var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

			var date = new Date();

			var day = date.getDate();

			var month = date.getMonth();

			var thisDay = date.getDay(),

				thisDay = myDays[thisDay];
			var yy = date.getYear();


			var year = (yy < 1000) ? yy + 1900 : yy;

			document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
		</script>
	</h4>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->