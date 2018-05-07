<?php

  $sql = mysqli_query($koneksi, "SELECT * FROM tbl_pesanperson WHERE id_mitrapln='$id' AND view=0");
  $jum = mysqli_num_rows($sql);

?>

<!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="fa fa-flash"></span>
      <span class="brand-text font-weight-light"><b>PLN</b> LAB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= $image ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $nama ?></a>
        </div>        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a class="nav-link">
              <p>Status <span class="right badge badge-success">ON</span></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=logout" class="btn btn-danger">
            Logout
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->