<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          <h3 class="box-title"><b>Karyawan</b> | Tambah</h3>
      </div>

        <div class="box-body">

          <?php
            if (isset($_POST['simpan'])){
            
            $status   = 1;
            $nama_img = $_FILES['img']['name'];
            $loc_img  = $_FILES['img']['tmp_name'];
            $type_img = $_FILES['img']['type'];

            $cek         = array('png','jpg','jpeg','gif');
            $x           = explode('.',$nama_img);
            $extension   = strtolower(end($x));
            $size_img  = $_FILES['img']['size'];

            if (in_array($extension, $cek) === TRUE){
              if ($size_img < 20000024){

                move_uploaded_file($loc_img,"../data/img/mitrapln/$nama_img");
                
                $input  = mysqli_query($koneksi, "INSERT INTO tbl_mitrapln SET
                        id_mitrapln       = '$_POST[id]',
                        full_name         = '$_POST[nama_lengkap]',
                        email             = '$_POST[email]',
                        handphone         = '$_POST[handphone]',
                        pin               = '$_POST[pin]',
                        img               = '$nama_img',
                        status            = '$status' 
                        ")  or die (mysqli_error($koneksi));

            if ($input){ ?>
                <div class="callout callout-success">
                  <p>Data MITRA PLN berhasil disimpan <span class="fa fa-check"></span></p> 
                  <?php echo "<meta http-equiv='refresh' content='1;
                  url=?tampil=mitrapln'>"; ?>
                </div>
            <?php } 
            } else { ?>
            <div class="callout callout-danger">
              <p>Ukuran file kebesaran <span class="fa fa-remove"></span>,
              <a href="?tampil=mitrapln">Upload Ulang</a></p> 
            </div>
            <?php }} else { ?>
            <div class="callout callout-danger">
              <p>Ekstensi file tidak sesuai <span class="fa fa-remove"></span>, 
              <a href="?tampil=mitrapln">Upload Ulang</a></p>
            </div>
            <?php }} ?>
        </div>
      </div>
    </div>
  </div>
</section>
