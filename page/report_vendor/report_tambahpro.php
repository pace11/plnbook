<?php

  include "../../lib/koneksi.php";
  
  $id = $_POST['id'];

    $link_report = addslashes($_POST['link']);
    
	$laporan = mysqli_query($koneksi, "INSERT INTO report_vendor SET
                            id_vendor      ='$_POST[id_vendor]',
                            id_kontrak     ='$_POST[id_kontrak]',
                            id_varkontrak  ='$id',
                            tahun          ='$_POST[tahun]',
                            id_bulan       ='$_POST[bulan]',
                            link_report    ='$link_report',
                            sla            ='$_POST[sla]',
                            performance    ='$_POST[perform]'");

	header('location:../../?tampil=report_vendor');

?>