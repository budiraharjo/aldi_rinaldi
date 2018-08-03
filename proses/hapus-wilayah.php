<?php
include "koneksi.php";

$kdw=$_GET['kdw'];

mysql_query("delete from wilayah where kd_wilayah='$kdw'");
?>
<script>alert("Data Berhadil Di Hapus..");location.href="../?m4"</script>