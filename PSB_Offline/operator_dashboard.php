<?php
	session_start();				
	include "koneksi.php";
	include("library.php");
	include "inc/inc.db.php";
	include "inc/lib_func.php";
	if(($_SESSION['login_member']==true)&& 
	  ($_SESSION['aktif']=="3")){
?>
	<html>
		<head>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/highcharts.js" type="text/javascript"></script>
<script type="text/javascript">
	var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },   
         title: {
            text: 'Grafik Penerimaan Siswa Baru'
         },
         xAxis: {
            categories: ['Nama Kegiatan']
         },
         yAxis: {
            title: {
               text: 'Jumlah Calon Siswa'
            }
         },
              series:             
            [
            <?php 
        	include('koneksi.php');
           $sql   = "SELECT coba FROM coba_dashboard";
            $query = mysql_query( $sql )  or die(mysql_error());
            while( $ret = mysql_fetch_array( $query ) ){
            	$merek=$ret['coba'];                     
                 $sql_jumlah   = "SELECT jumlah FROM coba_dashboard WHERE coba='$merek'";        
                 $query_jumlah = mysql_query( $sql_jumlah ) or die(mysql_error());
                 while( $data = mysql_fetch_array( $query_jumlah ) ){
                    $jumlah = $data['jumlah'];                 
                  }             
                  ?>
                  {
                      name: '<?php echo $merek; ?>',
                      data: [<?php echo $jumlah; ?>]
                  },
                  <?php } ?>
            ]
      });
   });	
</script>
			<link type="text/css" href="school.brown.css" rel="stylesheet">
			<style tyle="text/css">
				#myGallery img {
				max-height:650px;
				}		
			</style>		
			<title>OPERATOR SMA KARTIKA SILIWANGI 1</title>
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
				<?php include ('menu_operator.php'); ?></div>
				</div>
			</center>	
			<center>
				<div id="content">
					<div id="left-side">
						<div id="profile">
							<h1>Dashboard Penerimaan Siswa Baru</h1>
							<div id='container'></div>				
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
	else {
		header("Location: belum_login_operator.php");
	}
?>