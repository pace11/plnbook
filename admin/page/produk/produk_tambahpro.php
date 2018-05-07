<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          <h3 class="box-title"><b>Kategori</b> | Tambah</h3>
      </div>

        <div class="box-body">

          <?php
            if (isset($_POST['simpan'])) {

              $status = 1;

                $input  = mysqli_query($koneksi, "INSERT INTO tbl_produk SET
                        id_produk       = '$_POST[id]',
                        id_category     = '$_POST[id_category]',
                        nama_produk     = '$_POST[nama]',
                        durasi          = '$_POST[durasi]',
                        biaya           = '$_POST[biaya]',
                        persentasi      = '$_POST[persentasi]',
                        status          = '$status' 
                        ")  or die (mysqli_error($koneksi));

            if ($input){ ?>
                <div class="callout callout-success">
                  <p>Data PRODUK berhasil disimpan <span class="fa fa-check"></span></p> 
                  <?php echo "<meta http-equiv='refresh' content='1;
                  url=?tampil=produk'>"; ?>
                </div>
            <?php }} ?>
        </div>
      </div>
    </div>
  </div>
</section>
