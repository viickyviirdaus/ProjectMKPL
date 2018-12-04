<div class="body" style="min-height: 700px;text-align: center;">
	<div class="container-fluid" style="padding-top: 80px;">
		<h3>Nilai Siswa</h3>
		<h5 style="text-align: left; padding-left: 170px; padding-top: 30px"><?php echo $data_login['nama'] ?></h5>
		<form action="<?php echo base_url('index.php/Controller_rapor/tampilRapor/'.$idSiswa.'/'.$idKelas); ?>">
			<button class="btn btn-default" style="margin-left: 900px; width: 100px;">Rapor</button>
		</form>
		<table class="table table-bordered" style="width: 1000px; margin-top: 15px" align="center">
			<thead>
				<tr>
					<th class="text-center" style="width: 25px">No</th>
					<th class="text-center">Nama Mata Pelajaran</th>
					<th class="text-center" style="width: 120px">Tugas 1</th>
					<th class="text-center" style="width: 120px">Tugas 2</th>
					<th class="text-center" style="width: 120px">UTS</th>
					<th class="text-center" style="width: 120px">UAS</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($data as $nilai): ?>
				<tr style="text-align: left;">
					<td class="text-center" style=""><?php echo $no; $no++; ?></td>
					<td class="text-left" style=""><?php echo $nilai->nama_mata_pelajaran ?></td>
					<td class="text-center" style=""><?php if($nilai->tugas1 >0){echo $nilai->tugas1;} else {echo "Belum Ada";} ?></td>
					<td class="text-center" style=""><?php if($nilai->tugas2 >0){echo $nilai->tugas2;} else {echo "Belum Ada";} ?></td>
					<td class="text-center" style=""><?php if($nilai->uts >0){echo $nilai->uts;} else {echo "Belum Ada";} ?></td>
					<td class="text-center" style=""><?php if($nilai->uas >0){echo $nilai->uas;} else {echo "Belum Ada";} ?></td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
