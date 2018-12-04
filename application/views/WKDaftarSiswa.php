<div class="body" style="min-height: 700px;text-align: center;">
	<div class="container-fluid" style="padding-top: 80px;">
		<h3>Daftar Siswa</h3>
		<h5 style="text-align: left; padding-left: 110px; padding-top: 30px"><?php echo $data_login['nama'] ?></h5>
		<table class="table table-bordered" style="width: 1000px" align="center">
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th class="text-center">Nama</th>
					<th class="text-center">NIS</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
			<?php $no = 1;
				foreach ($data as $siswa): ?>
				<tr style="text-align: left;">
					<td class="text-center"><?php echo $no; $no++ ?></td>
					<td><?php echo $siswa->nama_siswa ?></td>
					<td class="text-center"><?php echo $siswa->nis ?></td>
					<td class="text-center">
						<form action="<?php echo base_url('index.php/Controller_nilai/tampilSemuaNilai/'.$siswa->id_siswa.'/'.$idKelas); ?>">
							<button type="submit" class="btn btn-default" style="width: 130px; ">Lihat Nilai</button>
						</form>
					</td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
