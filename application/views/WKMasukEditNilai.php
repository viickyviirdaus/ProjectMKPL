<div class="body" style="min-height: 700px;text-align: center;">
	<div class="container-fluid" style="padding-top: 80px;">
		<?php $no = 1; foreach ($data as $nilai): ?>
			<h3><?php echo $nilai->nama_mata_pelajaran ?></h3>
		<?php endforeach ?>
		<div class="row" style="padding-right: 400px; padding-left: 480px; padding-top: 20px">
			<div class="col-md-5">
				<p style="padding-top: 5px;" class="text-left" >Nilai Tugas 1</p>
				<p style="padding-top: 20px" class="text-left">Nilai Tugas 2</p>
				<p style="padding-top: 20px" class="text-left">UAS</p>
				<p style="padding-top: 20px" class="text-left">UTS</p>
			</div>
			<div class="col-md-7">

				<?php $no = 1; foreach ($data as $nilai): ?>
					<form name="formNilai" method="post" action="<?php if($key == 'input'){echo base_url('index.php/Controller_nilai/simpanNilaiSiswa');} else{echo base_url('index.php/Controller_nilai/ubahNilaiSiswa');}  ?>">
							<input type="hidden" name="idSiswa" id="idSiswa" value="<?php echo $idSiswa ?>">
							<input type="hidden" name="idKelas" id="idKelas" value="<?php echo $idKelas ?>">
							<input type="hidden" name="idNilai" id="idNilai" value="<?php echo $nilai->id_nilai; ?>">
							<input min="0" max="100" type="number" id="tugas1" name="tugas1" class="form-control" <?php if($key == 'input' && $nilai->tugas1 > 0){echo " readonly=\"\" value=\"$nilai->tugas1\"";} else{echo "value=\"$nilai->tugas1\"";} ?>>
							<input min="0" max="100" type="number" id="tugas2" name="tugas2" class="form-control" style="margin-top: 15px " <?php if($key == 'input' && $nilai->tugas2 > 0){echo " readonly=\"\" value=\"$nilai->tugas2\"";} else{ echo "value=\"$nilai->tugas2\""; } ?>>
							<input min="0" max="100" type="number" id="uts" name="uts" class="form-control" style="margin-top: 15px" <?php if($key == 'input' && $nilai->uts > 0){echo " readonly=\"\"  value=\"$nilai->uts\"";} else{ echo " value=\"$nilai->uts\""; } ?>>
							<input min="0" max="100" type="number" id="uas" name="uas" class="form-control" style="margin-top: 15px" <?php if($key == 'input' && $nilai->uas > 0){echo " readonly=\"\"  value=\"$nilai->uas\"";} else{ echo " value=\"$nilai->uas\""; } ?>>
							<div class="col-md-6">
								<button type="submit" simpan class="btn btn-primary" style="width: 80px; margin-top: 20px;">Simpan</button>
							</div>
					</form>
					<div class="col-md-6">
							<form action="<?php echo base_url('index.php/Controller_nilai/tampilSemuaNilai/'.$idSiswa.'/'.$idKelas); ?>">
								<button  class="btn btn-default" style="width: 80px; margin-top: 20px;">Batal</button>
							</form>
					</div>
				<?php endforeach ?>

			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).on("click", "[simpan]", function() {
		alert('halo');
	var tugas1 = $('#tugas1').val();
	var tugas2 = $('#tugas2').val();
	var uts = $('#uts').val();
	var uas = $('#uas').val();

	var angka = /^[0-9]+$/;
		if(tugas1.value.match(angka))
		{
			alert ('angka');
		}
		else
		{
			alert('Nilai harus dalam angka');
		}
	}
	});

</script>
