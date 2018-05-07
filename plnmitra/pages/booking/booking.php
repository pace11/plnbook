<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                    <div class="card">
                    <a href="?page=booking" class="btn btn-primary"><i class="fa fa-refresh"></i> REFRESH</a>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                                
                                
                <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#bookingterbaru" data-toggle="tab">Booking Terbaru</a></li>
                    <li class="nav-item"><a class="nav-link" href="#riwayatbooking" data-toggle="tab">Riwayat Booking</a></li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                    <div class="active tab-pane" id="bookingterbaru">
                    <?php 

                        $produk = mysqli_query($koneksi, "SELECT * FROM tbl_booking 
                                                        JOIN tbl_produk ON tbl_booking.id_produk=tbl_produk.id_produk
                                                        JOIN tbl_pelanggan ON tbl_booking.id_pelanggan=tbl_pelanggan.id_pelanggan
                                                        WHERE tbl_booking.id_mitrapln IS NULL OR tbl_booking.id_mitrapln='$id' AND tbl_booking.status_selesai=0");

                        $hit = mysqli_num_rows($produk);
                        if ($hit > 0) {
                        while ($tampil = mysqli_fetch_array($produk)) { 
                        $newdate = date('d-M-Y', strtotime(date($tampil['date'])));
                        $newhour = date('H-i', strtotime(date($tampil['date'])));
                        $dbdate  = date('Y-m-d', strtotime($tampil['date']));

                        ?>

                        <div class="card">                     
                            <div class="card-body">
                                <ul class="products-list product-list-in-card">
                                <li class="item">
                                <div class="product-img">
                                    <img src="../data/img/pelanggan/<?= $tampil['img'] ?>" class="direct-chat-img">
                                </div>
                                <div class="product-info">
                                    <a href="#" class="btn btn-success btn-sm">id booking : <b><?= $tampil['id_booking'] ?></b></a>
                                    <span class="product-description">
                                    <i class="fa fa-calendar"></i> <?= $newdate." - ".$newhour ?><br>
                                    status :
                                    <?php 
                                    if ($tampil['id_mitrapln'] == NULL && $tampil['status_jalan'] == 0) { echo "<b>Belum diambil</b>"; }
                                    else if ($tampil['id_mitrapln'] == $id && $tampil['status_jalan'] != 0) { echo "<b>Milik Anda</b>"; }
                                    else if ($tampil['id_mitrapln'] != NULL && $tampil['status_jalan'] != 0) { echo "<b>Sudah diambil</b>"; }
                                    ?>
                                    <br>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-remove"></i> cancel</a> 
                                    <a href="?page=booking_detail&id=<?= $tampil['id_booking'] ?>" class="btn btn-info btn-sm"><i class="fa fa-search-plus"></i> detail</a>
                                    </span>
                                </div>
                                </li>
                                </ul>    
                            </div>
                        </div>
                        <?php }} else { ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-danger alert-dismissible">
                                        <i class="fa fa-remove"></i> Belum ada orderan
                                    </div>
                                </div>  
                            </div>
                        <?php } ?>
                    </div>
                    <div class="tab-pane" id="riwayatbooking">
                    <?php 

                        $produk = mysqli_query($koneksi, "SELECT * FROM tbl_booking 
                                                        JOIN tbl_produk ON tbl_booking.id_produk=tbl_produk.id_produk
                                                        JOIN tbl_pelanggan ON tbl_booking.id_pelanggan=tbl_pelanggan.id_pelanggan
                                                        WHERE tbl_booking.id_mitrapln IS NULL OR tbl_booking.id_mitrapln='$id' AND tbl_booking.status_selesai=1");

                        $hit = mysqli_num_rows($produk);
                        if ($hit > 0) {
                        while ($tampil = mysqli_fetch_array($produk)) { 
                        $newdate = date('d-M-Y', strtotime(date($tampil['date'])));
                        $newhour = date('H-i', strtotime(date($tampil['date'])));
                        $dbdate  = date('Y-m-d', strtotime($tampil['date']));

                        ?>

                        <div class="card">                     
                            <div class="card-body">
                                <ul class="products-list product-list-in-card">
                                <li class="item">
                                <div class="product-img">
                                    <img src="../data/img/pelanggan/<?= $tampil['img'] ?>" class="direct-chat-img">
                                </div>
                                <div class="product-info">
                                    <a href="#" class="btn btn-success btn-sm">id booking : <b><?= $tampil['id_booking'] ?></b></a>
                                    <span class="product-description">
                                    <i class="fa fa-calendar"></i> <?= $newdate." - ".$newhour ?><br>
                                    <?php 
                                    if ($tampil['status_selesai'] != 0) { ?>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-check-square"></i> Selesai</a>
                                    <?php } ?> 
                                    </span>
                                </div>
                                </li>
                                </ul>    
                            </div>
                        </div>
                        <?php }} else { ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-danger alert-dismissible">
                                        <i class="fa fa-remove"></i> Belum ada riwayat
                                    </div>
                                </div>  
                            </div>
                        <?php } ?>
                    </div>

                </div><!-- /.card-body -->
                </div>

            </div>
        </div>
    </div>
</section>

