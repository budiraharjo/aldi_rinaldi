<?php
session_start();
if (!empty($_SESSION["adm_user"])){
	$m1="";$m2="";$m3="";$m4="";$m5="";
	include "tmp/header.php";
	
	if (isset($_GET["pengaturan"])){
		include "pages/_pengaturan.php";
	}else
	if (isset($_GET["m1"])){
		include "pages/_brd.php";
	}else
	if (isset($_GET["m2"])){
		if (isset($_GET["tambah"])){include "pages/_tambahangkot.php";}else
		if (isset($_GET["ubah"])){include "pages/_ubahangkot.php";}else{include "pages/_angkot.php";}
	}else
	if (isset($_GET["m3"])){
		if (isset($_GET["tambah"])){include "pages/_tambahtrayek.php";}else
		if (isset($_GET["ubah"])){include "pages/_ubahtrayek.php";}else{include "pages/_trayek.php";}
	}else
	if (isset($_GET["m4"])){
		if (isset($_GET["tambah"])){include "pages/_tambahwilayah.php";}else
		if (isset($_GET["ubah"])){include "pages/_ubahwilayah.php";}else{include "pages/_wilayah.php";}
	}else{include "pages/_brd.php";}

	include "tmp/footer.php";
}else{
	echo "<script>alert('Mohon Login Terlebih Dahulu..!!');</script>";
	include "pages/_login.php";
}
?>