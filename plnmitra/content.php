<?php

  if (isset($_GET['page'])) $page=$_GET['page'];
  else $page="home";

  if ($page == "home") include("pages/home.php");
  else if ($page == "logout") include("pages/logout.php");


    //---------------------- Profile --------------------------
    else if ($page == "profile") include("pages/profile/profile.php");
    else if ($page == "profile_edit") include("pages/profile/profile_edit.php");
    else if ($page == "profile_editpro") include("pages/profile/profile_editpro.php");


    //---------------------- Booking --------------------------
    else if ($page == "booking") include("pages/booking/booking.php");
    else if ($page == "booking_detail") include("pages/booking/booking_detail.php");
    else if ($page == "booking_detailpro") include("pages/booking/booking_detailpro.php");
    else if ($page == "booking_detailpromb") include("pages/booking/booking_detailpromb.php");
    else if ($page == "booking_detailpros") include("pages/booking/booking_detailpros.php");


    //---------------------- Pesan --------------------------
    else if ($page == "pesan") include("pages/pesan/pesan.php");
    else if ($page == "pesan_detail") include("pages/pesan/pesan_detail.php");
    else if ($page == "pesanper_detail") include("pages/pesan/pesanper_detail.php");

    //---------------------- FAQ --------------------------
    else if ($page == "dompet") include("pages/dompet/dompet.php");

    //---------------------- FAQ --------------------------
    else if ($page == "faq") include("pages/faq.php");

    //---------------------- Ganti PIN --------------------------
    else if ($page == "gantipin") include("pages/gantipin/gantipin.php");
    else if ($page == "gantipinpro") include("pages/gantipin/gantipinpro.php");

else echo"Konten tidak ada";

?>
