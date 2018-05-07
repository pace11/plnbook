<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Profile</h3>
                </div>                 
                <div class="card-body">
                <?php 
                    $id_book    = $_POST['id'];
                    $id_cat     = $_POST['id_cat'];
                    $id_sub     = $_POST['id_sub'];
                    $id_pro     = $_POST['id_pro'];
                    $lokasi     = addslashes($_POST['lokasi']);
                    $catatan    = addslashes($_POST['catatan']);
                    $date       = $_POST['tanggal'];
                    $def        =0;
                    $cash       =1;
                       
                        $simpan = mysqli_query($koneksi, "INSERT INTO tbl_booking SET
                                id_booking      ='$id_book',
                                id_category     ='$id_cat',
                                id_sub          ='$id_sub',
                                id_produk       ='$id_pro',
                                id_pelanggan    ='$id',
                                lokasi          ='$lokasi',
                                catatan         ='$catatan',
                                date            ='$date',
                                cash            ='$cash',
                                status_jalan    ='$def',
                                status_belajar  ='$def',
                                status_selesai  ='$def',
                                cancel          ='$def'");
                        

                    if ($simpan) {
                    ?>
                        <div class="social-auth-links mb-3">
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fa fa-check"></i> Alert!</h5>
                                Booking success
                            </div>
                        </div>
                    <?php
                    echo"<meta http-equiv='refresh' content='1;
                    url=?page=order'>";
                    } else { ?>

                        <div class="social-auth-links mb-3">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fa fa-remove"></i> Alert!</h5>
                                Booking failed
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
