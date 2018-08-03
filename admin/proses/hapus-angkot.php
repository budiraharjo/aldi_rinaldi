<?php
include "koneksi.php";

$kda=$_GET['kda'];

mysql_query("delete from kendaraan where kd_kendaraan='$kda'");
?>
<script>alert("Data Berhadil Di Hapus..");location.href="../?m2"</script>