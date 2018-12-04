<div class="body" style="min-height: 700px;text-align: center;">
	<div class="container-fluid" style="padding-top: 80px;">
		<h3>Biodata Siswa</h3>
		<img src="<?php echo base_url('uploads/'.$data->foto) ?>" class="img-responsive" style="max-width: 12%; padding-top: 10px" alt="Image">
		<p>Ubah Foto</p>
		<form enctype="multipart/form-data" role="form" action="<?php echo base_url('index.php/Controller_siswa/ubahDataSiswa'); ?>" method="post">
			<div class="row" style="padding-right: 450px; padding-left: 500px;">
				<div class="col-md-5">
					<input name="avatar" type="file" style="width: 180px; margin-left: 165px" required>
				</div>
			</div>
			<div class="row" style="padding-right: 480px; padding-left: 500px; padding-top: 20px">
				<div class="col-md-5">
					<p style="padding-top: 5px;" class="text-left">Nama Lengkap</p>
					<p style="padding-top: 20px" class="text-left">NIS</p>
					<p style="padding-top: 20px" class="text-left">NISN</p>
					<p style="padding-top: 20px" class="text-left">Jenis Kelamin</p>
					<p style="padding-top: 20px" class="text-left">Password</p>
				</div>
				<div class="col-md-7">
					<input type="hidden" name="id" value="<?php echo $data->id_siswa ?>">
					<input type="text" name="nama" value="<?php echo $data->nama_siswa ?>" class="form-control" required>
					<input type="text" name="nis" value="<?php echo $data->nis ?>" class="form-control" style="margin-top: 15px" required>
					<input type="text" name="nisn" value="<?php echo $data->nisn ?>" class="form-control" style="margin-top: 15px" required>
					<input type="text" name="jk" value="<?php echo $data->jenis_kelamin ?>" class="form-control" style="margin-top: 15px" required>
					<input type="text" name="password" class="form-control" style="margin-top: 15px" required>
					<button type="submit" class="btn btn-primary" style="width: 80px; margin-top: 20px; margin-left: 17px">Simpan</button>
					<a href="<?php echo base_url('index.php/Controller_siswa/tampilSiswaAktif'); ?>" class="btn btn-default" style="width: 80px; margin-top: 20px; margin-left: 3px">Batal</a>
				</div>
			</div>
		</form>
	</div>
</div>
