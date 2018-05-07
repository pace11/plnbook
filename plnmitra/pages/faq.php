<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">FAQ</h3>
              </div>
              <div class="card-body">
                <div id="accordion">
                
                <?php
                $no=1;
                $sql = mysqli_query($koneksi, "SELECT * FROM tbl_faq");
                while ($tampil = mysqli_fetch_array($sql)) {
                ?>
                <div class="card card-primary">
                    <div class="card-header">
                      <h4 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $no ?>">
                          <?= $tampil['judul']; ?>
                        </a>
                      </h4>
                    </div>
                    <div id="collapse<?= $no ?>" class="panel-collapse collapse in">
                      <div class="card-body">
                        <?= $tampil['deskripsi']; ?>
                      </div>
                    </div>
                  </div>
                <?php $no++; } ?>  
                </div>
              </div>
            </div>
        </div>
    </div>
</div>















            