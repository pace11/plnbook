<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          <h3 class="box-title"><b>PESAN Personal</b> | Tambah</h3>
      </div>

        <div class="box-body">

          <?php
            if (isset($_POST['simpan'])) {

              $id       = $_POST['id'];
              $idmitra  = $_POST['mitrapln'];
              $des      = addslashes($_POST['deskripsi']);
              $date     = date('Y-m-d');
              $view     = 0;
              $have     = 1;

                $input  = mysqli_query($koneksi, "INSERT INTO tbl_pesan SET
                        id_pesan        = '$id',
                        judul           = '$_POST[judul]',
                        deskripsi       = '$des',
                        tgl_pesan       = '$date',
                        have            = '$have'
                        ")  or die (mysqli_error($koneksi));
                
                $input = mysqli_query($koneksi, "INSERT INTO tbl_pesanperson SET
                        id_pesan        = '$id',
                        id_mitrapln     = '$idmitra',
                        view            = '$view',
                        tgl_pesan       = '$date' 
                        ")  or die (mysqli_error($koneksi));

            if ($input){ ?>
                <div class="callout callout-success">
                  <p>Data PESAN PERSONAL berhasil disimpan <span class="fa fa-check"></span></p> 
                  <?php echo "<meta http-equiv='refresh' content='1;
                  url=?tampil=pesanper'>"; ?>
                </div>
            <?php }} ?>
        </div>
      </div>
    </div>
  </div>
</section>
