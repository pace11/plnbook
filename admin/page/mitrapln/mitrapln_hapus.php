<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          <h3 class="box-title"><b>MITRA PLN</b> | Hapus</h3>
      </div>

        <div class="box-body">
          <div class="callout callout-success">

        <?php

              // querry untuk melakukan delete
              $input  = mysqli_query($koneksi, "UPDATE tbl_mitrapln SET status=0 WHERE id_mitrapln='$_GET[id]'")
                                      or die (mysqli_error($koneksi));

            if ($input){
              echo"Data MITRA PLN berhasil dihapus";
              echo"<meta http-equiv='refresh' content='1;
              url=?tampil=mitrapln'>";
            }
        ?>

 <span class="glyphicon glyphicon-ok"></span>
    </div>
    </div>
  </div>
</div>
</div>
</section>
