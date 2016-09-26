<?php
	include("library.php");
	session_start();
	if(($_SESSION['login_member']==true)&& 
	  ($_SESSION['aktif']=="2")){
?>	
	<html>
		<head>
			<link type="text/css" href="school.brown.css" rel="stylesheet">
			<style tyle="text/css">
				#myGallery img {
				max-height:650px;
				}		
			</style>		
			<title>ADMIN SMA KARTIKA SILIWANGI 1</title>
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
				<?php include ('menu_admin.php'); ?></div>
				</div>
			</center>	
			<center>
				<div id="content">
					<div id="left-side">
						<div id="profile">
							<h1>Halaman Admin</h1>						
						</div>	
					</div>
					<div id="right-side">
						<div id="login-box">
							<div class="header">
								User Login
							</div>
							
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
		header("Location: belum_login_admin.php");
	}
?>