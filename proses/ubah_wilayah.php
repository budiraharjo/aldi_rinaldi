<?php
include "../koneksi.php";

$kdw=$_GET['kdw'];
$nama=$_POST['kecamatan'];
$lat=$_POST['lat'];
$lng=$_POST['lng'];

mysqli_query($connection,"update wilayah set kecamatan='$nama',lat='$lat',lng='$lng' where id_wilayah='$kdw'");
?>
<script>alert("Data Berhadil Di Ubah..");location.href="../admin.php?p=daftar_wilayah"</script>