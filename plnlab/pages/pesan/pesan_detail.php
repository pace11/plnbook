<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Inbox</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <ul class="products-list product-list-in-card pl-2 pr-2">
                        <?php
                        $id = $_GET['id'];

                        $sql = mysqli_query($koneksi, "SELECT * FROM tbl_pesan WHERE id_pesan='$id'");
                        while ($tampil = mysqli_fetch_array($sql)) {
                        ?>
                        <h4><?= strtoupper($tampil['judul']) ?></h4>
                        <p><?= $tampil['tgl_pesan']?></p>
                        <p><?= $tampil['deskripsi']?></p>
                        <?php } ?>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="social-auth-links text-center">
                        <div class="col-xs-12">
                            <a href="?page=pesan" class="btn btn-block btn-primary">Back</a>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
</div>
