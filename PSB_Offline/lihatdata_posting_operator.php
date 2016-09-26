<?php

	include("library.php");
	include "koneksi.php";
	include "inc/inc.db.php";
	include "inc/lib_func.php";
	$link=koneksi_db();
	$nilai = $_POST['nilai'];
	$sql = "delete from registrasi where nilai<$nilai";
	$res = mysql_query($sql);
	include("redirectview_update.php");
	echo "<META HTTP-EQUIV=Refresh CONTENT='2; URL=lihatdata_hasil_operator.php'>";

	
?><title>OPERATOR SMA Kartika Siliwangi 1</title>