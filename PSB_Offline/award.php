<?php
	include("library.php");
	session_start();
	if(($_SESSION['login_member']==true)&&
	   ($_SESSION['aktif']=="1")|| 
	   ($_SESSION['login_member']==false) ){
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
						<h1>Prestasi Akademis dan Non Akademis</h1>	
							<font size="-1"><p align="justify">
								Siswa SMA Kartika Siliwangi 1 Bandung banyak berprestasi dalam bidang akademik,
								yaitu lulusannya<br>banyak diterima di PTN melalui PMDK maupun USM dan AKMIL/AKPOL.
								Dalam bidang non<br>akademik diantaranya :<br><br>
								- Juara Harapan II Paskibra Kota Bandung<br><br>
								- Juara Harapan I LTUB Tingkat Kota Bandung<br><br>
								- Juara II Lomba Paskibra Dinas Kota Bandung<br><br>
								- Juara II Lomba PBB Tingkat SMA SeJABAR-BANTEN (UNWIM)<br><br>
								- Pendidikan Lanjutan PA-Pendidikan Kopasus Situ Lembang<br><br>
								- Juara Umum Lintas Alam dan Survey Aplikasi Teknik Geodesi ITENAS<br><br>
								- Juara I Putra Lintas Alam (GRIBAPALA)<br><br>
								- Juara I Putra dan Juara II Putri Lomba Lintas Alalm (KALPATARU)<br><br>
								- Group Arumba Pisah-Sambut PANGDAM III Siliwangi<br><br>
								- Arasement Pinunjul Vocal Group Lagu Sunda SeJABAR-BANTEN DISPUDMAR Prov JABAR<br><br>
								- Harapan I Lagu Perjuangan Sekota Bandung <br><br>
								- Juara I Nasional Lomba Karya Tulis (Zevit Grow)<br><br>
								- Harapan I Lagu Perjuangan Sekota Bandung<br><br>
								- Juara II Sepak Bola Kota Bandung<br><br>
								- Juara I Cerita dan Skenario (KRESINDO JABAR)<br><br>
								- Juara II Volly Ball Putri (PERPUSNAS KODA BDG)<br><br>
								- Juara I Sepak Bola POP (Seorang siswa masuk Tim Persib Junior)<br><br>
								- Juara I Sepak Bola POP (Siswa menjadi Tim Inti POWIL JABAR)<br><br>
								- Olympiade Fisika dan Biologi<br><br>
								- Lomba-lomba Karya Tulis (KIR)<br><br>
								- Juara III Lompat Tinggi O2SN Kota Bandung<br><br>
								- Juara III Tenis Meja O2SN Kota Bandung<br><br>
								- Juara I & II Lomba Bahasa Jepang SMA/SMK Sekota Bandung
							</p></font>
							<p align="center">
							<img src="gambar/Brosur SMA KARTIKA 2012 hal1 - Copy (11).jpg" class="zoomzoom" width="264" height="200">
							<img src="gambar/Brosur SMA KARTIKA 2012 hal1 - Copy (12).jpg" class="zoomzoom" width="264" height="200"><br>
							<img src="gambar/Brosur SMA KARTIKA 2012 hal1 - Copy (13).jpg" class="zoomzoom" width="264" height="200">
							<img src="gambar/Brosur SMA KARTIKA 2012 hal1 - Copy (14).jpg" class="zoomzoom" width="264" height="200"><br>
							<img src="gambar/Brosur SMA KARTIKA 2012 hal1 - Copy (15).jpg" class="zoomzoom" width="264" height="200">
							<img src="gambar/Brosur SMA KARTIKA 2012 hal1 - Copy (2).jpg" class="zoomzoom" width="264" height="200">
							</p>						
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
<?php
	}
	else
	{
		header("Location: belum_login.php");
	}
?>