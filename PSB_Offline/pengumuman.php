<?php
	session_start();
	if(($_SESSION['login_member']==true)&& 
	  ($_SESSION['aktif']=="1")){
?>
<html>
	<head>
		<title>SMA KARTIKA SILIWANGI 1</title>
	</head>
	<body>	
		<table style="font-size:11px;font-family:'arial';text-align:center;" border='0' width="90%" align="center" cellpadding="3" cellspacing="3">
			<caption><h1>Daftar Siswa Baru</h1></caption>
			<tr>
				<td align="left">Masukkan no hp untuk melakukan pencarian data dan mendownload formulir registrasi ulang.
			<form name="form1" method="POST" action="cari_pengumuman.php">
				<font size="-1">Cari data siswa berdasarkan No. Telp :</font>
				<input name="telepon" type="text" id="telepon">
				<input type="submit" name="Submit" value="Cari">
				<input type="button" value="Home" onClick="window.location.href='home.php'" align="right">
				<input type="button" value="Registrasi Ulang" onClick="window.location.href='registrasi.php'" align="right">
			</form></td>
			</tr>
			<tr>
				<td>
				<?php
						include "inc/inc.db.php";
						include "inc/lib_func.php";
						include("library.php");
						$link=koneksi_db();
						$sql = "select * from registrasi order by id_daftar asc";
						$res = mysql_query($sql);
								$banyakrecord=mysql_num_rows($res);
								if($banyakrecord>0)
								{
							?>
									<h3 align="right">Data siswa baru ditemukan sebanyak <b><?php echo $banyakrecord;?></b> data</h3>
									<br>
							<?php 
								}
							else
									{
							?>
									<h3 align="right">Data calon siswa tidak ditemukan!</h3>	
							<?php
									}
					?>		
				</td>
			</tr>
			<tr>
				<table border="1" align="center" width="90%" cellpadding="4" cellspacing="4">
				<font size="+4" color="#000000"><b>
				<tr>
					<th>No</th>
					<th>Tanggal</th>
					<th>Nama Calon Siswa</th>
					<th>Tempat Tanggal Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Lulusan</th>
					<th>Tahun</th>
					<th>Nama Orang Tua</th>
					<th>Alamat</th>
				</tr>
				</b></font>				
					<?php				
					while($select_result = mysql_fetch_array($res))
					{				
						$id = $select_result['id_daftar'] ;
						$tanggaldaftar = $select_result['tanggal_daftar'] ;
						$nama = $select_result['nama_pendaftar'] ;
						$ttl = $select_result['ttl'] ;
						$jeniskelamin = $select_result['jns_kelamin'] ;
						$sekolah =  $select_result['sekolah_asal'];
						$tahunajaran = $select_result['tahun_lulus'] ;
						$ortu = $select_result['ortu'] ;
						$alamat = $select_result['alamat'] ;
						$telepon = $select_result['telp'] ;
						$nilai = $select_result['nilai'] ;				
						echo "<tr><td>$id</td><td>$tanggaldaftar</td><td>$nama</td><td>$ttl</td><td>$jeniskelamin</td><td>$sekolah</td><td>$tahunajaran</td>
						<td>$ortu</td><td>$alamat</td>
						</tr>";
					}				
					?>
				</table>
			</tr>
		</table><br />
		<style type="text/css">
			.backtotop a:hover {background:none;}
		</style>
		<div class="backtotop">
			<a style="display:scroll;position:fixed;bottom:5px;right:5px;" class="backtotop" href="#" rel="nofollow" title="Back to Top">
				Kembali<br>ke atas
			</a>
		</div>
	</body>
</html>

<?php
	}
	else {
		header("Location: belum_login.php");
	}
?>