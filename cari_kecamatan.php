<?php
   include "koneksi.php"; //menyisipkan file koneksi.php
   $cari = isset($_GET['cari']) ? mysqli_real_escape_string($connection,$_GET['cari']):'';
   $data = array();
   $sql  = "select * from wilayah where kecamatan LIKE '".$cari."%'";
   
   if($res = $connection->query($sql)) {
      while ($row = $res->fetch_assoc()) {
	   $data[] = $row;
      }
   }
   echo json_encode($data);
   
   /* tutup koneksinya */
   $connection->close();
?>