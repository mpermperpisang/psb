<?php
	include("library.php");
	session_start();
	include "inc/inc.db.php";
	include "inc/lib_func.php";
	$username = secure_input($_POST['username']);
	$password = md5(secure_input($_POST['password']));
	$link=koneksi_db();
	$sql = "select * from user where username = '$username'";
	$res = mysql_query($sql);
	$jml = mysql_num_rows($res);
	if($jml==0){
		header("Location: gagal_login_username.php");
	}else{
		while($data = mysql_fetch_assoc($res)){
			
			$pass_db = $data['password'];
			
			if($pass_db != $password){
				header("Location: gagal_login_password.php");
			}else{
			
				$aktif = $data['aktif'];
				$email = $data['email'];
				
				if($aktif == 0){
					header("Location: gagal_login_aktivasi.php");
				}
				else if ($aktif == 1){				
						$_SESSION['username']=$data['username'];
						$_SESSION['password']=$data['password'];
						$_SESSION['aktif']=$data['aktif'];
						$_SESSION['nama']=$data['nama'];
						$_SESSION['login_member']=true;
						include("redirectview_siswa.php");
						echo "<meta http-equiv='refresh' content='1;url=home.php'>";
				}
				else if ($aktif == 2){
						$_SESSION['username']=$data['username'];
						$_SESSION['password']=$data['password'];
						$_SESSION['aktif']=$data['aktif'];
						$_SESSION['nama']=$data['nama'];
						$_SESSION['login_member']=true;
						include("redirectview_admin.php");
						echo "<meta http-equiv='refresh' content='1;url=admin.php'>";
				}
				else if ($aktif == 3){
						$_SESSION['username']=$data['username'];
						$_SESSION['password']=$data['password'];
						$_SESSION['aktif']=$data['aktif'];
						$_SESSION['nama']=$data['nama'];
						$_SESSION['login_member']=true;
						include("redirectview_operator.php");
						echo "<meta http-equiv='refresh' content='1;url=operator.php'>";
				}
			}				
		}		
	}		
?>