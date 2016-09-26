<?php
	include("library.php");
	session_start();
	if(($_SESSION['login_member']==true)&& 
	  ($_SESSION['aktif']=="3")){

	include "koneksi.php";
		include "inc/inc.db.php";
		include "inc/lib_func.php";
	$id = $_POST['id'];
	$tanggal_daftar = date("Y-n-d");
	$nama =  $_POST['nama'];
	$ttl = $_POST['ttl'] ;
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$sekolah =  $_POST['sekolah'];
	$tahun_ajaran = $_POST['tahun_ajaran'];
	$ortu = $_POST['ortu'];
	$alamat = $_POST['alamat'];
	$telepon = $_POST['telepon'];
	$nilai = $_POST['nilai'];
	$kelas = $_POST['kelas'];
	$uang_masuk = $_POST['uang_masuk'];
	$petugas = $_POST['petugas'];
	$query_update = "update registrasi set nama_pendaftar = '$nama', ttl = '$ttl', jns_kelamin = '$jenis_kelamin', agama = '$agama',
					 sekolah_asal = '$sekolah', tahun_lulus = '$tahun_ajaran', ortu = '$ortu',
					 alamat = '$alamat', telp = '$telepon', nilai = '$nilai', kelas = '$kelas', uang_masuk = '$uang_masuk',
					 petugas = '$petugas'
					 where id_daftar='$id'";
	$update = mysql_query($query_update);
	if($update)
		{
		include("redirectview_update.php");
		echo "<META HTTP-EQUIV=Refresh CONTENT='2; URL=lihatdata_hasil_operator.php'>";
		}
	
	else
		{
		include("redirectview_gagal.php");
		echo "<META HTTP-EQUIV=Refresh CONTENT='2; URL=lihatdata_hasil_operator.php'>";
		}

	}
	else {
		header("Location: belum_login_operator.php");
	}
?><title>OPERATOR SMA KARTIKA SILIWANGI 1</title>