<?php

  $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_category WHERE id_category='$_GET[id]'")
            or die (mysqli_error($koneksi));
  $data   = mysqli_fetch_array($tampil);
 ?>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-info alert-dismissible">
            <i class="fa fa-flash"></i> <b>PLN</b> LAB | Help
        </div>
    </div>  
</div>

<div class="card">
    <div class="card-body login-card-body">

      <form action="?page=help_detailpro" method="post" name="tambah" enctype="multipart/form-data" class="form-horizontal">

        <div class="input-group mb-3">
            <input type="hidden" name="id" value="<?= $data['id_category'] ?>">
            <a class="btn btn-primary"><?= $data['nama'] ?></a>
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">What can i do for you ?</label>
            <textarea class="form-control" name="isi" rows="5"></textarea>
        </div>

        <div class="social-auth-links text-center mb-3">
            <div class="col-xs-12">
            <button type="Submit" name="tambah" class="btn btn-block btn-primary">
                    <span class="glyphicon glyphicon-plus-sign"></span>SUBMIT</button>
            <a href="?page=help" class="btn btn-block btn-success">Back</a>
            </div>
        </div>

    </form>
      
    </div>
  </div>