<?php
include "koneksi.php";

$kdtl=$_GET["kdt"];
$kdt=$_POST['kdt'];
$nama=$_POST['nama'];
$kda=$_POST['kdkendaraan'];

mysql_query("update rute set kd_rute='$kdt',rute='$nama',kd_kendaraan='$kda' where kd_rute='$kdtl'");
?>
<script>alert("Data Berhadil Di Ubah..");location.href="../?m3"</script>