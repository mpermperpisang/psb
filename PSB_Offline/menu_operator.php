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
			if(($_SESSION['login_member']==true) && ($_SESSION['aktif']=="3")){ ?>
				<li class="list"><a href="operator.php">Home</a></li>
	  	<?php }
			if(($_SESSION['login_member']==true) && ($_SESSION['aktif']=="3")){ ?>
				<li class="list"><a href="#">Input Data</a>
					<ul class="nav-sub" type="disc">
						<li><a href="psb_operator.php">Input Calon Siswa</a></li>
					</ul>
				</li>
				<li class="list"><a href="#">Lihat Data</a>
					<ul class="nav-sub" type="disc">
						<li><a href="lihatdata_operator.php">Data PSB</a></li>
						<li><a href="lihatdata_hasil_operator.php">Data Siswa Baru</a></li>
						<li><a href="operator_dashboard.php">Dashboard</a></li>
					</ul>
				</li>
		<?php }
			if(($_SESSION['login_member']==true) && ($_SESSION['aktif']=="1")){ ?>
				<li class="list"><a href="logout.php">Log Out</a></li>
		<?php } else if(($_SESSION['login_member']==true) && ($_SESSION['aktif']=="2")) {?>
	  			<li class="list"><a href="logout.php">Log Out Admin</a></li>
	  	<?php }
			if(($_SESSION['login_member']==true) && ($_SESSION['aktif']=="3")){ ?>
				<li class="list"><a href="logout.php">Log Out</a></li>
		<?php } ?>
		</ul>
		<?php
		} 
		else
		{
		?>
			<li class="list"><a href="home.php">Log In Operator</a></li>
		<?php
		}
	?>
	</body>
</html>