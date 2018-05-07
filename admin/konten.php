<?php

  if (isset($_GET['tampil'])) $tampil=$_GET['tampil'];
  else $tampil="beranda";

  if ($tampil == "beranda") include("beranda.php");
  else if ($tampil == "logout") include("logout.php");
  else if ($tampil == "beranda") include("beranda.php");

  // ------------------------ FAQ ------------------------
  elseif ($tampil == "faq") include("page/faq/faq_list.php");
  elseif ($tampil == "faq_tambahpro") include("page/faq/faq_tambahpro.php");
  elseif ($tampil == "faq_edit") include("page/faq/faq_edit.php");
  elseif ($tampil == "faq_editpro") include("page/faq/faq_editpro.php");
  elseif ($tampil == "faq_hapus") include("page/faq/faq_hapus.php");

  // ------------------------ KATEGORI ------------------------
  elseif ($tampil == "kategori") include("page/kategori/kategori_list.php");
  elseif ($tampil == "kategori_tambahpro") include("page/kategori/kategori_tambahpro.php");
  elseif ($tampil == "kategori_edit") include("page/kategori/kategori_edit.php");
  elseif ($tampil == "kategori_editpro") include("page/kategori/kategori_editpro.php");
  elseif ($tampil == "kategori_hapus") include("page/kategori/kategori_hapus.php");

  // ------------------------ PRODUK ------------------------
  elseif ($tampil == "produk") include("page/produk/produk_list.php");
  elseif ($tampil == "produk_tambahpro") include("page/produk/produk_tambahpro.php");
  elseif ($tampil == "produk_edit") include("page/produk/produk_edit.php");
  elseif ($tampil == "produk_editpro") include("page/produk/produk_editpro.php");
  elseif ($tampil == "produk_hapus") include("page/produk/produk_hapus.php");
  
  // ------------------------ FAQ ------------------------
  elseif ($tampil == "faq") include("page/faq/faq_list.php");
  elseif ($tampil == "faq_tambahpro") include("page/faq/faq_tambahpro.php");
  elseif ($tampil == "faq_edit") include("page/faq/faq_edit.php");
  elseif ($tampil == "faq_editpro") include("page/faq/faq_editpro.php");
  elseif ($tampil == "faq_hapus") include("page/faq/faq_hapus.php");

  // ------------------------ KEMAMPUAN ------------------------
  elseif ($tampil == "kemampuan") include("page/kemampuan/kemampuan_list.php");
  elseif ($tampil == "kemampuan_tambahpro") include("page/kemampuan/kemampuan_tambahpro.php");
  elseif ($tampil == "kemampuan_edit") include("page/kemampuan/kemampuan_edit.php");
  elseif ($tampil == "kemampuan_editpro") include("page/kemampuan/kemampuan_editpro.php");
  elseif ($tampil == "kemampuan_hapus") include("page/kemampuan/kemampuan_hapus.php");

  // ------------------------ PESAN ------------------------
  // ------------------------ Personal ------------------------
  elseif ($tampil == "pesanper") include("page/pesan/personal/pesanper_list.php");
  elseif ($tampil == "pesanper_tambahpro") include("page/pesan/personal/pesanper_tambahpro.php");
  elseif ($tampil == "pesanper_edit") include("page/pesan/personal/pesanper_edit.php");
  elseif ($tampil == "pesanper_editpro") include("page/pesan/personal/pesanper_editpro.php");
  elseif ($tampil == "pesanper_hapus") include("page/pesan/personal/pesanper_hapus.php");
  // ------------------------ Global ------------------------
  elseif ($tampil == "pesan") include("page/pesan/global/pesan_list.php");
  elseif ($tampil == "pesan_tambahpro") include("page/pesan/global/pesan_tambahpro.php");
  elseif ($tampil == "pesan_edit") include("page/pesan/global/pesan_edit.php");
  elseif ($tampil == "pesan_editpro") include("page/pesan/global/pesan_editpro.php");
  elseif ($tampil == "pesan_hapus") include("page/pesan/global/pesan_hapus.php");


  // ------------------------ MITRA PLN ------------------------
  elseif ($tampil == "mitrapln") include("page/mitrapln/mitrapln_list.php");
  elseif ($tampil == "mitrapln_tambahpro") include("page/mitrapln/mitrapln_tambahpro.php");
  elseif ($tampil == "mitrapln_edit") include("page/mitrapln/mitrapln_edit.php");
  elseif ($tampil == "mitrapln_editpro") include("page/mitrapln/mitrapln_editpro.php");
  elseif ($tampil == "mitrapln_hapus") include("page/mitrapln/mitrapln_hapus.php");


  // ------------------------ Profil ------------------------
  elseif ($tampil == "profil") include("page/profil/profil.php");

else echo"Konten tidak ada";

?>
