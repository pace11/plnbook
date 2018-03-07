<?php

  if (isset($_GET['tampil'])) $tampil=$_GET['tampil'];
  else $tampil="beranda";

  if ($tampil == "beranda") include "beranda.php";
  else if ($tampil == "logout") include "logout.php";

  // ------------------------ karyawan ------------------------
  elseif ($tampil == "karyawan") include("page/karyawan/karyawan_list.php");
  elseif ($tampil == "karyawan_tambahpro") include("page/karyawan/karyawan_tambahpro.php");
  elseif ($tampil == "karyawan_edit") include("page/karyawan/karyawan_edit.php");
  elseif ($tampil == "karyawan_editpro") include("page/karyawan/karyawan_editpro.php");
  elseif ($tampil == "karyawan_hapus") include("page/karyawan/karyawan_hapus.php");

  // ------------------------ Vendor ------------------------
  elseif ($tampil == "vendor") include("page/vendor/vendor_list.php");
  elseif ($tampil == "vendor_tambahpro") include("page/vendor/vendor_tambahpro.php");
  elseif ($tampil == "vendor_edit") include("page/vendor/vendor_edit.php");
  elseif ($tampil == "vendor_editpro") include("page/vendor/vendor_editpro.php");
  elseif ($tampil == "vendor_hapus") include("page/vendor/vendor_hapus.php");

  // ------------------------ Report Vendor ------------------------
  elseif ($tampil == "report_vendor") include("page/report_vendor/report_list.php");
  elseif ($tampil == "report_tambahpro") include("page/report_vendor/report_tambahpro.php");

  // ------------------------ Pesan ------------------------
  elseif ($tampil == "pesan") include("page/pesan/pesan_list.php");

  // ------------------------ Profil ------------------------
  elseif ($tampil == "profil") include("page/profil/profil.php");

else echo"Konten tidak ada";

?>
