<?php
		include "koneksi.php";
		
		$q=mysql_query("select * from admin");
		$d=mysql_fetch_array($q);
		
		$uslama=$d["username"];
		$pslama=$d["password"];
		
		$user=$_POST["user"];
		$pass=$_POST["pass"];
		
		mysql_query("update admin set username='$user',password='$pass' where username='$uslama' and password='$pslama'");
?>
<script>alert("Data Berhadil Di Ubah..");location.href="../?pengaturan"</script>