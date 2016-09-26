<?php 
	session_start();
	include("library.php");
?>	
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
					<div id="profile2">
						<h1>Home</h1>		
					</div>
					<p align="center"><img src="gambar/Brosur SMA KARTIKA 2012 hal1 - Copy.jpg" height="715" width="335"></p>
				</div>
					<div id="right-side">
						<div id="login-box">
							<?php include ('menu_login.php'); ?>
							<blink>Anda belum mengaktifasi akun lewat email !!</blink>
						</div>
						<div id="adv">
					</div>
				</div>
	
	<div class="ischool-clear"></div>
	</div>
	
	</center>
	
	<center>
	<div id="ischool-footer">		
		<div id="footer-left">
			
			<div id="copy"></div>

		</div>
		
		<div id="footer-right">
		</div>
	</div>
	</center>
</body></html>