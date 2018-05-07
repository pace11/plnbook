<?php

  if (isset($_GET['page'])) $page=$_GET['page'];
  else $page="home";

  if ($page == "home") include("pages/home.php");
  else if ($page == "home_detail") include("pages/home_detail.php");
  else if ($page == "logout") include("pages/logout.php");


    //---------------------- Produk --------------------------
    else if ($page == "produk") include("pages/produk/produk.php");
    else if ($page == "produk_detail") include("pages/produk/produk_detail.php");
    else if ($page == "produk_detailorder") include("pages/produk/produk_detailorder.php");
    else if ($page == "produk_detailorderpro") include("pages/produk/produk_detailorderpro.php");
  
    //---------------------- Profile --------------------------
    else if ($page == "profile") include("pages/profile/profile.php");
    else if ($page == "profile_edit") include("pages/profile/profile_edit.php");
    else if ($page == "profile_editpro") include("pages/profile/profile_editpro.php");
    else if ($page == "topup") include("pages/profile/topup.php");
    else if ($page == "tos") include("pages/profile/tos.php");
    else if ($page == "privacy") include("pages/profile/privacy.php");
    else if ($page == "changelang") include("pages/profile/changelang.php");
    else if ($page == "changepin") include("pages/profile/changepin.php");
    else if ($page == "changepinpro") include("pages/profile/changepinpro.php");


    //---------------------- Order --------------------------
    else if ($page == "order") include("pages/order/order.php");

    //---------------------- Help --------------------------
    else if ($page == "help") include("pages/help/help.php");
    else if ($page == "help_detail") include("pages/help/help_detail.php");
    else if ($page == "help_detailpro") include("pages/help/help_detailpro.php");


    //---------------------- Pesan --------------------------
    else if ($page == "pesan") include("pages/pesan/pesan.php");
    else if ($page == "pesan_detail") include("pages/pesan/pesan_detail.php");
    else if ($page == "pesanper_detail") include("pages/pesan/pesanper_detail.php");

    //---------------------- Dompet --------------------------
    else if ($page == "dompet") include("pages/dompet/dompet.php");

    //---------------------- FAQ --------------------------
    else if ($page == "faq") include("pages/faq.php");

    //---------------------- Ganti PIN --------------------------
    else if ($page == "gantipin") include("pages/gantipin/gantipin.php");

else echo"Konten tidak ada";

?>
