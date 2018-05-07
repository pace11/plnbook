<div class="container-fluid">
    
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info alert-dismissible">
                ketika melakukan perubahan PIN, Aplikasi akan <b>LOGOUT OTOMATIS</b>. untuk masuk kembali, cukup melakukan <b>LOGIN</b> kembali
            </div>
        </div>  
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Change Password</h3>

                </div>
                <!-- /.card-header -->                     
                <div class="card-body">
                <?php 

                    $pin_baru   = $_POST['pin_baru'];
                            
                    $update = mysqli_query($koneksi, "UPDATE tbl_pelanggan SET
                                        pin     = '$pin_baru'
                                        WHERE id_pelanggan ='$id'");

                    if ($update) {
                    ?>
                        <div class="social-auth-links mb-3">
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fa fa-check"></i> Alert!</h5>
                                Update success
                            </div>
                        </div>
                    <?php
                    echo"<meta http-equiv='refresh' content='1;
                    url=?page=logout'>";
                    } else { ?>

                        <div class="social-auth-links mb-3">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fa fa-remove"></i> Alert!</h5>
                                Update failed
                            </div>
                        </div>

                    <?php } ?>
                </div>   
            </div>
            <div class="card">
                <a href="?page=changepin" class="btn btn-success">Back</a>
            </div>
        </div>
    </div>
</div>
