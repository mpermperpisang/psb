<?php
	include("library.php");
	session_start();
	if(($_SESSION['login_member']==true)&&
	   ($_SESSION['aktif']=="1")|| 
	   ($_SESSION['login_member']==false) ){
?>	<html>
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
						<h1>Profil</h1>	
						<font size="-1"><p align="justify">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SMA Kartika Siliwangi 1 termasuk instansi pendidikan di bidang formal. Sekolah ini beralamat di Jalan Taman Pramuka No. 163 Bandung 40114 dan mempunyai nomor telepon (022) 7205802. SMA ini termasuk ke dalam yayasan Kartika Jaya XIX cabang Siliwangi yang banyak menaungi lembaga pendidikan lainnya yang bernama sama dengan SMA Kartika Siliwangi 1 hanya saja dengan penulisan nomor yang berbeda-beda. SMA Kartika Siliwang 1 yang dulunya bernama SMA Kartika III 1 dan SMA Kartika Chandra, berdiri sejak tahun 1979.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sejak tahun 2009 SMA Kartika Siliwangi 1 menjadi Rintisan Sekolah Standar Nasional (RSSN) sehingga arah dan tujuan pola pendidikan baik intra maupun ekstra lebih terarah untuk menghasilkan lulusan yang siap melanjutkan ke jenjang pendidikan yang lebih tinggi maupun mampu bersaing dalam dunia kerja.
							</p></font>			
							<center><img src="gambar/denah_ruang.jpg" class="zoom" alt="denah sekolah" height="350" width="300" title="Denah SMA Kartika Siliwangi 1"></center>		
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