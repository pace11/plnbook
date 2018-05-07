<?php

// seleksi data login
$user = $_SESSION['username'];
$admin = mysqli_query($koneksi, "SELECT * FROM tbl_admin 
                                    JOIN role_login ON tbl_admin.id_role=role_login.id_role
                                    WHERE tbl_admin.username='$user'");
$arr = mysqli_fetch_array($admin);
$hit1 = mysqli_num_rows($admin);

if ($hit1 > 0){
    $data=$arr;
}

//--------------- path image, nama ---------------
if ($data['id_role'] == 1 ){
    $img = "data/img/karyawan/$data[img]";
    $id = $data['nip'];
    $nama = $data['nama_karyawan'];
    $email = $data['email'];
    $contact = $data['contact'];
    $user = $data['username'];
    $role = $data['id_role'];
    $status = "<a class='btn btn-default btn-xs'><i class='fa fa-user'></i> $data[status]</a>";
} 

?>
<ul class="nav navbar-nav">

    <li class="dropdown user user-menu">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $img; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Hey, <?php echo strtoupper($user); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $img; ?>" class="img-circle" alt="User Image">
                <p><?php echo $nama; ?></p>
                <p><?php echo $status; ?></p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="?tampil=profil" class="btn btn-default btn-flat">
                    <span class="fa fa-cog"></span> 
                    Profile</a>
                </div>
                <div class="pull-right">
                  <a href="?tampil=logout" class="btn btn-default btn-flat">
                    <span class="fa fa-sign-out"></span>
                    Sign out</a>
                </div>
              </li>
            </ul>
    </li>

</ul>