<?php


  $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_faq WHERE id_faq='$_GET[id]'")
            or die (mysqli_error($koneksi));
  $data   = mysqli_fetch_array($tampil);
 ?>

<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header with-border">
          <h3 class="box-title"><b>FAQ </b> | Edit</h3>
      </div>

        <div class="box-body">

          <form name="tambah" action="?tampil=faq_editpro" method="post" enctype="multipart/form-data"
          class="form-horizontal">

          <div class="col-md-6">

            <div class="form-group">
              <div class="col-md-4">
                <input value="<?= $data['id_faq']; ?>" type="hidden" name="id" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="label-control col-md-4">JUDUL</label>
              <div class="col-md-8">
                <input value="<?= $data['judul']; ?>" type="text" name="judul" class="form-control" required>
              </div>
            </div>

            <div class="form-group">
              <label class="label-control col-md-4">DESKRIPSI</label>
              <div class="col-md-8">
                <textarea class="form-control" name="deskripsi" rows="5" required><?= $data['deskripsi'] ?></textarea>
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
                <a href="?tampil=faq" class="btn btn-danger"><span class="fa fa-remove"></span> Tutup</a>
              </div>
            </div>
          </div>

          </form>

        </div>
    </div>
  </div>


</div>
</section>
