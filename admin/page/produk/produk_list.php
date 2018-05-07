<section class="content">
<div class="row">

<div class="col-xs-12">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title"><b>Produk</b> | List</h3>
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
          <th>KATEGORI</th>
          <th>NAMA PRODUK</th>
          <th>DURASI</th>
          <th>BIAYA</th>
          <th>PERSENTASI</th>
          <th>AKSI</th>
        </tr>
        </thead>
        <tbody>

          <?php

              $no = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM tbl_produk
                                               JOIN tbl_category ON tbl_produk.id_category=tbl_category.id_category
                                               WHERE tbl_produk.status=1") or die(mysqli_error($koneksi));
                while($data = mysqli_fetch_array($sql)){
               
          ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $data['nama']; ?> <a class="btn btn-primary btn-xs"><?php echo $data['id_category'] ?></a></td>
              <td><?php echo $data['nama_produk']; ?></td>
              <td><?php echo $data['durasi']." Menit"; ?></td>
              <td><?php echo "Rp. ".$data['biaya']; ?></td>
              <td><?php echo $data['persentasi']."%"; ?></td>
              <td>
                <a href="?tampil=kategori_edit&id=<?php echo $data['id_category']; ?>" class="btn btn-primary btn-xs" title="edit">
                        <span class="fa fa-edit" aria-hidden="true"></span></a>
                <a href="javascript:;" data-id="<?php echo $data['id_category'] ?>" data-toggle="modal" data-target="#kategori_hapus"
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
                Input data Produk
            </h4>
            </div>

            <?php
    
                include "lib/koneksi.php";
                $carikode = mysqli_query($koneksi, "SELECT id_produk FROM tbl_produk") or die (mysqli_error($koneksi));
                $datakode = mysqli_fetch_array($carikode);
                $jumlah_data = mysqli_num_rows($carikode);
                    if ($datakode) {
                        $nilaikode = substr($jumlah_data[0], 1);
                        $kode = (int) $nilaikode;
                        $kode = $jumlah_data + 1;
                        $kode_otomatis = "PRODUK".str_pad($kode, 3, "0", STR_PAD_LEFT);
                    } else {
                        $kode_otomatis = "PRODUK001";
                    }

            ?>

            <div class="modal-body">
            <form action="?tampil=produk_tambahpro" method="POST" name="modal_popup" enctype="multipart/form-data"
            class="form-horizontal">
                
                <div class="form-group">
                  <label class="label-control col-md-3">ID PRODUK</label>
                  <div class="col-md-8">
                    <input type="hidden" name="id" value="<?= $kode_otomatis ?>">
                    <a class="btn btn-primary btn-sm btn-flat"><?= $kode_otomatis ?></a>
                  </div>
                </div>

                <div class="form-group">
                  <label class="label-control col-md-3">ID CATEGORY</label>
                  <div class="col-md-8">
                    <select class="form-control" name="id_category">
                      <option value="">-- pilih salah satu --</option>
                      <?php
                      $vend = mysqli_query($koneksi, "SELECT * FROM tbl_category ORDER BY id_category ASC");
                      while ($rowvend = mysqli_fetch_array($vend)){
                        echo "<option value=$rowvend[id_category]>$rowvend[id_category]-$rowvend[nama]</option> \n";
                      }
                      ?>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="label-control col-md-3">NAMA KATEGORI</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="nama" placeholder="ex : Pemasangan KWH ..." required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="label-control col-md-3">DURASI</label>
                  <div class="col-md-4">
                    <input type="text" class="form-control" name="durasi" placeholder="ex : 120 " required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="label-control col-md-3">BIAYA</label>
                  <div class="col-md-4">
                    <input type="text" class="form-control" name="biaya" placeholder="ex : 200000 " required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="label-control col-md-3">PERSENTASI</label>
                  <div class="col-md-4">
                    <input type="text" class="form-control" name="persentasi" placeholder="ex : 20 " required/>
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
