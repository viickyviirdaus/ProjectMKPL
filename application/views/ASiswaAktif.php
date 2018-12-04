<div class="body" style="min-height: 700px;text-align: center;">
	<div class="container-fluid" style="padding-top: 80px;">
		<h3>Lihat Akun Siswa Aktif</h3>
		<table class="table table-bordered" style="width: 1100px; margin-top: 15px" align="center">
			<thead>
				<tr>
					<th class="text-center" style="width: 50px">No</th>
					<th class="text-center" style="width: 250px">Nama</th>
					<th class="text-center" style="width: 80px">NIS</th>
					<th class="text-center" style="width: 120px">NISN</th>
					<th class="text-center" style="width: 120px">Kelas</th>
					<th class="text-center" style="width: 120px">Tahun Ajaran</th>
					<th class="text-center">Action</th>
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
					<td class="text-center" style="padding-top: 16px"><?php echo $akun->nama_kelas; ?></td>
					<td class="text-center" style="padding-top: 16px"><?php echo $akun->tahun_ajaran; ?></td>
					<td class="text-center">
						<div class="row" style="padding-left: 53px; padding-right: 65px">
							<div class="col-md-6" style="margin-top: 2px">
								<a href="<?php echo base_url('index.php/Controller_siswa/ambilDataSiswa/'.$akun->nis); ?>">
									<button class="btn btn-default" style="width: 110px ">Ubah Biodata</button>
								</a>
							</div>
							<div class="col-md-6" style="margin-top: 2px">
								<form action="<?php echo base_url('index.php/Controller_siswa/nonaktifkanAkunSiswa/'.$akun->id_siswa); ?>" onsubmit="return confirm('Apakah anda yakin ingin menonaktifkan akun <?php echo $akun->nama_siswa; ?>');">
									<button type="submit" class="btn btn-danger" style="width: 110px; ">Nonaktif</button>
								</form>

							</div>
						</div>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
