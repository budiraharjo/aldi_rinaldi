<?php
include "../koneksi.php";

$kecamatan=$_POST['kecamatan'];
$lat=$_POST['lat'];
$lng=$_POST['lng'];


mysqli_query($connection,"insert into wilayah values ('','$kecamatan','$lat','$lng')");
?>
<script>alert("Data Berhadil Di Tambah..");location.href="../admin.php?p=tambah_wilayah"</script>