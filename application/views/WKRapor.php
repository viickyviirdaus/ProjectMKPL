<div class="body" style="min-height: 700px;text-align: center;">
	<div class="container-fluid" style="padding-top: 80px; margin-top: 15px">
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
		<table class="table table-bordered" style="width: 1000px; margin-top: 15px" align="center">
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
					<td class="text-center" ><?php if($ratarata >0){echo $ratarata;} else {echo "Belum Ada";} ?></td>
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
				<a href="#" class="btn btn-primary" id="tambahCatatan"  style="margin-right: 138px; margin-top: 15px; ">Tambah Catatan</a>
				<form action="<?php echo base_url('index.php/Controller_nilai/tampilSemuaNilai/'.$idSiswa.'/'.$idKelas); ?>">
					<button  class="btn btn-danger" style="width: 80px; margin-top: 20px; margin-right: 90px;">Kembali</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalTambahCatatan" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content" id="formBody">
			<div class="modal-header" id="formHeader">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 align="left"></span>Tambahkan Catatan</h4>
			</div>

			<form role="form" method="post" action="<?php echo base_url('index.php/Controller_rapor/simpanCatatan'); ?>">
				<div class="modal-body" style="padding:20px 50px;">
					<div class="form-group">
						<input type="hidden" name="idSiswa" id="idSiswa" value="<?php echo $idSiswa; ?>">
						<input type="hidden" name="idKelas" id="idKelas" value="<?php echo $idKelas; ?>">

						<input name="catatan" type="text-area" class="form-control" id="catatan" value="<?php echo $catatan ?>">
					</div>
				</div>
				<div class="modal-footer">
					<div class="row">
						<dir class="col-sm-6"></dir>
						<div class="col-sm-3">
							<button type="submit" class="btn btn-primary btn-block" id="formSubmit">Simpan</button>
						</div>
			</form>
						<div class="col-sm-3">
							<button type="button" class="btn btn-default btn-block" id="closeModalTambahCatatan">Batal</button>
						</div>
					</div>
				</div>
		</div>

	</div>
</div>

<script>
    $(document).ready(function () {
        $("#tambahCatatan").click(function () {
            $("#modalTambahCatatan").modal();
        });
        $(document).ready(function () {
            $('#closeModalTambahCatatan').click(function() {
                $('#modalTambahCatatan').modal('hide');
            });
        });
    });
</script>
