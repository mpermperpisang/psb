<?php
	include("library.php");
	session_start();
	if(($_SESSION['login_member']==true)&& 
	  ($_SESSION['aktif']=="2")){

	include "koneksi.php";
		include "inc/inc.db.php";
		include "inc/lib_func.php";
		$id = $_POST['id'];
		$username =  $_POST['username'];
		$nama =  $_POST['nama'];
		$email =  $_POST['email'];
		$telp =  $_POST['telp'];
	$query_update = "update user set username = '$username', nama = '$nama', email = '$email', telp = '$telp'
				where id='$id'";
	$update = mysql_query($query_update);
	if($update)
		{
		include("redirectview_update.php");
		echo "<META HTTP-EQUIV=Refresh CONTENT='2; URL=data_operator.php'>";
		}
	
	else
		{
		include("redirectview_gagal.php");
		echo "<META HTTP-EQUIV=Refresh CONTENT='2; URL=data_operator.php'>";
		}
?>
<?php
	}
	else {
		header("Location: belum_login_admin.php");
	}
?><title>ADMIN SMA KARTIKA SILIWANGI 1</title>