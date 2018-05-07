<?php 

    function pesanglobal($idpesan,$idmitra) {
    include "lib/koneksi.php";
    $global = mysqli_query($koneksi, "SELECT * FROM tbl_pesanglobal WHERE id_pesan='$idpesan' AND id_mitrapln='$idmitra'");
    $hitung = mysqli_num_rows($global);
    }

?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                                                
                <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#global" data-toggle="tab">Global</a></li>
                    <li class="nav-item"><a class="nav-link" href="#personal" data-toggle="tab">Personal</a></li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                    <div class="active tab-pane" id="global">
                        <ul class="products-list product-list-in-card">
                            <?php
                            $no=1;
                            $sql = mysqli_query($koneksi, "SELECT * FROM tbl_pesan WHERE have=0");
                            while ($tampil = mysqli_fetch_array($sql)) {
                            $id_pes = $tampil['id_pesan'];
                            ?>
                            <li class="item">
                            <div class="product-img">
                            <span class="<?php if (pesanglobal($id_pes,$id) == 0) { echo "fas fa fa-envelope-o fa-3x"; }
                                               else { echo "fas fa fa-envelope fa-3x"; }?>"></span>
                            </div>
                            <div class="product-info">
                                <a href="?page=pesan_detail&id=<?= $tampil['id_pesan']?>&idm=<?= $id ?>" class="product-title"><?= strtoupper($tampil['judul']) ?>
                                </a>
                                <span class="product-description">
                                <?= $tampil['tgl_pesan'] ?>
                                </span>
                            </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="tab-pane" id="personal">
                        <ul class="products-list product-list-in-card">
                            <?php
                            $no=1;
                            $sql = mysqli_query($koneksi, "SELECT * FROM tbl_pesanperson
                                                           JOIN tbl_pesan ON tbl_pesanperson.id_pesan=tbl_pesan.id_pesan
                                                           JOIN tbl_mitrapln ON tbl_pesanperson.id_mitrapln=tbl_mitrapln.id_mitrapln
                                                           WHERE tbl_mitrapln.id_mitrapln='$id'");
                            $hitung = mysqli_num_rows($sql);
                            if ($hitung > 0) {
                            while ($tampil = mysqli_fetch_array($sql)) {
                            ?>

                            <li class="item">
                            <div class="product-img">
                            <span class="<?php if ($tampil['view'] == 0) {echo "fas fa fa-envelope fa-3x";} else {echo "fas fa fa-envelope-o fa-3x";} ?>"></span>
                            </div>
                            <div class="product-info">
                                <a href="?page=pesanper_detail&id=<?= $tampil['id_pesan'] ?>" class="product-title"><?= strtoupper($tampil['judul']) ?>
                                <?php if ($tampil['view'] == 0) { ?>
                                    <span class="badge badge-warning float-right">new</span>
                                <?php } ?>
                                </a>
                                <span class="product-description">
                                <?= $tampil['tgl_pesan'] ?>
                                </span>
                            </div>
                            </li>
                            <?php }} else { ?>
                                <li class="item">
                                    <p>Belum ada pesan masuk</p>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                </div><!-- /.card-body -->
                </div>

            </div>
        </div>
    </div>
</section>


