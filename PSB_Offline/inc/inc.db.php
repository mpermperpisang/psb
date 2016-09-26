<?php
    $host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "smaks101_kartikasiliwangi";
	
	mysql_connect($host,$user,$pass) or die('error : '.mysql_error());
	
	mysql_select_db($db) or die('error : '.mysql_error());
?>