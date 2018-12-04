<div class="body" style="min-height: 670px;text-align: center;">
	<div class="container-fluid" style="padding-top: 50px; margin-top: 15px">
		<h3>Rapor Siswa</h3>
		<div class="row">
			<div class="col-sm-8">
				<div class="col-sm-4">
					<h5 style="text-align: left; padding-left: 90px; padding-top: 5px">Nama Siswa</h5>
					<h5 style="text-align: left; padding-left: 90px; padding-top: 5px">Jenis Kelamin</h5>
					<h5 style="text-align: left; padding-left: 90px; padding-top: 5px">NIS</h5>
				</div>
				<!-- <?php var_dump($data) ?> -->
				<div class="col-sm-6">
					<h5 style="text-align: left; padding-top: 5px">: <?php echo $data[0]->nama_siswa ?></h5>
					<h5 style="text-align: left; padding-top: 5px">: <?php echo $data[0]->jenis_kelamin ?></h5>
					<h5 style="text-align: left; padding-top: 5px">: <?php echo $data[0]->nis ?></h5>
				</div>
			</div>
			<div class="col-md-4">
				<img src="<?php echo base_url('uploads/'); ?><?php echo $data[0]->foto ?>" style="max-width: 20%; padding-top: 10px">
			</div>
		</div>
		<form action="<?php echo base_url('index.php/Controller_nilai/tampilNilaiHarian/'.$idSiswa.'/'.$idKelas); ?>">
			<button class="btn btn-default" style="margin-left: 885px">Lihat Detail</button>
		</form>
		<table class="table table-bordered" style="width: 982px; margin-top: 15px" align="center">
			<thead>
				<tr>
					<th style="width: 50px">No</th>
					<th >Nama Mata Pelajaran</th>
					<th style="width: 120px">Nilai Akhir</th>
					<th style="width: 120px">KKM</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($data as $nilai): ?>
				<tr style="text-align: left;">
					<td class="text-center" ><?php echo $no; $no++; ?></td>
					<td class="text-left" ><?php echo $nilai->nama_mata_pelajaran ?></td>
					<td class="text-center" ><?php if($nilai->nilai_akhir >0){echo $nilai->nilai_akhir;} else {echo "Belum Ada";} ?></td>
					<td class="text-center" ><?php echo $nilai->kkm ?></td>
				</tr>
				<?php endforeach ?>
				<tr style="text-align: left;">
					<td class="text-center" ></td>
					<td class="text-left" >Rata-Rata </td>
					<td class="text-center" ><?php echo $ratarata ?></td>
				</tr>
			</tbody>
		</table>
		<div class="row">
			<div class="col-sm-3">
				<h5 style="text-align: left; padding-left: 170px; padding-top: 5px">Catatan Akhir : </h5>
			</div>
			<div class="col-md-6" align="left">
				<input type="text-area" name="" disabled="true" style="height: 150px; width: 582px; margin-top:  15px" <?php echo "value = \" $catatan \" " ?>>
			</div>
			<div class="col-md-3">
			</div>
		</div>
	</div>
</div>
