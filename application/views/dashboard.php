<!DOCTYPE html>
<html>
<head>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets');?>/css/jam.css"  >
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets');?>/css/background.css">


	<title>ADMIN</title>
</head>
<body>

	<nav class="navbar navbar-inverse" style="background: #282931">
		<div class="container-fluid" style="background: #282931">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">S I A S</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Wali Kelas
						<span class="caret"></span></a>
						<ul class="dropdown-menu">

							<li><a href="#" data-toggle="modal" data-target="#buatAkunWaliKelas">Buat akun wali kelas</a></li>
							<li><a href="#">Lihat akun wali kelas aktif</a></li>
							<li><a href="#">Lihat akun wali kelas tidak aktif</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Siswa
							<span class="caret"></span></a>
							<ul class="dropdown-menu">

								<li><a href="#">Buat akun siswa</a></li>
								<li><a href="#">Lihat akun siswa aktif</a></li>
								<li><a href="#">Lihat akun siswa tidak aktif</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Kelas
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Tambah kelas</a></li>
									<li><a href="#">Perbarui kelas</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Mata Pelajaran
									<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#">Tambah mata pelajaran</a></li>
										<li><a href="#">Perbarui mata pelajaran</a></li>
									</ul>
								</li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
							</ul>
						</div>
					</nav>





					<!-- Modal -->
					<div class="modal fade" id="buatAkunWaliKelas" role="dialog">
						<div class="modal-dialog modal-lg">
							<!-- Modal content-->
							<div class="modal-content" >
								<div class="modal-header" >
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Buat Akun Wali Kelas</h4>
								</div>
								<div class="modal-body" class="tab-content">
									<div class="row">
										<div class="col-md-8" >
											<h3>Data Pribadi</h3>
											<form class="form-horizontal">
												<div class="form-group">
													<label class="control-label col-sm-4" for="nama">Nama Lengkap :</label>
													<div class="col-sm-8">
														<input type="" class="form-control" id="nama" placeholder="Masukkan Nama">
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-sm-4" for="nip">NIP :</label>
													<div class="col-sm-8">
														<input type="" class="form-control" id="nip" placeholder="Masukkan NIP">
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-sm-4" for="password">Password :</label>
													<div class="col-sm-8">
														<input type="" class="form-control" id="password" placeholder="Masukkan Password">
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-sm-4" for="kelas">Kelas Yang Diampu :</label>
													<div class="col-sm-8">
														<input type="" class="form-control" id="kelas" placeholder="Masukkan kelas yang diampu">
													</div>
												</div>

											</form>

										</div>

									</div>

								</div>

								<div class="modal-footer">
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-default">Submit</button>
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>




					<div class="text-center" style="margin-top: 140px; position: absolute;">
						<div id="str" style="font-size: 50px; margin-left: 100px; color: #282931"></div>
					</div>

					<script type="text/javascript">
					var string = "Selamat Datang di Sistem Informasi Akademik Siswa";
					var str = string.split("");
					var el = document.getElementById('str');
					(function animate() {
						str.length > 0 ? el.innerHTML += str.shift() : clearTimeout(running);
						var running = setTimeout(animate, 90);
					})();
					</script>

					<div class="jam-digital" style="margin-top: 290px; position: absolute; color: #282931">
						<div id="jam"> </div>
						<div  id="unit" style="padding-top: 140px; color: #282931">
							<span>Jam</span>
							<span>Menit</span>
							<span>Detik</span>
						</div>

					</div>



					<script type="text/javascript" src="js/jam.js"></script>

				</body>
				</html>
