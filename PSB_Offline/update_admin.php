<?php
	include("library.php");
	session_start();
	if(($_SESSION['login_member']==true)&& 
	  ($_SESSION['aktif']=="2")){

	include "koneksi.php";
		include "inc/inc.db.php";
		include "inc/lib_func.php";
		$id = $_POST['id'];
		$tanggal_daftar = date("Y-n-d");
		$nama =  $_POST['nama'];
		$ttl = $_POST['ttl'] ;
		$tgl_tes = $_POST['tanggaltest'] ;
		$uang_daftar = $_POST['uang_daftar'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$agama = $_POST['agama'] ;
		$sekolah =  $_POST['sekolah'];
		$tahun_ajaran = $_POST['tahun_ajaran'];
		$ortu = $_POST['ortu'];
		$alamat = $_POST['alamat'];
		$telepon = $_POST['telepon'];
		$nilai = $_POST['nilai'];
	$query_update = "update pendaftaran set nama_pendaftar = '$nama', ttl = '$ttl', jns_kelamin = '$jenis_kelamin',
                agama = '$agama', sekolah_asal = '$sekolah', tahun_lulus = '$tahun_ajaran', ortu = '$ortu',
                alamat = '$alamat', telp = '$telepon', nilai = '$nilai', tgl_tes = '$tgl_tes', uang_daftar = '$uang_daftar',
		petugas = 'Admin'
				where id_daftar='$id'";
	$update = mysql_query($query_update);
	if($update)
		{
		include("redirectview_update.php");
		echo "<META HTTP-EQUIV=Refresh CONTENT='2; URL=lihatdata_admin.php'>";
		}
	
	else
		{
		include("redirectview_gagal.php");
		echo "<META HTTP-EQUIV=Refresh CONTENT='2; URL=lihatdata_admin.php'>";
		}
?>
<?php
	}
	else {
		header("Location: belum_login_admin.php");
	}
?><title>ADMIN SMA KARTIKA SILIWANGI 1</title>