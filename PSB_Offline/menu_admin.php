<html>
	<head>
		<title>ADMIN SMA KARTIKA SILIWANGI 1</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<ul id="menu-brown" class="nav-main">		
		<?php 
		if(isset($_SESSION['login_member']))
		{
			if(($_SESSION['login_member']==true) && ($_SESSION['aktif']=="2")){ 
		?>
				<li class="list"><a href="admin.php">Home</a></li>
	  	<?php }	
			if(($_SESSION['login_member']==true) && ($_SESSION['aktif']=="2")){ 
		?>
				<li class="list"><a href="#">Input Data</a>
					<ul class="nav-sub" type="disc">
						<li><a href="tambah_operator.php">Input Operator</a></li>
						<li><a href="psb_admin.php">Input Calon Siswa</a></li>
					</ul>
				</li>
				<li class="list"><a href="#">Lihat Data</a>
					<ul class="nav-sub" type="disc">
						<li><a href="data_operator.php">Data Operator</a></li>
						<li><a href="lihatdata_admin.php">Data PSB</a></li>
						<li><a href="lihatdata_hasil.php">Data Siswa Baru</a></li>
					</ul>
				</li>
		<?php }
			if(($_SESSION['login_member']==true) && ($_SESSION['aktif']=="1")){ 
		?>
				<li class="list"><a href="logout.php">Log Out</a></li>
		<?php } else if(($_SESSION['login_member']==true) && ($_SESSION['aktif']=="3")) {?>
	  			<li class="list"><a href="logout.php">Log Out Operator</a></li>
		<?php } ?>
		<?php if(($_SESSION['login_member']==true) && ($_SESSION['aktif']=="2")){ ?>
				<li class="list"><a href="logout.php">Log Out</a></li>
		<?php } ?>
		</ul>
		<?php
		} 
		else
		{
		?>
			<li class="list"><a href="home.php">Log In Admin</a></li
		<?php
		}
		?>
	</body>
</html>