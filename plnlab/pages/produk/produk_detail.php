<?php 

$id_cat  = $_GET['id_cat'];
$id_sub  = $_GET['id_sub'];
$id_pro  = $_GET['id_pro'];

$tanggal = date('Y-m-d');
$jam     = date('H-i-s');

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Location and Time</h3>

                </div>
                <!-- /.card-header -->                     
                <div class="card-body">
                    <form action="?page=produk_detailorder" method="post" name="tambah" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group">
                            <input type="hidden" name="id_cat" value="<?= $id_cat ?>">
                            <input type="hidden" name="id_sub" value="<?= $id_sub ?>">
                            <input type="hidden" name="id_pro" value="<?= $id_pro ?>">
                            <label for="exampleInputEmail1"><i class="fa fa-map-marker"></i> Lokasi</label>
                            <textarea class="form-control" name="lokasi" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><i class="fa fa-thumb-tack"></i> Catatan</label>
                            <textarea class="form-control" name="catatan" rows="3" required></textarea>
                        </div>
                </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control" name="tanggal" value="<?= $tanggal ?>" readonly>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" value="<?= $jam ?>" name="jam" readonly>
                                </div>
                        </div>
                    </div>
                        
                </div>
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-info btn-sm" name="tambah">NEXT</button>
                </div>
                    </form>
            </div>
        </div>
    </div>
</div>
