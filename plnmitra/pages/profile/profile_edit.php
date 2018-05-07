<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Edit Profile</h3>

                </div>
                <!-- /.card-header -->                     
                <div class="card-body">
                    <form action="?page=profile_editpro" method="post" name="tambah" enctype="multipart/form-data" class="form-horizontal">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <input type="text" class="form-control" name="nama" value="<?= $nama ?>">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input type="text" class="form-control" name="email" value="<?= $email ?>">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control" name="handphone" value="<?= $handphone ?>">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-pencil"></i></span>
                            </div>
                            <input type="text" class="form-control" name="bio" value="<?= $bio ?>">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-image"></i></span>
                            </div>
                            <input type="file" class="form-control" name="pace">
                        </div>
                </div>
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-primary btn-sm" name="tambah">Edit</button>
                </div>
                    </form>
            </div>
            <div class="card">
                <a href="?page=profile" class="btn btn-success">Back</a>
            </div>
        </div>
    </div>
</div>
