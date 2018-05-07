<section class="content">
<div class="row">

<div class="col-xs-12">
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title"><b>MITRA PLN</b> | Data</h3>
      <div class="pull-right">
        <a class="btn btn-danger" href="#" data-target="#modal_tambah" data-toggle="modal">
          <span class="fa fa-plus-circle"></span> Tambah Data
        </a>
      </div>
    </div>

    <div class="box-body">
      <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>NO</th>
          <th>#</th>
          <th>ID</th>
          <th>NAMA LENGKAP</th>
          <th>EMAIL</th>
          <th>HANDPHONE</th>
          <th>AKSI</th>
        </tr>
        </thead>
        <tbody>

          <?php

              $no = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM tbl_mitrapln WHERE status=1")
                or die(mysqli_error($koneksi));

                while($data = mysqli_fetch_array($sql)){
               
          ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><img src="../data/img/mitrapln/<?php echo $data['img']; ?>" width="100"></td>
              <td><a class="btn btn-success btn-xs"><?php echo $data['id_mitrapln'];?></a></td>
              <td><?php echo $data['full_name']; ?></td>
              <td><?php echo $data['email']; ?></td>
              <td><?php echo $data['handphone']; ?></td> 
              <td>
                <a href="?tampil=mitrapln_edit&id=<?php echo $data['id_mitrapln']; ?>" class="btn btn-primary btn-xs" title="edit">
                        <span class="fa fa-edit" aria-hidden="true"></span></a>
                <a href="javascript:;" data-id="<?php echo $data['id_mitrapln'] ?>" data-toggle="modal" data-target="#mitrapln_hapus"
                        class="btn btn-danger btn-xs" title="hapus">
                        <span class="fa fa-trash" aria-hidden="true"></span></a>
              </td>
            </tr>

            <?php
              $no++;
            }
            ?>

        </tbody>
      </table>
    </div>

    <!-- Modal Tambah Data -->
    <div id="modal_tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">
                <i class="fa fa-edit"></i> 
                Input data vendor
            </h4>
            </div>

            <?php
    
                include "lib/koneksi.php";
                $carikode = mysqli_query($koneksi, "SELECT id_mitrapln FROM tbl_mitrapln") or die (mysqli_error($koneksi));
                $datakode = mysqli_fetch_array($carikode);
                $jumlah_data = mysqli_num_rows($carikode);
                    if ($datakode) {
                        $nilaikode = substr($jumlah_data[0], 1);
                        $kode = (int) $nilaikode;
                        $kode = $jumlah_data + 1;
                        $kode_otomatis = "MITRAPLN".str_pad($kode, 3, "0", STR_PAD_LEFT);
                    } else {
                        $kode_otomatis = "MITRAPLN001";
                    }

            ?>

            <div class="modal-body">
            <form action="?tampil=mitrapln_tambahpro" method="POST" name="modal_popup" enctype="multipart/form-data"
            class="form-horizontal">

              <input type="hidden" value="<?= $kode_otomatis ?>" name="id">
                <div class="form-group">
                  <label class="label-control col-md-3">NAMA LENGKAP</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="nama_lengkap" placeholder="ex : Pln Disjaya" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="label-control col-md-3">EMAIL</label>
                  <div class="col-md-6">
                    <input type="email" class="form-control" name="email" placeholder="ex : pln@disjaya.com" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="label-control col-md-3">HANDPHONE</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="handphone" placeholder="ex : 082248080870" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="label-control col-md-3">PIN</label>
                  <div class="col-md-3">
                    <input type="password" class="form-control" name="pin" placeholder="ex : plndis11" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="label-control col-md-3">IMAGE</label>
                    <div class="col-md-6">
                      <input type="file" name="img" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                <div class="pull-left">
                  <code>* semua form wajib diisi</code>  
                </div>
                <div class="pull-right">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                  <button type="reset" class="btn btn-danger btn-reset" data-dismiss="modal" aria-hidden="true">Batal</button>
                  </div>
                </div>
                

            </form>
            </div>
        </div>
        </div>
    </div>

    <!-- modal Hapus-->
    <div id="mitrapln_hapus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">

          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"> <span class="glyphicon glyphicon-exclamation-sign"></span> Konfirmasi</h4>
          </div>
          <div class="modal-body">
              Apakah Anda yakin ingin menghapus data ini ?
          </div>
          <div class="modal-footer">
              <a href="javascript:;" class="btn btn-info" id="hapus-mitrapln"><i class="glyphicon glyphicon-ok"></i> Ya</a>
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Tidak</button>
          </div>

          </div>
      </div>
    </div>

  </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>
<script src="lib/konfirmasi.js"></script>
