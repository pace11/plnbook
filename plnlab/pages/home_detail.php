<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info alert-dismissible">
                    <i class="fa fa-flash"></i> <b>PLN</b> LAB | Home
                </div>
            </div>  
        </div>

        <div class="row">
          <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="http://placehold.it/900x500/39CCCC/ffffff&amp;text=I+Love+Bootstrap" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="http://placehold.it/900x500/3c8dbc/ffffff&amp;text=I+Love+Bootstrap" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="http://placehold.it/900x500/f39c12/ffffff&amp;text=I+Love+Bootstrap" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
        <br>

        <div class="row">
          
          <?php
          
          $id_category = $_GET['id_cat'];

          $sql = mysqli_query($koneksi, "SELECT * FROM tbl_sub");
          while ($tampil = mysqli_fetch_array($sql)) {
          ?>
          
          <div class="col-4">
            <div class="info-box">
              <div class="info-box-content">
                <span class="info-box-text"><p><?= $tampil['nama_sub'] ?></p></span>
                <span class="info-box-number">
                 <a href="?page=produk&id_cat=<?= $id_category ?>&id_sub=<?= $tampil['id_sub']?>" class="btn btn-success btn-sm"><i class="fa fa-check-square"></i> pilih</a>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <?php } ?>
        
        </div>

        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->