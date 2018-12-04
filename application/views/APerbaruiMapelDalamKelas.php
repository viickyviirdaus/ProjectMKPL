<div class="body" style="min-height: 600px;">
<body <?php if ($keberadaan == false){ echo "onload=tidakAda()";}?>>
		<h3 align="center" style="margin-left: 105px; margin-top: 80px;"><?php echo $nama_kelas; ?></h3>
		<h3 style="margin-left: 105px">Daftar Mata Pelajaran</h3>
		<div class="row" style="padding-right: 390px; padding-left: 120px">
			<table class="table table-bordered" style=" margin-top: 15px" align="center">
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th class="text-center">Nama Mata Pelajaran</th>
					<th class="text-center">KKM</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($mapel as $dataMapel): ?>
				<tr style="text-align: left;">
					<td class="text-center" ><?php echo $no; $no++; ?></td>
					<td class="text-left" ><?php echo $dataMapel->nama_mata_pelajaran; ?></td>
					<td class="text-center" ><?php echo $dataMapel->kkm; ?></td>
					<td class="text-center" >
						<form action="<?php echo base_url('index.php/Controller_kelas/hapusMapelDalamKelas/'.$dataMapel->id_mata_pelajaran.'/'.$id_kelas); ?>" onsubmit="return confirm('Apakah anda yakin ingin menghapus mata pelajaran <?php echo $dataMapel->nama_mata_pelajaran; ?> pada <?php echo $nama_kelas; ?>');">
							<button type="submit" class="btn btn-danger">Hapus</button>
						</form>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
			</table>
		</div>

		<form action="<?php echo base_url('index.php/Controller_kelas/tambahMapelDalamKelas'); ?>" style="margin-top: 10px" method="post">
			<div class="row" style="padding-right: 600px; padding-left: 120px">
				<div class="col-md-8" >
					<input type="hidden" name="id" value="<?php echo $id_kelas; ?>">
					<input type="" name="mapel" class="form-control text-center" placeholder="Masukkan Nama Mata Pelajaran" required>
				</div>
				<div class="col-md-2">
						<button class="btn" type="submit">
							<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
						</button>
				</div>
			</div>
		</form>

</body>
</div>

<script>
function tidakAda() {
    //alert("Mohon maaf, mata pelajaran yang anda cari tidak terdaftar atau sudah tersimpan di kelas ini.");
    alert("Hasil pencarian tidak ditemukan.");
}
</script>
