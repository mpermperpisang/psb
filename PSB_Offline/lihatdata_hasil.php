<?php
	session_start();
	if(($_SESSION['login_member']==true)&& 
	  ($_SESSION['aktif']=="2")){
?>
<html>
	<head>
		<title>ADMIN SMA KARTIKA SILIWANGI 1</title>
	</head>
	<body>	
		<table style="font-size:11px;font-family:'arial';text-align:center;" border='0' width="100%" align="center" cellpadding="3" cellspacing="3">
			<caption><h1>Daftar Siswa Baru</h1></caption>
			<tr>
				<td colspan="12" align="left">
					<form name="form1" method="POST" action="cari_pengumuman_admin.php">
						<font size="-1">Cari data siswa berdasarkan No. Telp :</font>
						<input name="telepon" type="text" id="telepon">
						<input type="submit" name="Submit" value="Cari">
						<input type="button" value="Home" onClick="window.location.href='admin.php'" align="right">
					</form>
				</td>
				<td width="500"></td>
				<td align="right">									
					<?php
								include "koneksi.php";
								include("library.php");
								include "inc/inc.db.php";
								include "inc/lib_func.php";
								$link=koneksi_db();
								$sql = "select * from registrasi";
								$res = mysql_query($sql);
								$banyakrecord=mysql_num_rows($res);
								if($banyakrecord>0)
								{
								?>
									<h3 align="left">Data calon siswa ditemukan sebanyak <b><?php echo $banyakrecord;?></b> data</h3>
									<br>
								<?php 
								}
								else
								{
								?>
									<div align="left">Data calon siswa tidak ditemukan!.</div>		
								<?php
								}
					?>	
				</td>
			</tr>
			<tr>
				<table border="1" align="center" width="100%" cellpadding="4" cellspacing="4">
					<font size="+4" color="#000000"><b>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Nama Calon Siswa</th>
						<th>Tempat Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Agama</th>
						<th>Lulusan</th>
						<th>Tahun Lulus</th>
						<th>Telepon</th>
						<th>Kelas</th>
						<th>Konfirmasi Uang Masuk</th>
						<th>Scan Ijazah</th>
						<th>Scan SKHUN</th>
						<th>Foto</th>
						<th>Pilihan</th>
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
							$agama = $select_result['agama'] ;
							$sekolah =  $select_result['sekolah_asal'];
							$tahunajaran = $select_result['tahun_lulus'] ;
							$ortu = $select_result['ortu'] ;
							$alamat = $select_result['alamat'] ;
							$telepon = $select_result['telp'] ;
							$nilai = $select_result['nilai'] ;
							$kelas = $select_result['kelas'] ;
							$uang_masuk = $select_result['uang_masuk'] ;
							$ijazah=$select_result['ijazah'];
							$skhun=$select_result['skhun'];		
							$foto=$select_result['foto'];						
							echo "<tr><td>$id</td><td>$tanggaldaftar</td><td>$nama</td><td>$ttl</td><td>$jeniskelamin</td>
							<td>$agama</td><td>$sekolah</td><td>$tahunajaran</td>
							<td>$telepon</td><td>$kelas</td><td>$uang_masuk</td>
							<td><img src='ijazah/$ijazah' width=100 height=150></img></td>
							<td><img src='skhun/$skhun' width=100 height=150></img></td>
							<td><img src='foto/$foto' width=100 height=150></img></td>
							<td>
							<form method=\"POST\" action=\"action_siswa.php?id=$id\"><input type=\"hidden\" value=\"$id\" name=\"id\">
							<center><input type=\"submit\" name=\"action\" value=\"Update\"><br />
							</form>
							<form method=\"POST\" action=\"download_hasil.php?id=$id\">
								<input type=\"hidden\" value=\"$id\" name=\"id\"><center>
								<input type=\"submit\" name=\"action\" value=\"Download Data Formulir\"></td>
							</form>
							</td></tr>";
						}					
					?>
				</table>
			</tr>
		</table>
		<br />
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
	else
	{
		header("Location: belum_login_admin.php");
	}
?>