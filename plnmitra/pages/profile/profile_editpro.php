<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Profile</h3>
                </div>                 
                <div class="card-body">
                <?php 
                    $id         = $_POST['id'];
                    $fullname   = $_POST['nama'];
                    $email      = $_POST['email'];
                    $handphone  = $_POST['handphone'];
                    $bio        = $_POST['bio'];

                    $nama_img   = $_FILES['pace']['name'];
                    $loc_img    = $_FILES['pace']['tmp_name'];
                    $type_img   = $_FILES['pace']['type'];

                        if ($nama_img != "") {
                            $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tbl_mitrapln WHERE id_mitrapln='$id'"));
                                unlink("../data/img/mitrapln/$data[img]");
                                move_uploaded_file($loc_img,"../data/img/mitrapln/$nama_img");
                            
                                $update = mysqli_query($koneksi, "UPDATE tbl_mitrapln SET
                                        full_name       ='$fullname',
                                        email           ='$email',
                                        handphone       ='$handphone',
                                        img             ='$nama_img',
                                        bio             ='$bio'
                                        WHERE id_mitrapln ='$id'");
                        } else {
                                $update = mysqli_query($koneksi, "UPDATE tbl_mitrapln SET
                                        full_name       ='$fullname',
                                        email           ='$email',
                                        handphone       ='$handphone',
                                        bio             ='$bio'
                                        WHERE id_mitrapln ='$id'");
                        }

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
                    url=?page=profile'>";
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
        </div>
    </div>
</div>
