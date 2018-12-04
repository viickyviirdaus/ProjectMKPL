<div class="body" style="min-height: 700px;text-align: center;">
	<div class="container-fluid" style="padding-top: 80px;">
		<h3>Lihat Akun Siswa Tidak Aktif</h3>
		<table class="table table-bordered" style="width: 1000px; margin-top: 15px" align="center">
			<thead>
				<tr>
					<th class="text-center" style="width: 50px">No</th>
					<th class="text-center" style="width: 300px">Nama</th>
					<th class="text-center" style="width: 120px">NIS</th>
					<th class="text-center" style="width: 120px">NISN</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($data as $akun): ?>
				<tr style="text-align: left;">
					<td class="text-center" style="padding-top: 16px"><?php echo $no; $no++; ?></td>
					<td class="text-left" style="padding-top: 16px"><?php echo $akun->nama_siswa; ?></td>
					<td class="text-center" style="padding-top: 16px"><?php echo $akun->nis; ?></td>
					<td class="text-center" style="padding-top: 16px"><?php echo $akun->nisn; ?></td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
