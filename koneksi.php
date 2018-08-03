<?php
$db_host='localhost';
$db_username='root';
$db_password='';
$db_name = 'db_aldi';
$connection =mysqli_connect ($db_host, $db_username, $db_password) or die ("tidak bisa connect");
mysqli_select_db ($connection,$db_name) or die ("salah db");	
?>