<div class="body" style="min-height: 700px;text-align: center;">
	<div class="container-fluid" style="padding-top: 150px;">
		<h3>Perbarui Mata Pelajaran</h3>

		<div class="row" style="padding-right: 480px; padding-left: 500px; padding-top: 20px">
			<div class="col-md-5">
				<p style="" class="text-left" >Nama Mata Pelajaran</p>
				<p style="padding-top: 18px" class="text-left">KKM</p>
			</div>
			<div class="col-md-7">
				<form action="<?php echo base_url('index.php/Controller_mapel/ubahDataMapel'); ?>" method="post" role="form">
					<input type="hidden" name="id" value="<?php echo $data->id_mata_pelajaran ?>">
					<input type="" name="nama_mapel" value = "<?php echo $data->nama_mata_pelajaran ?>" class="form-control" style="margin-top: 5px" required>
					<input type="" name="kkm" value = "<?php echo $data->kkm ?>" class="form-control" style="margin-top: 20px" required>
					<button type="submit" class="btn btn-primary" style="width: 80px; margin-top: 20px; margin-left: 28px">Simpan</button>
					<a href="<? echo base_url('index.php/Controller_mapel/tampilMapel'); ?>">
						<button class="btn btn-default" style="width: 80px; margin-top: 20px; margin-left: 3px">Batal</button>
					</a>
				</form>
			</div>
		</div>
	</div>
</div>
