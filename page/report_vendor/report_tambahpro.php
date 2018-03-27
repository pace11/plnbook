<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          <h3 class="box-title"><b>Report</b> | Tambah</h3>
      </div>

        <div class="box-body">

          <?php
            if (isset($_POST['simpan'])){

              $link = addslashes($_POST['link']);
            
                $input  = mysqli_query($koneksi, "INSERT INTO report_vendor SET
                        id_vendor         = '$_POST[id]',
                        id_kontrak        = '$_POST[kontrak]',
                        id_varkontrak     = '$_POST[varian]',
                        tahun             = '$_POST[tahun]',
                        id_bulan          = '$_POST[bulan]',
                        link_report       = '$link',
                        sla               = '$_POST[sla]',
                        performance       = '$_POST[perform]'
                        ")  or die (mysqli_error($koneksi));
              
              if ($input){ ?>
                <div class="callout callout-success">
                  <p>Data report berhasil ditambahkan <span class="fa fa-check"></span></p> 
                  <?php echo "<meta http-equiv='refresh' content='1;
                  url=?tampil=report_vendor'>"; ?>
                </div>
            <?php } } ?>
        </div>
      </div>
    </div>
  </div>
</section>
