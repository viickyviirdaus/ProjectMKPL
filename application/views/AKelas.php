<div class="body" style="min-height: 700px;text-align: center;">
	<div class="container-fluid" style="padding-top: 80px;">
		<h3>Daftar Kelas</h3>
		<a href="#" id="tambahKelas" class="btn btn-default" style="margin-left: 850px; width: 150px; color: blue"><i class="fa fa-plus fa-fw" aria-hidden="true"></i>Tambah Kelas</a>
		<table class="table table-bordered" style="width: 1000px; margin-top: 15px" align="center">
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th style="width: 150px" class="text-center">Nama Kelas</th>
					<th style="width: 120px" class="text-center">Ruang Kelas</th>
                    <th style="width: 120px" class="text-center">Tahun Ajaran</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($data as $kelas): ?>
				<tr style="text-align: left;">
					<td class="text-center" style="padding-top: 15px"><?php echo $no; $no++; ?></td>
					<td class="text-left" style="padding-top: 15px"><?php echo $kelas->nama_kelas; ?></td>
					<td class="text-center" style="padding-top: 15px"><?php echo $kelas->ruang_kelas; ?></td>
                    <td class="text-center" style="padding-top: 15px"><?php echo $kelas->tahun_ajaran; ?></td>
					<td class="text-center">
						<a href="<?php echo base_url('index.php/Controller_kelas/ambilDataKelas/'.$kelas->id_kelas.'/dataKelas'); ?>">
							<button class="btn btn-default" style="width: 130px">Ubah</button>
						</a>
                        <a href="<?php echo base_url('index.php/Controller_kelas/ambilDataKelas/'.$kelas->id_kelas.'/dataSiswa'); ?>">
                            <button class="btn btn-default" style="width: 130px">Daftar Siswa</button>
                        </a>
                        <a href="<?php echo base_url('index.php/Controller_kelas/ambilDataKelas/'.$kelas->id_kelas.'/dataMapel'); ?>">
                            <button class="btn btn-default" style="width: 130px">Daftar Pelajaran</button>
                        </a>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>

<!-- Modal -->
        <div class="modal fade" id="modalTambahKelas" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" id="formBody">
                    <div class="modal-header" id="formHeader">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 align="left"></span>Tambah Kelas</h4>
                    </div>
                    <form role="form" method="post" action="<?php echo base_url('index.php/Controller_kelas/tambahKelas'); ?>">
                        <div class="modal-body" style="padding:20px 50px;">
                            <div class="form-group">
                                <label for="nama"></span>Nama Kelas</label>
                                <input name="nama" type="text" class="form-control" id="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="ruang"></span>Ruang Kelas</label>
                                <input name="ruang" type="text" class="form-control" id="ruang" required>
                            </div>
                            <div class="form-group">
                                <label for="tahun"></span>Tahun Ajaran</label>
                                <input name="tahun" type="text" class="form-control" id="tahun" required>
                            </div>
                        </div>
                        <div class="modal-footer">
													<div class="btn-group">
                            <button type="submit" class="button" id="formSubmit">Simpan</button>
                            <button type="batal" class="button" id="closeModalKelas">Batal</button>
													</div>
                        </div>
                    </form>


                </div>

            </div>
        </div>

        <script>
            $(document).ready(function () {
                $("#tambahKelas").click(function () {
                    $("#modalTambahKelas").modal();
                });
            });

            $(document).ready(function () {
                $('#closeModalKelas').click(function() {
                    $('#modalTambahKelas').modal('hide');
                });
            });
        </script>
