<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          <h3 class="box-title"><b>Karyawan</b> | Edit</h3>
      </div>

        <div class="box-body">

<?php

    $des = addslashes($_POST['deskripsi']);

        $input  = mysqli_query($koneksi, "UPDATE tbl_faq SET
                    judul           = '$_POST[judul]',
                    deskripsi       = '$des'
                    WHERE id_faq    = '$_POST[id]'
                    ")  or die (mysqli_error($koneksi));

    if (isset($input)) { ?>
      <div class="callout callout-success">
        <p>Data FAQ berhasil diedit <span class="fa fa-check"></span></p> 
        <?php echo "<meta http-equiv='refresh' content='1;
        url=?tampil=faq'>"; ?>
      </div>
    <?php } ?>

        </div>
      </div>
    </div>
  </div>
</section>
