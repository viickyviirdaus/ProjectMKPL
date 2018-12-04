<div class="body" style="min-height: 700px;text-align: center;">
	<div class="container-fluid" style="padding-top: 80px;">
		<h3>Lihat Akun Wali Kelas Aktif</h3>
		<table class="table table-bordered" style="width: 1000px; margin-top: 15px" align="center">
			<thead>
				<tr>
					<th class="text-center" style="width: 50px">No</th>
					<th class="text-center" style="width: 300px">Nama</th>
					<th class="text-center" style="width: 120px">NIP</th>
					<th class="text-center" style="width: 120px">Kelas yang diampu</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($data as $akun): ?>
				<tr style="text-align: left;">
					<td class="text-center" style="padding-top: 16px"><?php echo $no; $no++; ?></td>
					<td class="text-left" style="padding-top: 16px"><?php echo $akun->nama; ?></td>
					<td class="text-center" style="padding-top: 16px"><?php echo $akun->nip; ?></td>
					<td class="text-center" style="padding-top: 16px"><?php echo $akun->nama_kelas; ?></td>
					<td class="text-center">
						<div class="row" style="padding-left: 28px; padding-right: 40px">
							<div class="col-md-6" style="margin-top: 2px">
								<a href="<?php echo base_url('index.php/Controller_waliKelas/ambilDataWaliKelas/'.$akun->id_wali_kelas); ?>">
									<button class="btn btn-default" style="width: 130px ">Ubah Biodata</button>
								</a>
							</div>
							<div class="col-md-6" style="margin-top: 2px">
								<form action="<?php echo base_url('index.php/Controller_waliKelas/nonaktifkanAkunWaliKelas/'.$akun->id_wali_kelas); ?>" onsubmit="return confirm('Apakah anda yakin ingin menonaktifkan akun <?php echo $akun->nama; ?>');">
									<button type="submit" class="btn btn-danger" style="width: 130px; ">Nonaktif</button>
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
