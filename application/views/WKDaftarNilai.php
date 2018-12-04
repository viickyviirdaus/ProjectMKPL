<div class="body" style="min-height: 700px;text-align: center;">
	<div class="container-fluid" style="padding-top: 80px;">
		<h3>Daftar Nilai Siswa</h3>
		<h5 style="text-align: left; padding-left: 110px; padding-top: 30px"><?php echo $data_login['nama'] ?></h5>
		<div class="row">
			<div class="col-md-6">
				<form action="<?php echo base_url('index.php/Controller_siswa/tampilSiswa/'.$idKelas); ?>">
					<button class="btn btn-danger" style="margin-right:270px ; width: 100px;">Daftar Siswa</button>
				</form>
			</div>
			<div class="col-md-6">
				<form action="<?php echo base_url('index.php/Controller_rapor/lihatNilaiRapor/'.$idSiswa.'/'.$idKelas); ?>">
					<button class="btn btn-default" style="margin-left: 215px; width: 100px;">Rapor</button>
				</form>
			</div>
		</div>
		<table class="table table-bordered" style="width: 1000px; margin-top: 15px" align="center">
			<thead>
				<tr>
					<th>No</th>
					<th style="width: 300px">Nama Mata Pelajaran</th>
					<th style="width: 120px">Tugas 1</th>
					<th style="width: 120px">Tugas 2</th>
					<th style="width: 120px">UTS</th>
					<th style="width: 120px">UAS</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; foreach ($data as $nilai): ?>
					<tr style="text-align: left;">
						<td class="text-center" style="padding-top: 35px"><?php echo $no; $no++; ?></td>
						<td class="text-left" style="padding-top: 35px"><?php echo $nilai->nama_mata_pelajaran ?></td>
						<td class="text-center" style="padding-top: 35px"><?php if($nilai->tugas1 >0){echo $nilai->tugas1;} else {echo "Belum Ada";} ?></td>
						<td class="text-center" style="padding-top: 35px"><?php if($nilai->tugas2 >0){echo $nilai->tugas2;} else {echo "Belum Ada";} ?></td>
						<td class="text-center" style="padding-top: 35px"><?php if($nilai->uts >0){echo $nilai->uts;} else {echo "Belum Ada";} ?></td>
						<td class="text-center" style="padding-top: 35px"><?php if($nilai->uas >0){echo $nilai->uas;} else {echo "Belum Ada";} ?></td>
						<td class="text-center">
							<form action="<?php echo base_url('index.php/Controller_nilai/tampilNilaiSiswa/input/'.$idSiswa.'/'.$idKelas.'/'.$nilai->id_mata_pelajaran); ?>">
								<button class="btn btn-default" style="width: 130px">Masukkan Nilai</button>
							</form>
							<form action="<?php echo base_url('index.php/Controller_nilai/tampilNilaiSiswa/edit/'.$idSiswa.'/'.$idKelas.'/'.$nilai->id_mata_pelajaran); ?>">
								<button class="btn btn-default" style="width: 130px; margin-top: 5px;">Edit Nilai</button>
							</form>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
