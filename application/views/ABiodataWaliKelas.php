<div class="body" style="min-height: 700px;text-align: center;">
	<div class="center" style="margin: auto; padding: 20px;">
		<div class="container-fluid" style="padding-top: 80px;">
			<h3>Biodata Wali Kelas</h3>

			<div class="row" style="padding-right: 480px; padding-left: 500px; padding-top: 20px">
				<div class="col-md-5">
					<p style="padding-top: 5px;" class="text-left">Nama Lengkap</p>
					<p style="padding-top: 20px" class="text-left">NIP</p>
					<p style="padding-top: 20px" class="text-left">Password</p>
				</div>
				<div class="col-md-7">
					<form method="post" action="<?php echo base_url('index.php/Controller_waliKelas/ubahDataWaliKelas'); ?>">
						<input type="hidden" name="id" value="<?php echo $data->id_wali_kelas ?>">
						<input type="text" name="nama" value="<?php echo $data->nama ?>" class="form-control" required>
						<input type="text" name="nip" value="<?php echo $data->nip ?>" class="form-control" style="margin-top: 15px" required>
						<input type="text" name="password"  class="form-control" style="margin-top: 15px" required>
						<button type="submit" class="btn btn-primary" style="width: 80px; margin-top: 20px; margin-left: 28px">Simpan</button>
						<a href="<?php echo base_url('index.php/Controller_waliKelas/tampilWaliKelasAktif'); ?>" class="btn btn-default" style="width: 80px; margin-top: 20px; margin-left: 3px">Batal</a>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>
