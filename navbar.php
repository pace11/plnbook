<?php

// jalur data yang disorting
$user = $_SESSION['username'];
$karyawan = mysqli_query($koneksi, "SELECT * FROM karyawan 
                                    JOIN role_login ON karyawan.id_role=role_login.id_role
                                    WHERE karyawan.username='$user'");
$arr = mysqli_fetch_array($karyawan);
$hit1 = mysqli_num_rows($karyawan);

if ($hit1 > 0){
    $data=$arr;
} else {
$vendor = mysqli_query($koneksi, "SELECT * FROM master_vendor
                                  JOIN role_login ON master_vendor.id_role=role_login.id_role
                                  WHERE master_vendor.username='$user'");
$arr = mysqli_fetch_array($vendor);
$data=$arr;
}
//--------------------------------------------------------------------------------------------------------

//--------------- path image, nama ---------------
if ($data['id_role'] == 1 || $data['id_role'] == 2 ){
    $img = "data/img/karyawan/$data[img]";
    $id = $data['nip'];
    $nama = $data['nama_karyawan'];
    $unit = $data['unit'];
    $email = $data['email'];
    $contact = $data['contact'];
    $user = $data['username'];
    $role = $data['id_role'];
    $status = "<a class='btn btn-default btn-xs'><i class='fa fa-user'></i> $data[status]</a>";
} else {
    $img = "data/img/vendor/$data[img]";
    $id = $data['id_vendor'];
    $nama = $data['nama_perusahaan'];
    $email = $data['email_vendor'];
    $alamat = $data['alamat_vendor'];
    $contact = $data['contact_vendor'];
    $user = $data['username'];
    $role = $data['id_role'];
    $status = "<a class='btn btn-default btn-xs'><i class='fa fa-code-fork'></i> $data[status]</a>";
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
                  <a href="?tampil=profil" class="btn btn-success btn-flat">
                    <span class="fa fa-cog"></span> 
                    Profile</a>
                </div>
                <div class="pull-right">
                  <a href="?tampil=logout" class="btn btn-danger btn-flat">
                    <span class="fa fa-sign-out"></span>
                    Sign out</a>
                </div>
              </li>
            </ul>
    </li>

</ul>