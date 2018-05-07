<?php

  $sql = mysqli_query($koneksi, "SELECT * FROM tbl_pesanperson WHERE id_mitrapln='$id' AND view=0");
  $jum = mysqli_num_rows($sql);

?>

<!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="fa fa-flash"></span>
      <span class="brand-text font-weight-light"><b>PLN</b> MITRA</span>
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
            <a href="?page=home" class="nav-link <?php if ($_GET['page'] == 'home') echo "active"; ?>">
                <i class="fa fa-home"></i>
                <p>Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=profile" class="nav-link <?php if ($_GET['page'] == 'profile') echo "active"; ?>">
                <i class="fa fa-user"></i>
                <p>Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=booking" class="nav-link <?php if ($_GET['page'] == 'booking') echo "active"; ?>">
                <i class="fa fa-check-square"></i>
                <p>Booking</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=pesan" class="nav-link <?php if ($_GET['page'] == 'pesan') echo "active"; ?>">
                <i class="fa fa-envelope"></i>
                <p>Pesan <?php if ($jum >0){ echo "<span class='right badge badge-danger'>$jum</span>"; } ?></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=dompet" class="nav-link <?php if ($_GET['page'] == 'dompet') echo "active"; ?>">
                <i class="fa fa-briefcase"></i>
                <p>Dompet</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=faq" class="nav-link <?php if ($_GET['page'] == 'faq') echo "active"; ?>">
                <i class="fa fa-commenting"></i>
                <p>FAQ</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=gantipin" class="nav-link <?php if ($_GET['page'] == 'gantipin') echo "active"; ?>">
                <i class="fa fa-lock"></i>
                <p>Ganti PIN</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=logout" class="btn btn-danger">
            Logout
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->