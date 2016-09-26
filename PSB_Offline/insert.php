<?php
	include("library.php");
	session_start();
	if(($_SESSION['login_member']==true)&& 
	  ($_SESSION['aktif']=="1")){

include "koneksi.php";
	include "inc/inc.db.php";
	include "inc/lib_func.php";
	if(($_FILES['ijazah']['error']==0) && ($_FILES['foto']['error']==0) && ($_FILES['skhun']['error']==0))
	{
		$link=koneksi_db();
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
		$ijazah=$_FILES['ijazah']['name'];
		$namaijazahbaru="ijazah/".$ijazah;
		$foto=$_FILES['foto']['name'];
		$namafotobaru="foto/".$foto;
		$skhun=$_FILES['skhun']['name'];
		$namaskhunbaru="skhun/".$skhun;		
		
		if(empty($nama) || empty($sekolah) || empty($ortu) || empty($telepon) || empty($nilai))
		{
   			echo "<META HTTP-EQUIV=Refresh CONTENT='2; URL=insert.php'>";
        }
		else if((move_uploaded_file($_FILES['ijazah']['tmp_name'], $namaijazahbaru)==true)
			&& (move_uploaded_file($_FILES['foto']['tmp_name'], $namafotobaru)==true)
			&& (move_uploaded_file($_FILES['skhun']['tmp_name'], $namaskhunbaru)==true))
		{
				$query_insert = "insert into pendaftaran(tanggal_daftar, nama_pendaftar,
								ttl, jns_kelamin, agama, sekolah_asal, tahun_lulus, ortu, alamat, 
								telp, nilai, ijazah, foto, skhun, uang_daftar, uang_masuk, tgl_tes, kelas, petugas)
								values('$tanggal_daftar', '$nama', '$ttl', '$jenis_kelamin', '$agama',
								'$sekolah', '$tahun_ajaran', '$ortu', '$alamat',  
								'$telepon', '$nilai', '$ijazah', '$foto', '$skhun', 'BELUM', 'BELUM', 'Tunggu Pengumuman Selanjutnya', 'X-..', '-');";
				$res=mysql_query($query_insert);
				if($res)
				{
				include("redirectview_tambah.php"); 
				echo "<META HTTP-EQUIV=Refresh CONTENT='2; URL=lihatdata.php'>";
				}
		}
	}
	else
	{
?>
	<html>
		<head>
			<link type="text/css" href="school.brown.css" rel="stylesheet">
			<style tyle="text/css">
				#myGallery img {
				max-height:650px;
				}		
			</style>		
			<title>SMA KARTIKA SILIWANGI 1</title>
			<script type="text/javascript" src="jquery.js"></script>
		</head>
		<body>
			<center>
				<div id="top-header"></div>	
				<div id="header-brown">
					<img src="gambar/50268_51568206748_6483739_n.jpg" title="Logo SMA Kartika Siliwangi 1"><br><br>
					<h1><a href="index.php">SMA KARTIKA SILIWANGI 1 BANDUNG</a></h1>
					<h4><font color="#FFFFFF">Jalan Taman Pramuka No. 163 telp (022) 7205802 Bandung 40114</font></h4>
					<div class="sub">
				<?php include ('menu.php'); ?></div>
				</div>
			</center>	
			<center>
				<div id="content">
					<div id="left-side">
						<div id="profile">
							<h1>Formulir Pendaftaran Siswa Baru</h1>
							<blink>Mohon semua data diisi!</blink>
								<table width="100%" align="center">
									<form action="insert.php" enctype="multipart/form-data" method="POST">
										<table border='1' width='75%' cellpadding='3'  cellspacing='3' align="center" bgcolor="#FFFFF">
											<tr>
												<td><b>Nama Lengkap*</b></td>
												<td>
													<input type="text" name="nama" size="30" maxlength="50"  value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : '';?>" />
												</td>
											</tr>
											<tr>
												<td><b>Jenis Kelamin</b></td>
												<td>
													<input type="radio" name="jenis_kelamin" value="Laki-laki" checked="checked"/><label for="jenis_kelamin">Laki-laki</label>
													<input type="radio" name="jenis_kelamin" value="Perempuan"/><label for="jenis_kelamin">Perempuan</label>
												</td>
											</tr>
											<tr>
												<td><b>Tempat Tanggal Lahir</b></td>
												<td>
													<input type="text" name="ttl" size="30" maxlength="50" value="<?php echo isset($_POST['ttl']) ? $_POST['ttl'] : '';?>"/>
												</td>
											</tr>
											<tr>
												<td><b>Agama*</b></td>
												<td>
													<input type="text" name="agama" size="30" maxlength="50" value="<?php echo isset($_POST['agama']) ? $_POST['agama'] : '';?>"/>
												</td>
											</tr>
											<tr>
												<td><b>Lulusan Sekolah*<b/></td>
												<td>
													<input type="text" name="sekolah" size="30" maxlength="50" value="<?php echo isset($_POST['sekolah']) ? $_POST['sekolah'] : '';?>"/>
												</td>
											</tr>
											<tr>
												<td><b>Tahun Lulus</b></td>
												<td>
													<select name="tahun_ajaran">
														<option value="">Pilih Tahun Ajaran</option>
														<option value="2013">2013</option>
														<option value="2014">2014</option>
														<option value="2015">2015</option>
														<option value="2016">2016</option>
														<option value="2017">2017</option>
														<option value="2018">2018</option>
														<option value="2019">2019</option>
														<option value="2020">2020</option>
														<option value="2021">2021</option>
														<option value="2022">2022</option>
														<option value="2023">2023</option>
														<option value="2024">2024</option>
														<option value="2025">2025</option>
														<option value="2026">2026</option>
														<option value="2027">2027</option>
														<option value="2028">2028</option>
														<option value="2029">2029</option>
														<option value="2030">2030</option>
													</select>
												</td>
											</tr>
											<tr>
												<td><b>Nama Wali Murid*</b></td>
												<td>
													<input type="text" name="ortu" size="30" maxlength="50" value="<?php echo isset($_POST['ortu']) ? $_POST['ortu'] : '';?>"/>
												</td>
											</tr>
											<tr>
												<td><b>Alamat</b></td>
												<td>
													<textarea name="alamat" cols="30" rows="4"></textarea>
												</td>
											</tr>
											<tr>
												<td><b>No Telepon*</b></td>
												<td>
													<input type="text" name="telepon" size="30" maxlength="50" value="<?php echo isset($_POST['telepon']) ? $_POST['telepon'] : '';?>"/>
												</td>
											</tr>
											<tr>
												<td><b>Nilai UN*</b></td>
												<td>
													<input type="text" name="nilai" size="30" maxlength="50" value="<?php echo isset($_POST['nilai']) ? $_POST['nilai'] : '';?>"/>
												</td>
											</tr>
											<tr>
												<td><b>Scan Ijazah</b> (nama file namalengkap_nomortelepon.jpg)<b>*</b></td>
												<td><input type=file name="ijazah" /></td>
											</tr>
											<tr>
												<td><b>Scan SKHUN</b> (nama file namalengkap_nomortelepon.jpg)<b>*</b></td>
												<td><input type=file name="skhun"></td>
											</tr>
											<tr>
												<td><b>Foto Formal</b> (nama file namalengkap_nomortelepon.jpg)<b>*</b></td>
												<td><input type=file name="foto"></td>
											</tr>
											<tr>
												<td colspan="2" align="center">
													<input type="submit" name="kirim" value="Daftar Sekarang"/>
												</td>
											</tr>
										</table>
									</form>
								</table>
								<h3><b>*wajib diisi</b></h3>					
						</div>	
					</div>
					<div id="right-side">
						<div id="login-box">
							<?php include ('menu_login.php'); ?>
						</div>
						<div id="adv"></div>
					</div>	
						<div id="adv"></div>
					</div>	
					<div class="ischool-clear"></div>
				</div>	
			</center>	
			<center>
				<div id="ischool-footer">		
					<div id="footer-left"></div>		
					<div id="footer-right"></div>
				</div>
			</center>
		</body>
	</html>
<?php
    }
?>

<?php
	}
	else
	{
		header("Location: belum_login.php");
	}
?>