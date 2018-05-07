<?php 

$sql1 = mysqli_query($koneksi, "SELECT * FROM tbl_mitrapln WHERE status=1");
$mitra = mysqli_num_rows($sql1);

?>
<section class="content-header">
  <h1>
    Dashboard
    <small>Administrator</small>
  </h1>
  <ol class="breadcrumb">
    <li><a><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- isi halaman -->
<section class="content">
  <div class="row">
    <div class="col-xs-12"> 
      
        <div class="clearfix visible-sm-block"></div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">MITRA PLN</span>
              <span class="info-box-number">
                <?= $mitra ?>
              </span>
            </div>
          </div>
        </div>

        <div class="clearfix visible-sm-block"></div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-yellow"><i class="fa fa-code-fork"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">PELANGGAN PLN</span>
              <span class="info-box-number">
                
              </span>
            </div>
          </div>
        </div>
    
    </div>
  </div>

</section>