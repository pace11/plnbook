<?php 

    function namamitra($id) {
        include "lib/koneksi.php";
        $nama = mysqli_query($koneksi, "SELECT * FROM tbl_mitrapln WHERE id_mitrapln='$id'");
        $tampil = mysqli_fetch_array($nama);
        echo $tampil['full_name'];
    }
?>
<section class="content">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info alert-dismissible">
                    <i class="fa fa-flash"></i> <b>PLN</b> LAB | Order
                </div>
            </div>  
        </div>

        <div class="row">
            <div class="col-md-12">
                    <div class="card">
                    <a href="?page=order" class="btn btn-primary"><i class="fa fa-refresh"></i> REFRESH</a>
                    </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">        
                <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#inprogress" data-toggle="tab">In Progress</a></li>
                    <li class="nav-item"><a class="nav-link" href="#completed" data-toggle="tab">Completed</a></li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                    <div class="active tab-pane" id="inprogress">
                    <?php 

                        function buatrp($angka) {
                        $jadi="Rp. ".number_format($angka,0,',','.');
                        return $jadi;
                        }
                        
                        
                        $produk = mysqli_query($koneksi, "SELECT * FROM tbl_booking 
                                                          JOIN tbl_produk ON tbl_booking.id_produk=tbl_produk.id_produk
                                                          WHERE tbl_booking.id_pelanggan='$id' AND tbl_booking.status_selesai=0");
                        
                        $hit = mysqli_num_rows($produk);
                        if ($hit > 0) {
                        while ($tampil = mysqli_fetch_array($produk)) { 
                        $newdate = date('d-M-Y', strtotime(date($tampil['date'])));
                        $newhour = date('H-i', strtotime(date($tampil['date'])));
                        $uang = buatrp($tampil['biaya']);
                        
                        ?>
                        
                        <div class="card">                     
                                <div class="card-body">
                                    <div class="product-info">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert alert-success alert-dismissible">
                                                    Order ID : <b><?= $tampil['id_booking'] ?></b>
                                                </div>
                                            </div>  
                                        </div>
                                        <span class="product-description">
                                        <i class="fa fa-book"></i> <?= $tampil['nama_produk'] ?><br>
                                        <?= $tampil['durasi']." Menit - ".$uang ?><br>
                                        <i class="fa fa-calendar"> <?= $newdate ?></i> <?= $newhour ?> WIB <br>
                                        <i class="fa fa-map-marker"></i> <?= $tampil['lokasi'] ?> <br>
                                        <?php 
                                            if ($tampil['id_mitrapln'] == NULL) { echo "<i class='fa fa-user'></i> Mitra : Belum ada"; }
                                            else { echo "<i class='fa fa-user'></i> Mitra : "; namamitra($tampil['id_mitrapln']); }
                                        ?><br>
                                        Status : 
                                        <?php 
                                        if ($tampil['status_jalan'] == 0 && $tampil['status_jalan'] == 0 && $tampil['status_jalan'] == 0) { echo "<b>Menunggu Mitra</b>"; }
                                        else if ($tampil['status_jalan'] == 1 && $tampil['status_belajar'] == 0 && $tampil['status_selesai'] == 0) { echo "<b>Menuju Lokasi</b>"; }
                                        else if ($tampil['status_jalan'] == 1 && $tampil['status_belajar'] == 1 && $tampil['status_selesai'] == 0) { echo "<b>Mulai Belajar</b>"; }
                                        else if ($tampil['status_jalan'] == 1 && $tampil['status_belajar'] == 1 && $tampil['status_selesai'] == 1) { echo "<b>Selesai</b>"; }
                                        ?>
                                        </span>
                                    </div>
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
                    <div class="tab-pane" id="completed">
                    <?php

                    $produk = mysqli_query($koneksi, "SELECT * FROM tbl_booking 
                                                          JOIN tbl_produk ON tbl_booking.id_produk=tbl_produk.id_produk
                                                          WHERE tbl_booking.id_pelanggan='$id' AND tbl_booking.status_selesai=1");
                        
                        $hit = mysqli_num_rows($produk);
                        if ($hit > 0) {
                        while ($tampil = mysqli_fetch_array($produk)) { 
                        $newdate = date('d-M-Y', strtotime(date($tampil['date'])));
                        $newhour = date('H-i', strtotime(date($tampil['date'])));
                        $uang = buatrp($tampil['biaya']);
                        
                        ?>
                        
                        <div class="card">                     
                                <div class="card-body">
                                    <div class="product-info">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert alert-success alert-dismissible">
                                                    Order ID : <b><?= $tampil['id_booking'] ?></b>
                                                </div>
                                            </div>  
                                        </div>
                                        <span class="product-description">
                                        <i class="fa fa-book"></i> <?= $tampil['nama_produk'] ?><br>
                                        <?= $tampil['durasi']." Menit - ".$uang ?><br>
                                        <i class="fa fa-calendar"> <?= $newdate ?></i> <?= $newhour ?> WIB <br>
                                        <i class="fa fa-map-marker"></i> <?= $tampil['lokasi'] ?> <br>
                                        <?php 
                                            if ($tampil['id_mitrapln'] == NULL) { echo "<i class='fa fa-user'></i> Mitra : Belum ada"; }
                                            else { echo "<i class='fa fa-user'></i> Mitra : "; namamitra($tampil['id_mitrapln']); }
                                        ?><br>
                                        Status : 
                                        <?php 
                                        if ($tampil['status_jalan'] == 0 && $tampil['status_jalan'] == 0 && $tampil['status_jalan'] == 0) { echo "<b>Menunggu Mitra</b>"; }
                                        else if ($tampil['status_jalan'] == 1 && $tampil['status_belajar'] == 0 && $tampil['status_selesai'] == 0) { echo "<b>Menuju Lokasi</b>"; }
                                        else if ($tampil['status_jalan'] == 1 && $tampil['status_belajar'] == 1 && $tampil['status_selesai'] == 0) { echo "<b>Mulai Belajar</b>"; }
                                        else if ($tampil['status_jalan'] == 1 && $tampil['status_belajar'] == 1 && $tampil['status_selesai'] == 1) { echo "<b>Selesai</b>"; }
                                        ?>
                                        </span>
                                    </div>
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

                </div><!-- /.card-body -->
                </div>

            </div>
        </div>
    </div>
</section>

