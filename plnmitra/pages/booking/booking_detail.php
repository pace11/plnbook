<?php 

    function buatrp($angka) {
        $jadi="Rp. ".number_format($angka,0,',','.');
        return $jadi;
    }

    $id_book  = $_GET['id'];
    
    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_booking 
                                   JOIN tbl_pelanggan ON tbl_booking.id_pelanggan=tbl_pelanggan.id_pelanggan
                                   JOIN tbl_produk ON tbl_booking.id_produk=tbl_produk.id_produk
                                   JOIN tbl_sub ON tbl_booking.id_sub=tbl_sub.id_sub
                                   WHERE tbl_booking.id_booking='$id_book'");
    $data = mysqli_fetch_array($sql);
    $jam  = date('H-i', strtotime(date($data['date'])));
    $tgl  = date('d-M-Y', strtotime($data['date']));

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">ID Booking : <b><?= $data['id_booking'] ?></b></h3>
                </div>
                <!-- /.card-header -->                     
                <div class="card-body">
                    <?php if ($data['status_jalan'] == 0) { ?>
                        <form action="?page=booking_detailpro" method="post" name="tambah" enctype="multipart/form-data" class="form-horizontal">
                    <?php } else if ($data['status_jalan'] != 0 && $data['status_belajar'] == 0 ) { ?>
                        <form action="?page=booking_detailpromb" method="post" name="tambah" enctype="multipart/form-data" class="form-horizontal">
                    <?php } else if ($data['status_jalan'] != 0 && $data['status_belajar'] != 0 && $data['status_selesai'] == 0 ) { ?>
                        <form action="?page=booking_detailpros" method="post" name="tambah" enctype="multipart/form-data" class="form-horizontal">
                    <?php } ?>
                    
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-success">Identitas
                                    </div>
                                </div>  
                            </div>
                            <input type="hidden" name="id_book" value="<?= $data['id_booking'] ?>">
                            <i class="fa fa-user"></i> Pelanggan : <?= $data['full_name'] ?>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-success">Waktu dan Tempat</div>
                                </div>  
                            </div>
                            <i class="fa fa-calendar"></i> <?= $tgl ?> <br>
                            <i class="fa fa-clock-o"></i> <?= $jam ?> WIB <br>
                            <i class="fa fa-map-marker"></i> <?= $data['lokasi'] ?>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-success">Catatan</div>
                                </div>  
                            </div>
                            <i class="fa fa-thumb-tack"></i> <?= $data['catatan'] ?>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-success">Layanan</div>
                                </div>  
                            </div>
                            <i class="fa fa-book"></i> <?= $data['nama_produk'] ?> <br>
                            Kategori : <?= $data['nama_sub'] ?> <br>
                            Durasi : <?= $data['durasi'] ?> Menit <br>
                            Status :
                            <?php 
                                if ($data['status_jalan'] == 0) { echo "<b>Menunggu Mitra</b>"; } 
                                else if ($data['status_jalan'] != 0 && $data['status_belajar'] == 0 ) { echo "<b>Menuju Lokasi</b>"; } 
                                else if ($data['status_jalan'] != 0 && $data['status_belajar'] != 0 && $data['status_selesai'] == 0 ) {echo "<b>Mulai Belajar</b>";} 
                            ?>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-danger">
                                        Total Order : <b><?= buatrp($data['biaya']) ?></b> <br>
                                        Pembayaran : <?php if($data['cash'] == 1){echo "<b>CASH</b>";}else{echo "<b>Belum Bayar</b>";}?>
                                    </div>
                                </div>  
                            </div>
                        </div>
                </div>
                
                <?php if ($data['status_jalan'] == 0) { ?>
                    <div class="card-footer text-center"><button type="submit" class="btn btn-info btn-sm" name="tambah">JALAN</button>
                <?php } else if ($data['status_jalan'] != 0 && $data['status_belajar'] == 0 ) { ?>
                    <div class="card-footer text-center"><button type="submit" class="btn btn-info btn-sm" name="tambah">MULAI BELAJAR</button>
                <?php } else if ($data['status_jalan'] != 0 && $data['status_belajar'] != 0 && $data['status_selesai'] == 0 ) { ?>
                    <div class="card-footer text-center"><button type="submit" class="btn btn-info btn-sm" name="tambah">SELESAI</button> 
                <?php } else { ?>
                    <div class="card-footer text-center"><button class="btn btn-info btn-sm">SUKSES <i class="fa fa-check-square"></i></button>
                <?php } ?>      
                </div>
                    </form>
            </div>
            <div class="card">
                <a href="?page=booking" class="btn btn-success">BACK</a>
            </div>
        </div>
    </div>
</div>
