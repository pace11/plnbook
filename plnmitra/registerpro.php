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
<div class="login-box">
  <div class="login-logo">
    <i class="fa fa-flash"></i>
    <a><b>PLN</b> MITRA</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Register</p>
      
      <?php

        include "lib/koneksi.php";

        $id         = $_POST['id'];
        $fullname   = $_POST['fullname'];
        $email      = $_POST['email'];
        $handphone  = $_POST['handphone'];
        $pin        = $_POST['pin'];
        $status     = 1;

        $nama_img   = $_FILES['pace']['name'];
        $loc_img    = $_FILES['pace']['tmp_name'];
        $type_img   = $_FILES['pace']['type'];

            move_uploaded_file($loc_img,"../data/img/mitrapln/$nama_img");

                $register       = mysqli_query($koneksi, "INSERT INTO tbl_mitrapln SET
                                            id_mitrapln     ='$id',
                                            full_name       ='$fullname',
                                            email           ='$email',
                                            handphone       ='$handphone',
                                            pin             ='$pin',
                                            img             ='$nama_img',
                                            status          ='$status'");

        if ($register) {
        ?>
            <div class="social-auth-links mb-3">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fa fa-check"></i> Alert!</h5>
                    Register success
                </div>
            </div>
        <?php
        echo"<meta http-equiv='refresh' content='1;
        url=login.php'>";
        } else { ?>

            <div class="social-auth-links mb-3">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fa fa-remove"></i> Alert!</h5>
                    Register failed
                </div>
            </div>

        <?php } ?>
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
</body>
</html>
