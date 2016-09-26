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
		<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="js/js_form_login.js"></script>
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
					<div id="profile2">
						<h1>Jadwal Penerimaan Siswa Baru</h1>	
						- Pendaftaran mulai 28 Mei 2012.<br><br>
						- Mengisi formulir pendaftaran di website SMA Kartika Siliwangi 1 lalu print formulir.<br><br>
						- Bawa formulir pada saat tes wawancara di sekolah serta membayar uang pendaftaran sebesar Rp. 75.000,-<br><br>
						- Wawancara disesuaikan dengan jadwal (diwajibkan memakai seragam SMP).<br><br>
						- Waktu wawancara mulai pukul 08.00 - 14.00 WIB bertempat di SMA Kartika Siliwangi 1 Bandung Jl. Taman Pramuka No. 163 Bandung Telp. (022) 7205802.
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