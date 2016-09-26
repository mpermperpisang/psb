<?php
	include "inc/inc.db.php";
	include "inc/lib_func.php";
	
	
	$username = secure_input($_POST['username']);
	$email = secure_input($_POST['email']);
	$password = md5(secure_input($_POST['password']));
	
	$kode = rand(11111,99999);
	
	$sql = "insert into user values ('','$username','$email','$password','-','-','$kode','0')";
	$res = mysql_query($sql);
	
	if($res){
		//echo "berhasil query";
		if(auto_respon($email,$username,$kode)){
			echo "Silahkan melihat email anda untuk mengaktifkan account PSB<br >";
			echo "Apabila tidak ditemukan balasan ke inbox email Anda, silahkan cek inbox spam email Anda...";
		}else{
			echo "Gagal mengirim aktifasi email";
		}
	}else{
		echo "Gagal melakukan query";
	}
	
?>
