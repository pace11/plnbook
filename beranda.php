<?php 

$sql1 = mysqli_query($koneksi, "SELECT * FROM karyawan");
$users = mysqli_num_rows($sql1);

$sql2 = mysqli_query($koneksi, "SELECT * FROM master_vendor");
$vendor = mysqli_num_rows($sql2);

?>
<section class="content-header">
  <h1>
    Dashboard
    <small>Administrator</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- isi halaman -->
<section class="content">

  <div class="row">

    <div class="clearfix visible-sm-block"></div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Karyawan</span>
          <span class="info-box-number">
            <?= $users; ?>
          </span>
        </div>
      </div>
    </div>

    <div class="clearfix visible-sm-block"></div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="fa fa-code-fork"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Vendor</span>
          <span class="info-box-number">
            <?= $vendor; ?>
          </span>
        </div>
      </div>
    </div>

    

  </div>

</section>

<!-- isi halaman -->
