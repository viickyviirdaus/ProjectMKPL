<div class="body" style="min-height: 700px;text-align: center;">
	<div class="container-fluid" style="padding-top: 150px;">
		<h3 align="center">Perbarui Kelas</h3>

		<div class="row" style="padding-right: 480px; padding-left: 500px; padding-top: 20px">
			<div class="col-md-5">
				<p style="padding-top: 18px" class="text-left" >Nama Kelas</p>
				<p style="padding-top: 20px" class="text-left">Ruang</p>
				<p style="padding-top: 20px" class="text-left">Tahun Ajaran</p>
				<p style="padding-top: 20px" class="text-left">Wali Kelas</p>
			</div>
			<div class="col-md-7">
				<form action="<?php echo base_url('index.php/Controller_kelas/ubahDataKelas'); ?>" method="post" role="form">
					<input type="hidden" name="id" value="<?php echo $data->id_kelas ?>">
					<input type="" name="nama" value = "<?php echo $data->nama_kelas ?>" class="form-control" style="margin-top: 5px" required>
					<input type="" name="ruang" value = "<?php echo $data->ruang_kelas ?>" class="form-control" style="margin-top: 20px" required>
					<input type="" name="tahun" value = "<?php echo $data->tahun_ajaran ?>" class="form-control" style="margin-top: 20px" required>
					<select class="form-control" name="id_wali_kelas" style="margin-top: 18px">
                		<option  value="" >Pilih Wali Kelas</option>
            			<?php foreach($wali_kelas as $row) { ?>
                		<option value="<?php echo $row->id_wali_kelas;?>"><?php echo $row->nama;?></option>
            			<?php } ?>
        			</select>
					<button type="submit" class="btn btn-primary" style="width: 80px; margin-top: 20px; margin-left: 28px">Simpan</button>
					<a href="<? echo base_url('index.php/Controller_mapel/tampilKelas'); ?>">
						<button class="btn btn-default" style="width: 80px; margin-top: 20px; margin-left: 3px">Batal</button>
					</a>
				</form>
			</div>
		</div>
	</div>
</div>
