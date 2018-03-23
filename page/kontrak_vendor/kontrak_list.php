<?php 
function isivendors($id){
  include 'lib/koneksi.php';
  $no=1;
  $tipe = mysqli_query($koneksi,"SELECT type, type_varian, count(type) AS jumlah FROM report_vendor
                                JOIN kontrak ON report_vendor.id_kontrak=kontrak.id_kontrak
                                JOIN varian_kontrak ON report_vendor.id_varkontrak=varian_kontrak.id_varkontrak
                                WHERE report_vendor.id_vendor='$id'
                                GROUP BY type")
  or die(mysqli_error($koneksi));
  while($dtipe = mysqli_fetch_array($tipe)) {
    $a = $dtipe['jumlah']; $b = $a/12; $c = round($b*100,2);
  echo "<tr>";
  echo "<td>$no</td>";
  echo "<td>$dtipe[type]</td>";
  echo "<td>$dtipe[type_varian]</td>";
  echo "<td>";
  echo "<div class='progress progress-xs progress-striped active'>";
  echo "<div class='progress-bar progress-bar-primary' style='width:$c%'></div>";
  echo "</div>";
  echo "</td>";
  echo "<td><span class='badge bg-light-blue'>".$c."%"."</span>"." ";
  echo "<span class='badge bg-red'>$dtipe[jumlah]"."/12 Bulan"."</span>";
  echo "</td>";
  echo "</tr>";
  $no++;
}}
?>

<section class="content">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="box box-warning"> <!-- box primary -->
        <div class="box-header with-border">
          <h3 class="box-title"><b>Kontrak</b> | List</h3>
          <div class="box-tools pull-right">
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
                <th>JENIS</th>
                <th>NAMA KONTRAK</th>
                <th>VENDOR</th>
                <th>AKSI</th>
              </tr>
              </thead>
              <tbody>

                <?php

                    $no = 1;
                      $sql = mysqli_query($koneksi, "SELECT * FROM varian_kontrak
                                          JOIN kontrak ON varian_kontrak.id_kontrak=kontrak.id_kontrak
                                          JOIN master_vendor ON varian_kontrak.id_vendor=master_vendor.id_vendor
                                          ORDER BY id_varkontrak")
                      or die(mysqli_error($koneksi));

                      while($data = mysqli_fetch_array($sql)){
                    
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['type']; ?></td>
                    <td><?php echo $data['type_varian']; ?></td>
                    <td><i class="fa fa-code-fork"></i> <?php echo $data['nama_perusahaan']; ?></td>
                    <td>
                      <a href="?tampil=kontrak_edit&id=<?php echo $data['id_varkontrak']; ?>" class="btn btn-primary btn-xs" title="edit">
                              <span class="fa fa-edit" aria-hidden="true"></span></a>
                      <a href="javascript:;" data-id="<?php echo $data['id_varkontrak'] ?>" data-toggle="modal" data-target="#karyawan_hapus"
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

        </div>
      </div>
    </div>
    
    <!-- Modal Tambah Data -->
    <div id="modal_tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">
                <i class="fa fa-edit"></i> 
                Input Data Kontrak
            </h4>
            </div>

            <div class="modal-body">
            <form action="?tampil=karyawan_tambahpro" method="POST" name="modal_popup" enctype="multipart/form-data"
            class="form-horizontal">
              
                <div class="form-group">
                  <label class="label-control col-md-3">JENIS</label>
                  <div class="col-md-4">
                    <select class="form-control" name="bulan">
                      <option value="">-- pilih salah satu --</option>
                      <?php
                      $kontrak = mysqli_query($koneksi, "SELECT * FROM kontrak ORDER BY id_kontrak ASC");
                      while ($rowkon = mysqli_fetch_array($kontrak)){
                        echo "<option value=$rowkon[id_kontrak]>$rowkon[type]</option> \n";
                      }
                      ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="label-control col-md-3">NAMA KONTRAK</label>
                  <div class="col-md-8">
                    <textarea class="form-control" name="nama_kontrak" rows="3" placeholder="ex: HC Online"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label-control col-md-3">CONTACT</label>
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon">+628</span>
                      <input type="text" class="form-control" name="contact" data-inputmask='"mask": "99-9999-9999"' data-mask required>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="label-control col-md-3">IMAGE</label>
                    <div class="col-md-6">
                      <input type="file" name="img" class="form-control">
                    </div>
                  <code>.Maks 1 MB</code>
                </div>

                <div class="form-group">
                  <label class="label-control col-md-3"></label>
                    <div class="col-md-9">
                      <code>Silakan upload gambar dengan ekstensi .jpeg/.jpg/.png/.gif</code>
                    </div>
                </div>

                <div class="panel panel-primary">
                  <div class="panel-heading"> <span class="glyphicon glyphicon-lock"></span> Data Akun</div>
                </div>

                <div class="form-group">
                  <label class="label-control col-md-3">USERNAME</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="username" maxlength="10" placeholder="ex : Garuda (max 10 karakter)" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="label-control col-md-3">PASSWORD</label>
                  <div class="col-md-6">
                    <input type="password" class="form-control" name="passwd" maxlength="6" placeholder="ex : grdind (max 6 karakter)" required/>
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


  </div>  
  <div class="row"> <!-- row -->
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="box box-primary"> <!-- box primary -->
        <div class="box-header with-border">
          <h3 class="box-title"><b>Kontrak</b> Vendor</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body"> <!-- box body -->
          <div class="box-group" id="accordion">
            <?php 
            $no=1;
            $a=0;
            $nil = array("danger","success","primary","warning","info");
            $jumlah = count($nil);
            $vend = mysqli_query($koneksi, "SELECT * FROM report_vendor
                                            JOIN master_vendor ON report_vendor.id_vendor=master_vendor.id_vendor
                                            GROUP BY report_vendor.id_vendor ASC");
            while ($dvend = mysqli_fetch_array($vend)) {
            ?>
              
              <div class="panel box box-<?php if ($a < $jumlah){ echo $nil[$a]; } else { $a=0; echo $nil[$a]; } ?>">
                <div class="box-header with-border">
                  <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $no ?>">
                      <button class="btn btn-primary btn-xs"><?= $no ?></button>
                      <i class="fa fa-code-fork"></i> <?= $dvend['nama_perusahaan'] ?>
                    </a>
                  </h4>
                </div>
                <div id="collapse<?= $no ?>" class="panel-collapse collapse <?php if ($no == 1){ echo "in"; } ?>">
                  <div class="box-body">
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Jenis</th>
                          <th>Nama</th>
                          <th>Progress</th>
                          <th>Label</th>
                          <?php 
                          $id = $dvend['id_vendor']; 
                          isivendors($id);
                          ?>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            <?php $no++; $a++; } ?>
          </div>
        </div> <!-- box body -->
      </div>  <!-- box primary -->
    </div>  
  </div> <!-- row -->
</section>  