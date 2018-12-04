<div class="body" style="min-height: 700px;text-align: center;">
	<div class="container-fluid" style="padding-top: 80px;">
		<h3>Daftar Mata Pelajaran</h3>
		<a href="#" id="tambahMapel" class="btn btn-default" style="margin-left: 800px; width: 200px; color: blue"><i class="fa fa-plus fa-fw" aria-hidden="true"></i>Tambah Mata Pelajaran </a>
		<table class="table table-bordered" style="width: 1000px; margin-top: 15px" align="center">
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th style="width: 300px" class="text-center">Nama Mata Pelajaran</th>
					<th style="width: 120px" class="text-center">KKM</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($data as $mapel): ?>
				<tr style="text-align: left;">
					<td class="text-center" style="padding-top: 15px"><?php echo $no; $no++; ?></td>
					<td class="text-left" style="padding-top: 15px"><?php echo $mapel->nama_mata_pelajaran; ?></td>
					<td class="text-center" style="padding-top: 15px"><?php echo $mapel->kkm; ?></td>
					<td class="text-center">
						<a href="<?php echo base_url('index.php/Controller_mapel/ambilDataMapel/'.$mapel->id_mata_pelajaran); ?>">
							<button class="btn btn-default" style="width: 130px">Ubah</button>
						</a>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>

<!-- Modal -->
        <div class="modal fade" id="modalTambahMapel" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" id="formBody">
                    <div class="modal-header" id="formHeader">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 align="left"></span>Tambah Mata Pelajaran</h4>
                    </div>
                    <form role="form" method="post" action="<?php echo base_url('index.php/Controller_mapel/tambahMapel'); ?>">
                        <div class="modal-body" style="padding:20px 50px;">
                            <div class="form-group">
                                <label for="nama"></span>Nama Mata Pelajaran</label>
                                <input name="nama" type="text" class="form-control" id="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="kkm"></span>KKM</label>
                                <input name="kkm" type="text" class="form-control" id="kkm" required>
                            </div>
                        </div>
                        <div class="modal-footer">
													<div class="btn-group">
                            <button type="submit" class="button" id="formSubmit">Simpan</button>
                            <button type="batal" class="button" id="closeModalMapel">Batal</button>
													</div>
                        </div>
                    </form>


                </div>

            </div>
        </div>

        <script>
            $(document).ready(function () {
                $("#tambahMapel").click(function () {
                    $("#modalTambahMapel").modal();
                });
            });

            $(document).ready(function () {
                $('#closeModalMapel').click(function() {
                    $('#modalTambahMapel').modal('hide');
                });
            });
        </script>
