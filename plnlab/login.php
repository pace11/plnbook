<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PLN LAB | Log in</title>
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
<div class="login-box">
  <div class="login-logo">
    <i class="fa fa-flash"></i>
    <a><b>PLN</b> LAB</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login</p>

      <form action="login.php" method="post">
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
      <div class="social-auth-links text-center mb-3">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-block btn-primary">
           LOGIN</button>
        </div>
      </div>
    </form>

    <?php

        if (isset($_POST['handphone']) && isset($_POST['pin'])){
          session_start();
          include "lib/koneksi.php";

          $handphone  = $_POST['handphone'];
          $pin        = $_POST['pin'];


          $cek1       = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan 
                                    WHERE handphone ='$handphone' AND pin ='$pin'");
          $data      = mysqli_fetch_array($cek1);
          $jumlah    = mysqli_num_rows($cek1);

          
          if ($jumlah>0)
          {
          ?>
          <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible">
                    Login Success
                </div>
            </div>  
          </div>

          <?php
          echo"<meta http-equiv='refresh' content='1;
          url=index.php?page=home'>";
          } 

          $_SESSION['handphone']  = $data['handphone'];
          $_SESSION['pin']        = $data['pin'];
        }
    ?>

      <p class="mb-0">
        Don't have an account? <a href="register.php" class="text-center">Register</a>
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
