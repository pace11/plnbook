<?php 

    function buatrp($angka) {
        $jadi="Rp. ".number_format($angka,0,',','.');
        return $jadi;
    }

    $id_cat  = $_POST['id_cat'];
    $id_sub  = $_POST['id_sub'];
    $id_pro  = $_POST['id_pro'];
    $lokasi  = $_POST['lokasi'];
    $catatan = $_POST['catatan'];
    $tanggal = $_POST['tanggal'];
    $jam     = $_POST['jam'];
    $date    = $tanggal." ".$jam;
    
    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE id_produk='$id_pro'");
    $data   = mysqli_fetch_array($sql);
    $uang = buatrp($data['biaya']);

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Booking Confirmation</h3>

                <?php
    
                    $carikode = mysqli_query($koneksi, "SELECT id_booking FROM tbl_booking") or die (mysqli_error($koneksi));
                    $datakode = mysqli_fetch_array($carikode);
                    $jumlah_data = mysqli_num_rows($carikode);
                        if ($datakode) {
                            $nilaikode = substr($jumlah_data[0], 1);
                            $kode = (int) $nilaikode;
                            $kode = $jumlah_data + 1;
                            $kode_otomatis = "BOOKING".str_pad($kode, 3, "0", STR_PAD_LEFT);
                        } else {
                            $kode_otomatis = "BOOKING001";
                        }
                ?>

                </div>
                <!-- /.card-header -->                     
                <div class="card-body">
                    <form action="?page=produk_detailorderpro" method="post" name="tambah" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-success">SERVICE DETAILS</div>
                                </div>  
                            </div>
                            <input type="hidden" name="id" value="<?= $kode_otomatis ?>">
                            <input type="hidden" name="id_cat" value="<?= $id_cat ?>">
                            <input type="hidden" name="id_sub" value="<?= $id_sub ?>">
                            <input type="hidden" name="id_pro" value="<?= $id_pro ?>">
                            <input type="hidden" name="lokasi" value="<?= $lokasi ?>">
                            <input type="hidden" name="catatan" value="<?= $catatan ?>">
                            <input type="hidden" name="tanggal" value="<?= $date ?>">
                            <ul>
                                <li><p><?= $data['nama_produk'] ?></p></li>
                                <li><p><?= $data['durasi']." Menit - "?><?= $uang ?></p></li>
                            </ul>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-success">TIME & ADDRESS</div>
                                </div>  
                            </div>
                            <p><i class="fa fa-calendar"></i> <?= $tanggal." - ".$jam ?></p>
                            <p><i class="fa fa-map-marker"></i> <?= $lokasi ?></p>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-success">PAYMENT</div>
                                </div>  
                            </div>
                            <p><i class="fa fa-dollar"></i> Total Price : <b><?= $uang ?></b></p>
                            <p><i class="fa fa-circle"></i> Cash on Delivered <?= $uang ?></p>
                        </div>
                </div>
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-info btn-sm" name="tambah">ORDER</button>
                </div>
                    </form>
            </div>
        </div>
    </div>
</div>
