<?php

  $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_category WHERE id_category='$_GET[id]'")
            or die (mysqli_error($koneksi));
  $data   = mysqli_fetch_array($tampil);
 ?>

<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header with-border">
          <h3 class="box-title"><b>Kategori </b> | Edit</h3>
      </div>

        <div class="box-body">

          <form name="tambah" action="?tampil=kategori_editpro" method="post" enctype="multipart/form-data"
          class="form-horizontal">

          <div class="col-md-6">

            <div class="form-group">
              <label class="label-control col-md-4">ID KATEGORI</label>
              <div class="col-md-8">
                <input type="hidden" name="id" value="<?= $data['id_category'] ?>">
                <a class="btn btn-primary btn-sm btn-flat"><?= $data['id_category'] ?></a>
              </div>
            </div>

            <div class="form-group">
              <label class="label-control col-md-4">NAMA KATEGORI</label>
              <div class="col-md-8">
                <input value="<?= $data['nama']; ?>" type="text" name="nama" class="form-control" required>
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
                <a href="?tampil=kategori" class="btn btn-danger"><span class="fa fa-remove"></span> Tutup</a>
              </div>
            </div>
          </div>

          </form>

        </div>
    </div>
  </div>


</div>
</section>
