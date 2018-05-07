<div class="container-fluid">
    
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info alert-dismissible">
                ketika melakukan perubahan PIN, Aplikasi akan <b>LOGOUT OTOMATIS</b>. untuk masuk kembali, cukup melakukan <b>LOGIN</b> kembali
            </div>
        </div>  
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Ganti PIN</h3>

                </div>
                <!-- /.card-header -->                     
                <div class="card-body">
                    <form action="?page=gantipinpro" method="post" name="tambah" enctype="multipart/form-data" class="form-horizontal">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" name="pin_lama" placeholder="PIN Lama" maxlength="6" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" name="pin_baru" placeholder="PIN Baru" maxlength="6" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" name="pin_baruk" placeholder="Konfirmasi PIN Baru" maxlength="6" required>
                        </div>
                </div>
                <div class="card-footer text-center">
                  <button type="password" class="btn btn-primary btn-sm" name="tambah">Edit</button>
                </div>
                    </form>
            </div>
            <div class="card">
                <a href="?page=home" class="btn btn-success">Back</a>
            </div>
        </div>
    </div>
</div>
