<?php
include "koneksi.php";

$q=mysql_query("select kd_kendaraan from kendaraan order by kd_kendaraan desc");
$d=mysql_fetch_array($q);

function convertToAngka($rp){
	$int = ereg_replace("[^0-9]", "", $rp); 
	return $int;
}

$no=substr($d['kd_kendaraan'],3,5)+1;
if ($no<10){
	$kd='ang0000'.$no;
}else if ($no<100){
	$kd='ang000'.$no;
}else if ($no<1000){
	$kd='ang00'.$no;
}else if ($no<10000){
	$kd='ang0'.$no;
}else{$kd='ang'.$no;}

$warna=$_POST["warna"];
$tarif=convertToAngka($_POST["tarif"]);

//gambar 1
$tujuan="../../images/";
$file_gmb=$_FILES['gmb'];
$namafile_gmb=explode('.',$file_gmb['name']);
$nama_asli=$file_gmb['name'];
$tanpa_ekstensi=isset($namafile_gmb[0]) ? $namafile_gmb[0]:null;
$ekstensi_file=$namafile_gmb[count($namafile_gmb)-1];

$ukuran_file=$file_gmb['size'];
$tipe_file=$file_gmb['type'];

//gambar 2
$balon="../../images/balon/";
$file_gmb2=$_FILES['gmb2'];
$namafile_gmb2=explode('.',$file_gmb2['name']);
$nama_asli2=$file_gmb2['name'];
$tanpa_ekstensi2=isset($namafile_gmb2[0]) ? $namafile_gmb2[0]:null;
$ekstensi_file2=$namafile_gmb2[count($namafile_gmb2)-1];

$ukuran_file2=$file_gmb2['size'];
$tipe_file2=$file_gmb2['type'];

//konstanta
$wkt=time();
$nama_baru=$wkt.'.'.$ekstensi_file;	$nama_baru2=$wkt.'.'.$ekstensi_file2;
$max=10000000;/* max 10MB */		$ekstensi_ok=array('jpg','JPG','png','PNG','jpeg','JPEG');

//upload
if (in_array($ekstensi_file,$ekstensi_ok) and in_array($ekstensi_file2,$ekstensi_ok)){
	if (($ukuran_file<=$max) and ($ukuran_file2<=$max)){
		if (move_uploaded_file($file_gmb['tmp_name'],$tujuan.$nama_baru)){
			if (move_uploaded_file($file_gmb2['tmp_name'],$balon.$nama_baru2)){
				mysql_query("insert into kendaraan values ('$kd','$warna','$tarif','$nama_baru')");
			}else{unlink($tujuan.$nama_baru);}
		}
	}
}
?>
<script>alert("Data Berhadil Di Tambah..");location.href="../?m2"</script>