<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?= $image ?>"
                       alt="User profile picture">
                </div>

                    <h3 class="profile-username text-center"><?= $nama ?></h3>
                    <p class="text-muted text-center">
                        <span class="text-sm text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </span>
                    </p>

              </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
                            
                            
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#biography" data-toggle="tab">Biography</a></li>
                  <li class="nav-item"><a class="nav-link" href="#rating" data-toggle="tab">Rating</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="biography">
                    <p><b>Status : </b><?= $bio ?></p>
                    <div class="card">
                      <a href="?page=profile_edit&id=<?= $id ?>" class="btn btn-success">Edit Profile</a>
                    </div>
                    <p><b>Kategori Layanan</b></p>
                      <ol>
                      <?php 
                      
                      $skill = mysqli_query($koneksi, "SELECT * FROM tbl_kemampuan WHERE id_mitrapln='$id'");
                      while($data = mysqli_fetch_array($skill)){
                      ?>
                        <li><?= $data['nama_kemampuan'] ?></li>
                      <?php } ?>
                      </ol>
                  </div>
                  <div class="tab-pane" id="rating">
                    <p>Rating</p>
                  </div>

              </div><!-- /.card-body -->
            </div>

        </div>
    </div>
</div>
</section>

