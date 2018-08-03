<?php
$cr=$_GET['cari'];

include"koneksi.php";

$sql = mysqli_query($connection,"SELECT * FROM v_rute where kd_rute = '$cr'");
$result = array();
 
while($row = mysqli_fetch_array($sql)){
	array_push($result, array('wrn' => $row[3], 'trf' => $row[4] , 'gmb' => $row[5]));
}
echo json_encode(array("result" => $result));
?>