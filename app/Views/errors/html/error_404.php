<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>404 Halaman Tidak Ditemukan</title>
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">
	<!-- <style>
		div.logo {
			height: 200px;
			width: 155px;
			display: inline-block;
			opacity: 0.08;
			position: absolute;
			top: 2rem;
			left: 50%;
			margin-left: -73px;
		}

		body {
			height: 100%;
			background: #fafafa;
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			color: #777;
			font-weight: 300;
		}

		h1 {
			font-weight: lighter;
			letter-spacing: 0.8;
			font-size: 3rem;
			margin-top: 0;
			margin-bottom: 0;
			color: #222;
		}

		.wrap {
			max-width: 1024px;
			margin: 5rem auto;
			padding: 2rem;
			background: #fff;
			text-align: center;
			border: 1px solid #efefef;
			border-radius: 0.5rem;
			position: relative;
		}

		pre {
			white-space: normal;
			margin-top: 1.5rem;
		}

		code {
			background: #fafafa;
			border: 1px solid #efefef;
			padding: 0.5rem 1rem;
			border-radius: 5px;
			display: block;
		}

		p {
			margin-top: 1.5rem;
		}

		.container,
		.container-fluid,
		.container-sm,
		.container-md,
		.container-lg,
		.container-xl {
			width: 100%;
			padding-right: 0.75rem;
			padding-left: 0.75rem;
			margin-right: auto;
			margin-left: auto;
		}

		.footer {
			margin-top: 2rem;
			border-top: 1px solid #efefef;
			padding: 1em 2em 0 2em;
			font-size: 85%;
			color: #999;
		}

		a:active,
		a:link,
		a:visited {
			color: #dd4814;
		}

		.text-center {
			text-align: center !important;
		}

		.error {
			color: #5a5c69;
			font-size: 7rem;
			position: relative;
			line-height: 1;
			width: 12.5rem;
		}

		.mr-auto,
		.mx-auto {
			margin-right: auto !important;
		}

		.lead {
			font-size: 1.25rem;
			font-weight: 300;
		}
	</style> -->
</head>

<body id="page-top">
	<!-- Page Wrapper -->
	<div id="wrapper">

		<div class="container-fluid">
			<!-- 404 Error Text -->
			<div class="text-center">
				<br>
				<br>
				<br>
				<div class="error mx-auto" data-text="404">404</div>
				<p class="lead text-gray-800 mb-5">Halaman Tidak Ditemukan</p>
				<p class="text-gray-500 mb-0">Silahkan Periksa Kembali Link Yang Anda Tuju</p>
				<a href="/">&larr; Kembali Ke Dashboard</a>
			</div>

		</div>
	</div>
	<!-- End of Main Content -->
</body>
<!-- Footer -->
<footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; ADYATMA LAKATJINDA F55116001 <?= date('Y'); ?></span>
		</div>
	</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Keluar?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">—</span>
				</button>
			</div>
			<div class="modal-body">Silahkan Klik Tombol "Logout" Dibawah Jika Anda Ingin Keluar Dari Aplikasi</div>
			<div class="modal-footer">
				<a class="btn btn-danger" href="<?= base_url(); ?>/logout">Logout</a>
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>