<section class="content">
<div class="row">

<div class="col-xs-12">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title"><b>Kemampuan</b> | List</h3>
      <div class="pull-right">
        <a class="btn btn-warning" href="#" data-target="#modal_tambah" data-toggle="modal">
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
          <th>PRODUK</th>
          <th>MITRA</th>
          <th>NAMA</th>
          <th>AKSI</th>
        </tr>
        </thead>
        <tbody>

          <?php

              $no = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM tbl_kemampuan
                                               JOIN tbl_produk ON tbl_kemampuan.id_produk=tbl_produk.id_produk
                                               JOIN tbl_mitrapln ON tbl_kemampuan.id_mitrapln=tbl_mitrapln.id_mitrapln
                                               WHERE tbl_kemampuan.status=1") or die(mysqli_error($koneksi));
                while($data = mysqli_fetch_array($sql)){
               
          ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $data['nama_produk']; ?> <a class="btn btn-primary btn-xs"><?php echo $data['id_produk'] ?></a></td>
              <td><?php echo $data['full_name']; ?> <a class="btn btn-primary btn-xs"><?php echo $data['id_mitrapln'] ?></a></td>
              <td><?php echo $data['nama_kemampuan']; ?></td>
              <td>
                <a href="?tampil=kemampuan_edit&id=<?php echo $data['id_kemampuan']; ?>" class="btn btn-primary btn-xs" title="edit">
                        <span class="fa fa-edit" aria-hidden="true"></span></a>
                <a href="javascript:;" data-id="<?php echo $data['id_kemampuan'] ?>" data-toggle="modal" data-target="#kemampuan_hapus"
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
                Input data Kemampuan
            </h4>
            </div>

            <?php
    
                include "lib/koneksi.php";
                $carikode = mysqli_query($koneksi, "SELECT id_kemampuan FROM tbl_kemampuan") or die (mysqli_error($koneksi));
                $datakode = mysqli_fetch_array($carikode);
                $jumlah_data = mysqli_num_rows($carikode);
                    if ($datakode) {
                        $nilaikode = substr($jumlah_data[0], 1);
                        $kode = (int) $nilaikode;
                        $kode = $jumlah_data + 1;
                        $kode_otomatis = "SKILL".str_pad($kode, 3, "0", STR_PAD_LEFT);
                    } else {
                        $kode_otomatis = "SKILL001";
                    }

            ?>

            <div class="modal-body">
            <form action="?tampil=kemampuan_tambahpro" method="POST" name="modal_popup" enctype="multipart/form-data"
            class="form-horizontal">
                
                <div class="form-group">
                  <label class="label-control col-md-3">ID KEMAMPUAN</label>
                  <div class="col-md-8">
                    <input type="hidden" name="id" value="<?= $kode_otomatis ?>">
                    <a class="btn btn-primary btn-sm btn-flat"><?= $kode_otomatis ?></a>
                  </div>
                </div>

                <div class="form-group">
                  <label class="label-control col-md-3">ID PRODUK</label>
                  <div class="col-md-8">
                    <select class="form-control" name="id_produk">
                      <option value="">-- pilih salah satu --</option>
                      <?php
                      $vend = mysqli_query($koneksi, "SELECT * FROM tbl_produk ORDER BY id_produk ASC");
                      while ($rowvend = mysqli_fetch_array($vend)){
                        echo "<option value=$rowvend[id_produk]>$rowvend[id_produk]-$rowvend[nama_produk]</option> \n";
                      }
                      ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="label-control col-md-3">ID MITRA PLN</label>
                  <div class="col-md-8">
                    <select class="form-control" name="id_mitra">
                      <option value="">-- pilih salah satu --</option>
                      <?php
                      $vend = mysqli_query($koneksi, "SELECT * FROM tbl_mitrapln ORDER BY id_mitrapln ASC");
                      while ($rowvend = mysqli_fetch_array($vend)){
                        echo "<option value=$rowvend[id_mitrapln]>$rowvend[id_mitrapln]-$rowvend[full_name]</option> \n";
                      }
                      ?>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="label-control col-md-3">NAMA KEMAMPUAN</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="nama_kemampuan" placeholder="ex : Pemasangan KWH ..." required/>
                  </div>
                </div>

                <div class="modal-footer">
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
    <div id="kategori_hapus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                <a href="javascript:;" class="btn btn-info" id="hapus-kategori"><i class="glyphicon glyphicon-ok"></i> Ya</a>
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
