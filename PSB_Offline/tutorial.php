<?php
	include("library.php");
	session_start();
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
						<h1>Cara Mengisi Formulir Pendaftaran Calon Siswa Baru</h1>
							<font size="-1"><p align="justify">
								1. Silahkan <b>LOGIN</b> atau <a href="daftar.php"><b>DAFTAR</b></a> sebagai anggota.<br><br>
								2. Isi form berupa username, password, nama dan alamat.<br><br>
								3. Lalu login dengan username dan password yang telah didaftarkan.<br><br>
								4. Pilih Menu <a href="psb.php"><b>ISI FORMULIR PENDAFTARAN</b></a>.<br><br>
								5. Isi formulir pendaftaran siswa baru dan upload hasil scan ijazah, SKHUN dan foto calon siswa baru. Foto harus berwarna dan formal.<br><br>
								6. Tekan tombol <b>DAFTAR SEKARANG</b>.<br><br>
								7. Anda telah mendaftar sebagai calon siswa baru di SMA Kartika Siliwangi 1.<br><br>
								8. Download data formulir, print ukuran kertas A5 bawa hasil print formulir saat tes di sekolah.<br><br><br><br>
								
								* Anda akan melihat jumlah siswa yang telah mendaftar di SMA Kartika Siliwangi 1.<br><br>
								* Masukkan nomor telepon atau handphone untuk mencari dan mengupdate data anda.<br><br>
								* Hasil scan ijazah, SKHUN dan foto calon siswa diberi nama file "namalengkapanda_nomorteleponanda.jpg"
							</p></font>						
					</div>	
				</div>
				<div id="right-side">
					<div id="login-box">
						<?php include ('menu_login.php'); ?>
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