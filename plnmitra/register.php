<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">

<?php
    
    include "lib/koneksi.php";
    $carikode = mysqli_query($koneksi, "SELECT id_mitrapln FROM tbl_mitrapln") or die (mysqli_error($koneksi));
    $datakode = mysqli_fetch_array($carikode);
    $jumlah_data = mysqli_num_rows($carikode);
        if ($datakode) {
            $nilaikode = substr($jumlah_data[0], 1);
            $kode = (int) $nilaikode;
            $kode = $jumlah_data + 1;
            $kode_otomatis = "MITRAPLN".str_pad($kode, 3, "0", STR_PAD_LEFT);
        } else {
            $kode_otomatis = "MITRAPLN001";
        }

 ?>
<div class="login-box">
  <div class="login-logo">
    <i class="fa fa-flash"></i>
    <a><b>PLN</b> MITRA</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Register</p>

      <form action="registerpro.php" method="post" name="tambah" enctype="multipart/form-data" class="form-horizontal">

        <input type="hidden" name="id" value="<?= $kode_otomatis ?>">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Full Name" name="fullname">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Email" name="email">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-phone"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Handphone" name="handphone">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="PIN" name="pin">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-image"></i></span>
            </div>
            <input type="file" class="form-control" name="pace">
        </div>
      <div class="social-auth-links text-center mb-3">
        <div class="col-xs-12">
           <button type="Submit" name="tambah" class="btn btn-block btn-primary">
                  <span class="glyphicon glyphicon-plus-sign"></span> REGISTER</button>
        </div>
      </div>
    </form>
      <p class="mb-0">
        By registering you agree to the terms and conditions of <a href="http://www.pln.co.id/" target="_blank" class="text-center">pln.co.id</a>
      </p>
      <p class="mb-0">
        Already have an Account ? <a href="login.php" class="text-center">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
