<?php
include "koneksi.php";

$awalkode=$_POST['awalkode'];
$nama=$_POST['wilayah'];
$lat=$_POST['lat'];
$lng=$_POST['lng'];

$q=mysql_query("select kd_wilayah from wilayah where kd_wilayah like '$awalkode%' order by kd_wilayah desc");
$d=mysql_fetch_array($q);

$no=substr($d['kd_wilayah'],3,7)+1;
if ($no<10){
	$kd=$awalkode.'000000'.$no;
}else if ($no<100){
	$kd=$awalkode.'00000'.$no;
}else if ($no<1000){
	$kd=$awalkode.'0000'.$no;
}else if ($no<10000){
	$kd=$awalkode.'000'.$no;
}else if ($no<100000){
	$kd=$awalkode.'00'.$no;
}else if ($no<1000000){
	$kd=$awalkode.'0'.$no;
}

mysql_query("insert into wilayah values ('$kd','$nama','$lat','$lng')");
?>
<script>alert("Data Berhadil Di Tambah..");location.href="../?m4"</script>