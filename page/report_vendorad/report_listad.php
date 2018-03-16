<section class="content">  
  <div class="row"> <!-- row -->
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="box box-success"> <!-- box primary -->
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
            $vend = mysqli_query($koneksi, "SELECT * FROM master_vendor");
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
                    <table class="table table-bordered">
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Jenis</th>
                        <th>Nama</th>
                        <th>Progress</th>
                        <th>Label</th>
                        <?php 
                        $id = $dvend['id_vendor']; 
                        isivendor($id);
                        ?>
                      </tr>
                    </table>
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