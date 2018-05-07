<?php
$user = $_SESSION['handphone'];
$cari = mysqli_query($koneksi, "SELECT * FROM tbl_mitrapln WHERE handphone='$user'");
$arr = mysqli_fetch_array($cari);
$hit1 = mysqli_num_rows($cari);

if ($hit1 > 0){
    $data=$arr;
}

$id         = $data['id_mitrapln'];
$nama       = $data['full_name'];
$email      = $data['email'];
$handphone  = $data['handphone'];
$bio        = $data['bio'];
$image      = "../data/img/mitrapln/$data[img]";


?>


<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link">
            <?php
            if ($_GET['page'] == 'home') {
                echo "HOME";
            } else if ($_GET['page'] == 'profile') {
                echo "PROFILE";
            } else if ($_GET['page'] == 'booking') {
                echo "BOOKING";
            } else if ($_GET['page'] == 'pesan') {
                echo "PESAN";
            } else if ($_GET['page'] == 'dompet') {
                echo "DOMPET";
            } else if ($_GET['page'] == 'saldo') {
                echo "SALDO";
            } else if ($_GET['page'] == 'faq') {
                echo "FAQ";
            } else if ($_GET['page'] == 'gantipin') {
                echo "GANTI PIN";
            }
            ?>
        </a>
    </li>
</ul>