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
		<table style="font-size:11px;font-family:'arial';text-align:center;" border='0' width="99%" align="center" cellpadding="3" cellspacing="3">
			<caption><h1>Daftar Seleksi Siswa Baru</h1></caption>
			<tr>
				<td colspan="12" align="left">
					<form name="form1" method="POST" action="cari_admin.php">
						<font size="-1">Cari data siswa berdasarkan No. Telp :</font>
						<input name="telepon" type="text" id="telepon">
						<input type="submit" name="Submit" value="Cari">
					</form>
				</td>
				<td width="500"></td>
				<td align="left">
					<form name="form2" method="POST" action="lihatdata_posting.php">
					<b>Posting Hasil?<br>Masukkan lagi nilai minimum</b>&nbsp;&nbsp;&nbsp;&nbsp;					
					<input type="text" name="nilai" value="0" size="5" maxlength="50"/>
					<input type="submit" name="kirim" value="Posting"/></form>
				</td>
			</tr>
			<tr>
				<td colspan="12" align="left">				
						<?php
								include "koneksi.php";
								include("library.php");
								include "inc/inc.db.php";
								include "inc/lib_func.php";
								$link=koneksi_db();
								$nilai = $_POST['nilai'];
								$sql = "select * from pendaftaran where nilai>=$nilai order by nama_pendaftar asc";
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
				<td width="500"></td>
				<td align="left">
					<form name="form2" method="POST" action="lihatdata_seleksi.php">
					<b>Ulangi Penyeleksian</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="nilai" value="0" size="5" maxlength="50"/>
					<input type="submit" name="kirim" value="Lihat Hasil Seleksi"/></form>
				</td>
			</tr>
			<tr>
				<table border="1" align="center" width="99%" cellpadding="4" cellspacing="4">
					<font size="+4" color="#000000"><b>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Nama Calon Siswa</th>
						<th>Tempat Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Agama</th>
						<th>Lulusan</th>
						<th>Tahun</th>
						<th>Nama Orang Tua</th>
						<th>Alamat</th>
						<th>Telepon</th>
						<th>Nilai</th>
						<th>Scan Ijazah</th>
						<th>Scan SKHUN</th>
						<th>Foto</th>
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
				$agama =  $select_result['agama'];
				$sekolah =  $select_result['sekolah_asal'];
				$tahunajaran = $select_result['tahun_lulus'] ;
				$ortu = $select_result['ortu'] ;
				$alamat = $select_result['alamat'] ;
				$telepon = $select_result['telp'] ;
				$nilai = $select_result['nilai'] ;
				$ijazah=$select_result['ijazah'];
				$skhun=$select_result['skhun'];
				$foto=$select_result['foto'];
				
				echo "<tr><td>$id</td><td>$tanggaldaftar</td><td>$nama</td><td>$ttl</td><td>$jeniskelamin</td><td>$agama</td><td>$sekolah</td><td>$tahunajaran</td>
				<td>$ortu</td><td>$alamat</td><td>$telepon</td><td>$nilai</td>
				<td><img src='ijazah/$ijazah' width=100 height=150></img></td>
				<td><img src='skhun/$skhun' width=100 height=150></img></td>
				<td><img src='foto/$foto' width=100 height=150></img></td>
				</tr>";
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