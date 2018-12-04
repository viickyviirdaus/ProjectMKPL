<!DOCTYPE html>
<html>
<head>
  <title>SIAS</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets');?>/css/background.css"  >
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/cssnyatemplate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css">
  <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/jquery-3.2.1.slim.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/popper.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets');?>/css/background.css"  >
  <style>
      .btn-group .button {
          background-color: #4f83cc;
          margin-right: 8px;
          color: white;
          padding: 10px 24px;;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 14px;
          cursor: pointer;
          float: right;
          border-radius: 10px;
          border-color: black;
        }
      .btn-group .button:hover{
        background-color: white;
        color: black;
      }
  </style>
</head>
<body style="background: #4f83cc" <?php if ($login == "fail"){ echo "onload=loginFail()";} ?> >

  <!-- particles.js container -->
  <div id="particles-js"></div>

  <!-- scripts -->
  <script src="<?php echo base_url('assets'); ?>/demo/particles.js" ></script>
  <script src="<?php echo base_url('assets'); ?>/js/app.js" ></script>

  <header style="background:rgba(1, 87, 155, 1); padding: 10px;">
    <center>
      <h2 style="color: white">SIAS</h2>
      <h5 style="color: white">Sistem Informasi Akademik Siswa</h5>
    </center>
  </header>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style=" border-radius: 10px; background-color: white; margin-top: 95px; margin-bottom: 175px; background:rgba(1, 87, 155, 1); height:260px;">
          <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/Controller_user/login/admin') ?>" >
            <div class="form-group" style="margin-top: 5px; ">
              <b><h3><center style="color: white;">Login Admin</center></h3></b>
              <div class="col-sm-12 input-sm " style="margin-top: 10px;">
                <input id="nip" type="text" class="form-control" name="nip" placeholder="Masukkan NIP" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12 input-sm">
                <input type="password" class="form-control" name="psw" placeholder="Masukkan password" required>
              </div>
            </div>
            <center>
              <div class="form-group">
                  <button type="submit" onsubmit="return validasiLogin()" style="margin-top: 8px" class="btn btn-default">Login</button>
              </div>
            </center>
          </form>
        </div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">

      </div>
    </div>
    <div style="margin-top: 40px; height: 60px; background:rgba(1, 87, 155, 1); padding: 10px; bottom: 0; position: absolute; width: 100%;">
      <h4 class="text-center" style="vertical-align: center; color: white"><i class="fa fa-copyright" aria-hidden="true"></i> Copyright 2017 Kelompok 7</h4>
    </div>
</body>


</html>

<script>
function loginFail() {
    alert("NIP atau Password yang anda masukkan salah!");
}


// function valNama(nilai, pesan) {
//   var namaExp = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
//   if(nilai.value.match(namaExp)) {
//     return true;
//   }
//   else {
//     alert(pesan);
//     nilai.focus();
//     return false;
//   }
// }

// function validasiLogin() {
//   var nipExp = /^[0-9]{11}+$/;
//   if(document.getElementById('nip').value.match(nipExp)) {
//     return true;
//   }
//   else {
//     alert("NIP harus berisi angka dengan 11 karakter");
//     return false;
//   }
// }

// function valPsw(nilai, pesan) {
//   var pswExp = /^[0-9]+$/;
//   if(nilai.value.match(pswExp)) {
//     return true;
//   }
//   else {
//     alert(pesan);
//     nilai.focus();
//     return false;
//   }
// }

// function validasiBuat() {
//   valNama(document.getElementById('nama'), 'Nama hanya berisi huruf alphabet');
//   valNip(document.getElementById('nip'), 'NIP harus berisi angka dengan 11 karakter');
//   valPsw(document.getElementById('psw'), 'Pass harus berisi angka dan maksimal berisi 11 karakter');
// }
</script>
