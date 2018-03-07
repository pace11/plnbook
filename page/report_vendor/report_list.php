<section class="content">  
    <div class="row">
      <div class="col-xs-12">
          
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><b>Chart Report</b> | <i class="fa fa-code-fork"></i> <?php echo $nama; ?></h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="chart">
              <canvas id="areaChart" style="height:250px"></canvas>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        
      </div>
    </div>

  <div class="row">
    
  <div class="col-xs-12">
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title"><b>Report</b> | Data</h3>
        <div class="pull-right">
          <a class="btn btn-success" href="#" data-target="#modal_tambah" data-toggle="modal">
            <span class="fa fa-plus-circle"></span> Tambah Data
          </a>

        </div>
      </div>

      <div class="box-body">
        <div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th rowspan="2">NO</th>
            <th rowspan="2">JENIS KONTRAK</th>
            <th rowspan="2">NAMA KONTRAK</th>
            <th colspan="2">PERIODE</th>
            <th rowspan="2">LINK REPORT</th>
            <th rowspan="2">PERFORMANCE</th>
          </tr>
          <tr>
            <th>TAHUN</th>
            <th>BULAN</th>
          </tr>
          </thead>
          <tbody>
            
          <?php

                $no = 1;

                  $sql = mysqli_query($koneksi, "SELECT * FROM report_vendor
                                                 JOIN kontrak ON report_vendor.id_kontrak=kontrak.id_kontrak
                                                 JOIN varian_kontrak ON report_vendor.id_varkontrak=varian_kontrak.id_varkontrak
                                                 JOIN bulan ON report_vendor.id_bulan=bulan.id_bulan
                                                 WHERE report_vendor.id_vendor='$id'")
                  or die(mysqli_error($koneksi));

                  while($data = mysqli_fetch_array($sql)){
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['type']; ?></td>
                    <td><?php echo $data['type_varian']; ?></td>
                    <td><?php echo $data['tahun']; ?></td>
                    <td><?php echo $data['nama_bulan']; ?></td>
                    <td><?php echo $data['link_report']; ?></td>
                    <td><?php echo $data['performance']."%"; ?></td>         
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
                  Input data report
              </h4>
              </div>

              <div class="modal-body">
              <form action="?tampil=report_tambahpro" method="POST" name="modal_popup" enctype="multipart/form-data"
              class="form-horizontal">
                  
                  <div class="form-group">
                    <label class="label-control col-md-3">ID</label>
                      <div class="col-md-4">
                        <input class="form-control" type="text" name="id" value="<?= $id ?>" readonly="readonly">
                      </div>
                  </div>

                  <div class="form-group">
                    <label class="label-control col-md-3">TAHUN</label>
                    <div class="col-md-4">
                      <select class="form-control" name="tahun">
                        <option>-- pilih salah satu --</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="label-control col-md-3">BULAN</label>
                    <div class="col-md-4">
                      <select class="form-control" name="bulan">
                        <option value="">-- pilih salah satu --</option>
                        <?php
                        $bulan = mysqli_query($koneksi, "SELECT * FROM bulan ORDER BY id_bulan ASC");
                        while ($rowbulan = mysqli_fetch_array($bulan)){
                          echo "<option value=$rowbulan[id_bulan]>$rowbulan[nama_bulan]</option> \n";
                        }
                        ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="label-control col-md-3">JENIS KONTRAK</label>
                    <div class="col-md-4">
                    <select class="form-control" name="kontrak" id="kontrak">
                      <option value="">-- jenis kontrak --</option>
                      <?php
                      $sql = mysqli_query($koneksi, "SELECT * FROM kontrak ORDER BY id_kontrak");
                      while ($row = mysqli_fetch_array($sql)){
                        echo "<option value=$row[id_kontrak]>$row[type]</option> \n";
                      }
                      ?>
                    </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="label-control col-md-3">NAMA KONTRAK</label>
                    <div class="col-md-4">
                    <select class="form-control" name="varian" id="varian">
                      <option>-- pilih salah satu --</option>
                    </select>
                    </div>
                  </div>

                  <div class="panel panel-primary">
                    <div class="panel-heading"> <span class="fa fa-file-text-o"></span> Data Report</div>
                  </div>

                  <div class="form-group">
                    <label class="label-control col-md-3">LINK REPORT</label>
                    <div class="col-md-8">
                      <textarea class="form-control" name="link" rows="3" required></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="label-control col-md-3">PERFORMANCE</label>
                    <div class="col-md-4">
                      <input class="form-control" type="text" name="perform" required>
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
      <div id="vendor_hapus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                  <a href="javascript:;" class="btn btn-info" id="hapus-vendor"><i class="glyphicon glyphicon-ok"></i> Ya</a>
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

  
<?php
  $bln = mysqli_query($koneksi, "SELECT * FROM bulan");
  $nil = mysqli_query($koneksi, "SELECT performance FROM report_vendor
                                 JOIN bulan ON report_vendor.id_bulan=bulan.id_bulan
                                 WHERE report_vendor.id_vendor='$id'");
?>
  <script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas)

    var areaChartData = {
      labels  : [<?php while($data=mysqli_fetch_array($bln)){echo "'".$data['nama_bulan']."',";}?>],
      datasets: [
        {
          label               : 'Digital Goods',
          fillColor           : '#dfdfdf',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [
            <?php while($dataa=mysqli_fetch_array($nil)){echo $dataa['performance'].",";} ?>]
        }
      ]
    }

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : true,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 2,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions)
    
  })
</script>

  