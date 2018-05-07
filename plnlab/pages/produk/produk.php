<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <?php 

            function buatrp($angka) {
            $jadi="Rp. ".number_format($angka,0,',','.');
            return $jadi;
            }

            $id_cat = $_GET['id_cat'];
            $id_sub = $_GET['id_sub'];

            $produk = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE id_category='$id_cat' AND status=1");
            $hit = mysqli_num_rows($produk);
            if ($hit > 0) {
            while ($tampil = mysqli_fetch_array($produk)) {
            $biaya = $tampil['biaya'];

        ?>
            <div class="card">                     
                <div class="card-body">
                    <ul class="products-list product-list-in-card">
                        <li class="item">
                            <div class="product-img">
                            <span class="fas fa fa-cart-plus fa-3x"></span>
                            </div>
                            <div class="product-info">
                                <a href="??page=produk_detail&id_cat=<?= $id_cat ?>&id_sub=<?= $id_sub ?>&id_pro=<?= $tampil['id_produk'] ?>" class="product-title"><?= $tampil['nama_produk'] ?><span class="badge badge-warning float-right"><?= $tampil['persentasi']?>%</span></a>
                                <span class="product-description">
                                <p><?= $tampil['durasi'] ?> Menit - <?= buatrp($biaya) ?> <a href="?page=produk_detail&id_cat=<?= $id_cat ?>&id_sub=<?= $id_sub ?>&id_pro=<?= $tampil['id_produk'] ?>" class="btn btn-success btn-sm">Pilih <i class="fa fa-check-square"></i></a></p>
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <?php }} else { ?>
                <div class="alert alert-danger alert-dismissible">
                    <i class="fa fa-remove"></i> Belum ada produk sesuai category
                </div>
            <?php } ?>
        </div>
    </div>
</div>
