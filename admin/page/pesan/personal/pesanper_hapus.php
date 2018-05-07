<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          <h3 class="box-title"><b>FAQ</b> | Hapus</h3>
      </div>

        <div class="box-body">
          <div class="callout callout-success">

        <?php

              // querry untuk melakukan delete
              $input  = mysqli_query($koneksi, "UPDATE tbl_faq SET status=0 WHERE id_faq='$_GET[id]'")
                                      or die (mysqli_error($koneksi));

            if ($input){
              echo"Data FAQ berhasil dihapus";
              echo"<meta http-equiv='refresh' content='1;
              url=?tampil=faq'>";
            }
        ?>

 <span class="glyphicon glyphicon-ok"></span>
    </div>
    </div>
  </div>
</div>
</div>
</section>
