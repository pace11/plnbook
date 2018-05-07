<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          <h3 class="box-title"><b>Kategori</b> | Edit</h3>
      </div>

        <div class="box-body">

<?php

        $input  = mysqli_query($koneksi, "UPDATE tbl_category SET
                    nama                = '$_POST[nama]'
                    WHERE id_category   = '$_POST[id]'
                    ") or die (mysqli_error($koneksi));

    if ($input) { ?>
      <div class="callout callout-success">
        <p>Data KATEGORI berhasil diedit <span class="fa fa-check"></span></p> 
        <?php echo "<meta http-equiv='refresh' content='1;
        url=?tampil=kategori'>"; ?>
      </div>
    <?php } ?>

        </div>
      </div>
    </div>
  </div>
</section>
