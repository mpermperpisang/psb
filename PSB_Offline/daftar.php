<?php
	include("library.php");
	include "inc/inc.db.php";
	include "inc/lib_func.php";
	session_start();
?>	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="text/css" href="school.brown.css" rel="stylesheet">
		<style tyle="text/css">
			#myGallery img {
			max-height:650px;
			}		
		</style>		
		<title>SMA KARTIKA SILIWANGI 1</title>
    </head>
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/js_form_daftar.js"></script>
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
						<h1>Pendaftaran Akun PSB</h1>
						<table width="100%">
							<form action="" method="post" name="form_reg">
	<table width="200" border="0" cellspacing="2" cellpadding="2">
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><input name="username" type="text" class="input_username" /></td>
      </tr>
      <tr>

        <td>Email</td>
        <td>:</td>
        <td>
        	<input name="email" type="text" class="input_email"/>
        </td>
      </tr>
      <tr>
        <td>Password</td>

        <td>:</td>
        <td><input name="password" type="password" class="input_password" /></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><input type="submit" class='tombol' value="Daftar Akun" onclick="return aksi_daftar();"/>
        <input type="button" onClick="javascript:history.back()" value="Batal" class="tombol" title="Kembali Ke Halaman Sebelumnya"></td>
      </tr>
	</table>

</form>

							</table><br>
							<div class="tampil_info">

</div>
						</div>	
					</div>
					<div id="right-side">
						<div id="login-box">
							<?php include ('menu_login.php'); ?>
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