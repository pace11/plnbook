<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info alert-dismissible">
                    <i class="fa fa-flash"></i> <b>PLN</b> LAB | Help
                </div>
            </div>  
        </div>
        <div class="">
            <div class="col-md-12">
                <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_category");
                    while ($tampil = mysqli_fetch_array($sql)) {
                ?>
                <div class="card">
                    <a href="?page=help_detail&id=<?= $tampil['id_category'] ?>" class="btn btn-success"><?= $tampil['nama'] ?></a>
                </div>
                <?php } ?>
            </div>
        </div>
</div>