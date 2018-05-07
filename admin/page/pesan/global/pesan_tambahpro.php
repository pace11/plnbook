<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          <h3 class="box-title"><b>PESAN</b> | Tambah</h3>
      </div>

        <div class="box-body">

          <?php
            if (isset($_POST['simpan'])) {
              
              $id     = $_POST['id'];
              $des    = addslashes($_POST['deskripsi']);
              $date   = date('Y-m-d'); 
              $status = 1;
              $have   = 0;

                $input  = mysqli_query($koneksi, "INSERT INTO tbl_pesan SET
                        id_pesan        = '$id',
                        judul           = '$_POST[judul]',
                        deskripsi       = '$des',
                        have            = '$have',
                        tgl_pesan       = '$date' 
                        ")  or die (mysqli_error($koneksi));

            if ($input){ ?>
                <div class="callout callout-success">
                  <p>Data PESAN berhasil disimpan <span class="fa fa-check"></span></p> 
                  <?php echo "<meta http-equiv='refresh' content='1;
                  url=?tampil=pesan'>"; ?>
                </div>
            <?php }} ?>
        </div>
      </div>
    </div>
  </div>
</section>
