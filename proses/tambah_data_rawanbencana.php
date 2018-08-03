<?php
include "../koneksi.php";

$id_wilayah= $_POST['id_wilayah'];
$luas = $_POST['luas'];
$kepadatan = $_POST['kepadatan'];
$jumlah_sungai = $_POST['jumlah_sungai'];
$tinggi_sungai = $_POST['tinggi_sungai'];
$lebar_sungai = $_POST['lebar_sungai'];
$debit = $_POST['debit'];
$radius = $_POST['radius'];

$kecamatan=$_POST['kecamatan'];
$lat=$_POST['lat'];
$lng=$_POST['lng'];
$keterangan ='Baru';

mysqli_query($connection,"insert into rawan_bencana values 
('','$id_wilayah','$luas','$kepadatan','$jumlah_sungai','$tinggi_sungai','$lebar_sungai','$debit','$radius','$kecamatan','$lat','$lng','$keterangan')");
?>
<script>alert("Data Berhadil Di Tambah..");location.href="../admin.php?p=pelaporan"</script>