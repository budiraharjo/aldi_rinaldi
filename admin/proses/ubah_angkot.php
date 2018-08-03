<?php
	if (!empty($_GET["kda"])){
		include "koneksi.php";
		
		$kda=$_GET["kda"];
		
		$q=mysql_query("select * from kendaraan where kd_kendaraan='$kda'");
		$d=mysql_fetch_array($q);
		
		function convertToAngka($rp){
			$int = ereg_replace("[^0-9]", "", $rp); 
			return $int;
		}
		
		$warna=$_POST["warna"];
		$tarif=convertToAngka($_POST["tarif"]);
		
		if (!empty($_FILES['gmb']["tmp_name"]) and !empty($_FILES['gmb2']["tmp_name"])){
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
							mysql_query("update kendaraan set warna='$warna',tarif='$tarif',gambar='$nama_baru' where kd_kendaraan='$kda'");
							
							unlink($tujuan.$d["gambar"]);
							unlink($balon.$d["gambar"]);
						}else{unlink($tujuan.$nama_baru);}
					}
				}
			}
		}else{mysql_query("update kendaraan set warna='$warna',tarif='$tarif' where kd_kendaraan='$kda'");}
	}
?>
<script>alert("Data Berhadil Di Ubah..");location.href="../?m2"</script>