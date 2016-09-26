<?php
	include("library.php");
	session_start();
	if(($_SESSION['login_member']==true)&& 
	  ($_SESSION['aktif']=="2")){
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
		<title>ADMIN SMA KARTIKA SILIWANGI 1</title>
		<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/js_form_operator.js"></script>
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
						<h1>Data Operator</h1>
						<?php
						include "inc/inc.db.php";
						include "inc/lib_func.php";
						$link=koneksi_db();
						$sql = "select * from user where aktif='3'";
						$res = mysql_query($sql);
								$banyakrecord=mysql_num_rows($res);
								if($banyakrecord>0)
								{
								?>
									<h3 align="left">Data operator ditemukan sebanyak <b><?php echo $banyakrecord;?></b> data</h3>
									<br>
								<?php 
								}
								else
								{
								?>
									<div align="left">Data operator tidak ditemukan!.</div>		
								<?php
								}
					?>	
						
				<table border="1" align="center" width="100%" cellpadding="4" cellspacing="4">
					<font size="+4" color="#000000"><b>
					<tr>
						<th>Nama</th>
						<th>Username</th>
						<th>Email</th>
						<th>No. Telp</th>
						<th>Pilihan</th>
					</tr>
					</b></font>			
					<?php					
					while($select_result = mysql_fetch_array($res))
					{					
						$id = $select_result['id'] ;
						$username = $select_result['username'] ;
						$email = $select_result['email'] ;
						$nama = $select_result['nama'] ;
						$telp = $select_result['telp'] ;					
						echo "<tr><td>$nama</td><td>$username</td><td>$email</td><td>$telp</td>
						<td>						
								<form method=\"POST\" action=\"action_dataoperator.php?id=$id\">
									<input type=\"hidden\" value=\"$id\" name=\"id\"><center>
									<input type=\"submit\" name=\"action\" value=\"Update\"><br />
									<input type=\"submit\" name=\"action\" value=\"Delete\"><br />
								</form>
						</td></tr>";
					}					
					?>
				</table>
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
				<div id="footer-left">
					<div id="copy"></div>
				</div>		
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