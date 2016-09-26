<?php
	include("library.php");
	session_start();
	if(($_SESSION['login_member']==true)&& 
	  ($_SESSION['aktif']=="2")){

include "koneksi.php";
include "inc/inc.db.php";
include "inc/lib_func.php";

$select = "insert into registrasi select * from pendaftaran";
$select_query = mysql_query($select);
include("redirectview_update.php");
echo "<META HTTP-EQUIV=Refresh CONTENT='2; URL=lihatdata_admin.php'>";

	}
	else {
		header("Location: belum_login_admin.php");
	}
?>