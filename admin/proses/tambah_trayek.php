<?php
include "koneksi.php";

$kdt=$_POST['kdt'];
$nama=$_POST['nama'];
$kda=$_POST['kdkendaraan'];

mysql_query("insert into rute values ('$kdt','$nama','$kda')");
?>
<script>alert("Data Berhadil Di Tambah..");location.href="../?m3"</script>