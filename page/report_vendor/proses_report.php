<?php

include("../../lib/koneksi.php");

$kontrak = $_GET['kontrak'];
$sql_kontrak = mysqli_query($koneksi, "SELECT * FROM varian_kontrak WHERE id_kontrak='$kontrak'");

echo "<option>-- pilih salah satu --</option>";

while($row_kontrak = mysqli_fetch_array($sql_kontrak)){
  echo "<option value=$row_kontrak[id_varkontrak]>$row_kontrak[type_varian]</option> \n";
}

?>
