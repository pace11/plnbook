<?php
$user = $_SESSION['handphone'];
$cari = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan WHERE handphone='$user'");
$arr = mysqli_fetch_array($cari);
$hit1 = mysqli_num_rows($cari);

if ($hit1 > 0){
    $data=$arr;
}

$id         = $data['id_pelanggan'];
$nama       = $data['full_name'];
$email      = $data['email'];
$handphone  = $data['handphone'];
$image      = "../data/img/pelanggan/$data[img]";


?>


<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
    </li>
    <li class="nav-item">
        <a href="?page=home" class="nav-link">Home</a>
    </li>
    <li class="nav-item">
        <a href="?page=order" class="nav-link">Order</a>
    </li>
    <li class="nav-item">
        <a href="?page=help" class="nav-link">Help</a>
    </li>
    <li class="nav-item">
        <a href="?page=profile" class="nav-link">Account</a>
    </li>
</ul>