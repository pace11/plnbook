<section class="content">
<div class="row">

<div class="col-xs-12">
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title"><b>PESAN Global</b> | List</h3>
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
          <th>JUDUL</th>
          <th>DESKRPISI</th>
          <th>TANGGAL</th>
        </tr>
        </thead>
        <tbody>

          <?php

              $no = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM tbl_pesan WHERE have=0") or die(mysqli_error($koneksi));

                while($data = mysqli_fetch_array($sql)){
               
          ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $data['judul']; ?></td>
              <td><?php echo $data['deskripsi']; ?></td>
              <td><?php echo $data['tgl_pesan']; ?></td>
              <td>
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
                Input data Pesan
            </h4>
            </div>

            <?php
    
                include "lib/koneksi.php";
                $carikode = mysqli_query($koneksi, "SELECT id_pesan FROM tbl_pesan") or die (mysqli_error($koneksi));
                $datakode = mysqli_fetch_array($carikode);
                $jumlah_data = mysqli_num_rows($carikode);
                    if ($datakode) {
                        $nilaikode = substr($jumlah_data[0], 1);
                        $kode = (int) $nilaikode;
                        $kode = $jumlah_data + 1;
                        $kode_otomatis = "PESAN".str_pad($kode, 3, "0", STR_PAD_LEFT);
                    } else {
                        $kode_otomatis = "PESAN001";
                    }

            ?>

            <div class="modal-body">
            <form action="?tampil=pesan_tambahpro" method="POST" name="modal_popup" enctype="multipart/form-data"
            class="form-horizontal">
                
                <input type="hidden" name="id" value="<?= $kode_otomatis ?>">
                <div class="form-group">
                  <label class="label-control col-md-3">JUDUL</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="judul" placeholder="ex : judul pesan ..." required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="label-control col-md-3">DESKRIPSI</label>
                  <div class="col-md-8">
                    <textarea class="form-control" name="deskripsi" placeholder="ex : isi pesan ..." rows="5" required></textarea>
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
    <div id="faq_hapus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                <a href="javascript:;" class="btn btn-info" id="hapus-faq"><i class="glyphicon glyphicon-ok"></i> Ya</a>
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
