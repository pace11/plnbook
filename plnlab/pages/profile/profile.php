<section class="content">
      <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info alert-dismissible">
                    <i class="fa fa-flash"></i> <b>PLN</b> LAB | Account
                </div>
            </div>  
        </div>

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
              
              </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
                            
                            
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#wallet" data-toggle="tab">Wallet</a></li>
                  <li class="nav-item"><a class="nav-link" href="#setting" data-toggle="tab">Setting</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="profile">
                    <h3><?= $nama ?></h3>
                    <p><?= $email ?></p>
                    <p><?= $handphone ?></p>
                    <div class="card">
                      <a href="?page=profile_edit&id=<?= $id ?>" class="btn btn-success">Edit Profile</a>
                    </div>
                  </div>
                  <div class="tab-pane" id="wallet">
                    <h4>Rp. 150.000,-</h4>
                    <div class="card">
                      <a href="?page=topup" class="btn btn-success">Top Up</a>
                    </div>
                  </div>
                  <div class="tab-pane" id="setting">
                    <div class="card">
                      <a href="?page=tos" class="btn btn-success">Term of Service</a>
                    </div>
                    <div class="card">
                      <a href="?page=privacy" class="btn btn-success">Privacy Policy</a>
                    </div>
                    <div class="card">
                      <a href="?page=changelang" class="btn btn-success">Change Languange</a>
                    </div>
                    <div class="card">
                      <a href="?page=changepin" class="btn btn-success">Change Password</a>
                    </div>
                  </div>

              </div><!-- /.card-body -->
            </div>

        </div>
    </div>
</div>
</section>


