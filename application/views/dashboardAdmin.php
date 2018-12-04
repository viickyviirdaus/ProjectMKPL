<body <?php if ($buatAkun == "ya") { echo "onload = buatAkunSukses()";} ?> >
	<!-- Code here -->
	<div class="body" style="min-height: 700px; text-align: center;">
		<div style="padding-top: 80px;">
				<a href="#" id="buatAkunAdmin">Buat Akun Admin</a>
		</div>
		<div class="text-center" style="margin-top: 290px; position: absolute;">
			<div id="str" style="font-size: 50px; margin-left: 340px; color: #282931" center></div>
		</div>
	</div>
</body>

<!-- Modal -->
        <div class="modal fade" id="modalBuatAkunAdmin" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" id="formBody">
                    <div class="modal-header" id="formHeader" style="padding:5px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 align="left"></span>Buat Akun Admin</h4>
                    </div>

                    <form role="form" method="post" action="<?php echo base_url('index.php/Controller_user/tambahAkunAdmin'); ?>">
                        <div class="modal-body" style="padding:20px 50px;">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input name="nama" type="text" class="form-control" id="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input name="nip" type="text" class="form-control" id="nip" required>
                            </div>
                            <div class="form-group">
                                <label for="psw">Password</label>
                                <input name="psw" type="password" class="form-control" id="psw" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <div class="btn-group">
                            <button type="submit" onsubmit="validasiBuat()" class="button" id="formSubmit">Buat Akun</button>
                            <button type="batal" class="button" id="closeModalAdmin">Batal</button>
                          </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

<script type="text/javascript">
	var string = "Sistem Informasi Akademik Siswa";
	var str = string.split("");
	var el = document.getElementById('str');
	(function animate() {
		str.length > 0 ? el.innerHTML += str.shift() : clearTimeout(running);
		var running = setTimeout(animate, 90);
	})();

	function buatAkunSukses(){
		alert("Akun baru telah dibuat.");
	}
	            $(document).ready(function () {
                $("#buatAkunAdmin").click(function () {
                    $("#modalBuatAkunAdmin").modal();
                });
            });

            $(document).ready(function () {
                $('#closeModalAdmin').click(function() {
                    $('#modalBuatAkunAdmin').modal('hide');
                });
            });
</script>
