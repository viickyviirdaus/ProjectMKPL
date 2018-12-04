<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/cssnyatemplate.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/font-awesome-4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/jquery/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/bootstrap.js"></script>
		<style>
		.btn-group .button {
		    background-color: #8d8d8d;
				margin-right: 8px;
		    color: white;
		    padding: 10px 24px;;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 14px;
		    cursor: pointer;
		    float: right;
				border-radius: 10px;
				border-color: black;
			}
		.btn-group .button:hover{
			background-color: white;
			color: black;
		}
		img {
    display: block;
    margin: 0 auto;
		}
		</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" style="height: 60px; background: #efefef;">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="" s="navbar-header" style="padding-top: 5px;">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				 <a class="navbar-brand" href="#">
        			<img alt="Brand" src="<?php echo base_url('assets'); ?>/image/logo.png" style="max-height: 100%">
      			</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav set-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-fw" aria-hidden="true"></i> Wali Kelas <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#" id="buatAkunWaliKelas">Buat Akun Wali Kelas</a></li>
							<li><a href="<?php echo base_url('index.php/Controller_waliKelas/tampilWaliKelasAktif'); ?>">Lihat Akun Wali Kelas Aktif</a></li>
							<li><a href="<?php echo base_url('index.php/Controller_waliKelas/tampilWaliKelasTidakAktif'); ?>"">Lihat Akun Wali Kelas Tidak Aktif</a></li>
							<!-- <li role="separator" class="divider"></li> -->
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users fa-fw" aria-hidden="true"></i> Siswa <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a id="buatAkunSiswa" href="#">Buat Akun Siswa</a></li>
							<li><a href="<?php echo base_url('index.php/Controller_siswa/tampilSiswaAktif'); ?>">Lihat Akun Siswa Aktif</a></li>
							<li><a href="<?php echo base_url('index.php/Controller_siswa/tampilSiswaTidakAktif'); ?>"">Lihat Akun Siswa Tidak Aktif</a></li>
							<!-- <li role="separator" class="divider"></li> -->
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th fa-fw" aria-hidden="true"></i> Kelas <span class="caret"></span></a>
						<ul class="dropdown-menu">
                            <li><a href="<?php echo base_url('index.php/Controller_kelas/tampilKelas'); ?>">Lihat Kelas</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list fa-fw" aria-hidden="true"></i> Mata Pelajaran <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url('index.php/Controller_mapel/tampilMapel'); ?>">Lihat Mata Pelajaran</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<a href="<?php echo base_url('index.php/Controller_user/logout'); ?>"><button class="btn btn-danger" style="margin-right: 10px; margin-top: 7px;" >Logout</button></a>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
        <div class="container">
	</nav>

	<!-- Modal -->
        <div class="modal fade" id="modalBuatAkunWaliKelas" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" id="formBody">
                    <div class="modal-header" id="formHeader">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 align="center"></span>Buat Akun Wali Kelas</h4>
                    </div>

                    <form role="form" method="post" action="<?php echo base_url('index.php/Controller_waliKelas/tambahAkunWaliKelas'); ?>">
                        <div class="modal-body" style="padding:20px 50px;">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input name="nama" type="text" class="form-control" id="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input name="nip" type="text" class="form-control" id="nip" required>
                            </div>
                            <div class="form-group">
                                <label for="psw">Password</label>
                                <input name="psw" type="password" class="form-control" id="psw" required>
                            </div>
                        </div>
                        <div class="modal-footer">
													<div class="btn-group">
														<button type="submit" class="button" id="formSubmit">Buat Akun</button>
                            <button type="batal" class="button" id="closeModalWaliKelas">Batal</button>
													</div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalBuatAkunSiswa" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" id="formBody">
                    <div class="modal-header" id="formHeader">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 align="center"></span>Buat Akun Siswa</h4>
                    </div>
                    <img src="<?php echo base_url('assets/image/avatar.jpg') ?>" class="img-responsive" style="max-width: 12%; padding-top: 10px" alt="Image">
                    <p align="center">Unggah Foto</p>
                    <form enctype="multipart/form-data" role="form" method="post" action="<?php echo base_url('index.php/Controller_siswa/tambahAkunSiswa'); ?>">
                        <div class="modal-body" style="padding:20px 50px;">
                            <div class="form-group">
                                <input name="avatar" type="file" style="width: 180px; margin-left: 165px" required>
                            </div>
                            <div class="form-group">
                                <label for="nama"></span>Nama Lengkap</label>
                                <input name="nama" type="text" class="form-control" id="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nis"></span>NIS</label>
                                <input name="nis" type="text" class="form-control" id="nis" required>
                            </div>
                            <div class="form-group">
                                <label for="nisn"></span>NISN</label>
                                <input name="nisn" type="text" class="form-control" id="nisn" required>
                            </div>
                            <div class="form-group">
                                <label for="jk"></span>Jenis Kelamin</label>
                                <select name="jk" required>
                                   <option value="L">Laki-Laki</option>
                                   <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="psw"></span> Password</label>
                                <input name="psw" type="password" class="form-control" id="psw" required>
                            </div>
                        </div>
                        <div class="modal-footer">
													<div class="btn-group">
                            <button type="submit" class="button" id="formSubmit">Buat Akun</button>
                            <button type="batal" class="button" id="closeModalSiswa">Batal</button>
													</div>
                        </div>
                    </form>


                </div>

            </div>
        </div>

        

        <script>
            $(document).ready(function () {
                $("#buatAkunWaliKelas").click(function () {
                    $("#modalBuatAkunWaliKelas").modal();
                });
            });
            $(document).ready(function () {
                $("#buatAkunSiswa").click(function () {
                    $("#modalBuatAkunSiswa").modal();
                });
            });

            $(document).ready(function () {
                $('#closeModalWaliKelas').click(function() {
                    $('#modalBuatAkunWaliKelas').modal('hide');
                });
            });

            $(document).ready(function () {
                $('#closeModalSiswa').click(function() {
                    $('#modalBuatAkunSiswa').modal('hide');
                });
            });


        </script>
