<?php

  $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_mitrapln WHERE id_mitrapln='$_GET[id]'")
            or die (mysqli_error($koneksi));
  $data   = mysqli_fetch_array($tampil);
 ?>

<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header with-border">
          <h3 class="box-title"><b>MITRA PLN</b> | Edit</h3>
      </div>

        <div class="box-body">

          <form name="tambah" action="?tampil=vendor_editpro" method="post" enctype="multipart/form-data"
          class="form-horizontal">

          <div class="col-md-6">

            <div class="form-group">
            <label class="label-control col-md-4">ID MITRA</label>
              <div class="col-md-4">
                <input type="hidden" name="id" value="<?= $data['id_mitrapln'] ?>">
                <a class="btn btn-primary btn-flat"><?= $data['id_mitrapln'] ?></a>
              </div>
            </div>

            <div class="form-group">
              <label class="label-control col-md-4">NAMA LENGKAP</label>
              <div class="col-md-8">
                <input value="<?= $data['full_name']; ?>" type="fullname" name="nama_perusahaan" class="form-control" required>
              </div>
            </div>

            <div class="form-group">
              <label class="label-control col-md-4">EMAIL</label>
              <div class="col-md-8">
                <input value="<?= $data['email']; ?>" type="text" name="email" class="form-control" required>
              </div>
            </div>

            <div class="form-group">
              <label class="label-control col-md-4">HANDPHONE</label>
              <div class="col-md-8">
                <input value="<?= $data['handphone']; ?>" type="text" name="email" class="form-control" required>
              </div>
            </div>

            <div class="form-group">
              <label class="label-control col-md-4">IMAGE</label>
                <div class="col-md-6">
                  <img src="../data/img/mitrapln/<?= $data['img']; ?>" width="100"><br><br>
                  <input type="file" name="img" class="form-control">
                </div>
            </div>

          </div>
        </div>

          <div class="box-footer">
            <div class="form-group">
              <label class="col-md-2"></label>
              <div class="col-md-4">
                <button type="Submit" name="tambah" class="btn btn-primary">
                  <span class="fa fa-edit"></span> Edit</button>
                <a href="?tampil=mitrapln" class="btn btn-danger"><span class="fa fa-remove"></span> Tutup</a>
              </div>
            </div>
          </div>

          </form>

        </div>
    </div>
  </div>


</div>
</section>
