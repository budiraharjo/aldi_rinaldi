<?php
include "koneksi.php";

$kdt=$_GET['kdt'];

mysql_query("delete from rute where kd_rute='$kdt'");
?>
<script>alert("Data Berhadil Di Hapus..");location.href="../?m3"</script>