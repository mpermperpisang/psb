<?php
	include("library.php");
	include "inc/inc.db.php";
	include "inc/lib_func.php";
	session_start();
	if(($_SESSION['login_member']==true)&& 
	  ($_SESSION['aktif']=="2"))
	{	
		$username=$_POST['username'];
		$password = md5(secure_input($_POST['password']));
		$nama=$_POST['nama'];
		$email=$_POST['email'];
		$telp=$_POST['telp'];
		$link=koneksi_db();
		
		$sql = "insert into user values ('','$username','$email','$password','$nama','$telp','0','3')";
		$res = mysql_query($sql);
		
		if($res){
			//echo "berhasil query";
			if(auto_respon($email,$username,$nama,$telp,$password)){
				echo "Data Operator <?php echo $nama;?> sudah berhasil ditambahkan.";
			}else{
				echo "Terjadi kesalahan dalam pendaftaran dengan kesalahan <?php echo mysql_error();?>.<br>Silahkan ulangi lagi.";
			}
		}else{
			echo "Gagal melakukan query";
		}	

	}
	else
	{
		header("Location: belum_login_admin.php");
	}
?>