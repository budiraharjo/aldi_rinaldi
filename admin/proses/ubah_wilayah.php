<?php
include "koneksi.php";

$kdw=$_GET['kdw'];
$nama=$_POST['wilayah'];
$lat=$_POST['lat'];
$lng=$_POST['lng'];

mysql_query("update wilayah set nama='$nama',lat='$lat',lng='$lng' where kd_wilayah='$kdw'");
?>
<script>alert("Data Berhadil Di Ubah..");location.href="../?m4"</script>