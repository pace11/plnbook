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

                $input  = mysqli_query($koneksi, "INSERT INTO tbl_kemampuan SET
                        id_kemampuan    = '$_POST[id]',
                        id_produk       = '$_POST[id_produk]',
                        id_mitrapln     = '$_POST[id_mitra]',
                        nama_kemampuan  = '$_POST[nama_kemampuan]',
                        status          = '$status' 
                        ")  or die (mysqli_error($koneksi));

            if ($input){ ?>
                <div class="callout callout-success">
                  <p>Data KEMAMPUAN berhasil disimpan <span class="fa fa-check"></span></p> 
                  <?php echo "<meta http-equiv='refresh' content='1;
                  url=?tampil=kemampuan'>"; ?>
                </div>
            <?php }} ?>
        </div>
      </div>
    </div>
  </div>
</section>
