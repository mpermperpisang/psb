<?php
	function secure_input($data){
		$secure_data = mysql_real_escape_string($data);
		return $secure_data;
	}
	
	function auto_respon($email,$username,$kode){
		include_once("class.phpmailer.php");
		$mail         = new PHPMailer();
		$mail->IsMail();
		$mail->FromName   = "From: admin@smaks1.sch.id"; $mail->FromName = "smaks1.sch.id";
		$mail->Subject = "Aktifasi Akun PSB SMA Kartika Siliwangi 1";
		$mail->Body = "Terimakasih ".$username." telah mendaftar..<br /> Klik link dibawah ini untuk mengaktifkan akun PSB anda<br />http://smaks1.sch.id/aktifasi.php?kode=$kode";
		$mail->AddAddress($email);
		$mail->IsHTML(true);
		if(!$mail->Send()){
			return FALSE;
		}else{
			return TRUE;
		}
	}
	
	function cek_kode_aktifasi($kode){
		$sql = "select * from user where code='$kode' and aktif=1";
		$res = mysql_query($sql);
		$data = mysql_fetch_array($res);
		$cek_ada = mysql_num_rows($res);
		
		if($cek_ada == 0){
			$cek = 1; # member belum aktifasi
		}else{
			$cek = 0; # member sudah aktifasi
		}
		
		return $cek;
	}
?>