<?php
include "../../koneksi.php";

$user=$_POST['username'];
$pass=$_POST['password'];

$q=mysqli_query($connection,"select * from admin where username='$user' and password='$pass'");
$cek=mysqli_num_rows($q);

if ($cek>0){
	session_start();
	$_SESSION['adm_user']=$user;
}else{
	echo "<script>alert('Username dan Password tidak benar..!!');</script>";
}
?>
<script>location.href="../"</script>