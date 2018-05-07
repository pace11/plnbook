<?php 

    $id_book = $_POST['id_book'];

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">ID Booking :</h3>
                </div>                 
                <div class="card-body">
                <?php 

                $jalan = 1;

                        $update = mysqli_query($koneksi, "UPDATE tbl_booking SET
                                  id_mitrapln     ='$id',
                                  status_jalan    ='$jalan'
                                  WHERE id_booking ='$id_book'");
                        

                    if ($update) {
                    ?>
                        <div class="social-auth-links mb-3">
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fa fa-check"></i> Alert!</h5>
                                Booking accept
                            </div>
                        </div>
                    <?php
                    echo"<meta http-equiv='refresh' content='1;
                    url=?page=booking'>";
                    } else { ?>

                        <div class="social-auth-links mb-3">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fa fa-remove"></i> Alert!</h5>
                                Booking declined
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
