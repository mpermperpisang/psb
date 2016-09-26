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
							<h1>Formulir Pendaftaran Siswa Baru</h1>
								<table width="100%" align="center">	
								
									<form action="insert_operator.php" enctype="multipart/form-data" method="POST">
										<table border='1' width='75%' cellpadding='3'  cellspacing='3' align="center" bgcolor="#FFFFF">
											<tr>
												<td><b>Nama Lengkap*</b></td>
												<td>
													<input type="text" name="nama" size="30" maxlength="50"/>
												</td>
											</tr>
											<tr>
												<td><b>Jenis Kelamin</b></td>
												<td>
													<input type="radio" name="jenis_kelamin" value="Laki-laki" checked="checked"/><label for="jenis_kelamin">Laki-laki</label>
													<input type="radio" name="jenis_kelamin" value="Perempuan"/><label for="jenis_kelamin">Perempuan</label>
												</td>
											</tr>
											<tr>
												<td><b>Tempat Tanggal Lahir</b></td>
												<td>
													<input type="text" name="ttl" size="30" maxlength="50"/>
												</td>
											</tr>
											<tr>
												<td><b>Agama</b></td>
												<td>
													<input type="text" name="agama" size="30" maxlength="50"/>
												</td>
											</tr>
											<tr>
												<td><b>Lulusan Sekolah*<b/></td>
												<td>
													<input type="text" name="sekolah" size="30" maxlength="50"/>
												</td>
											</tr>
											<tr>
												<td><b>Tahun Lulus</b></td>
												<td>
													<select name="tahun_ajaran">
														<option value="">Pilih Tahun Ajaran</option>
														<option value="2013">2013</option>
														<option value="2014">2014</option>
														<option value="2015">2015</option>
														<option value="2016">2016</option>
														<option value="2017">2017</option>
														<option value="2018">2018</option>
														<option value="2019">2019</option>
														<option value="2020">2020</option>
														<option value="2021">2021</option>
														<option value="2022">2022</option>
														<option value="2023">2023</option>
														<option value="2024">2024</option>
														<option value="2025">2025</option>
														<option value="2026">2026</option>
														<option value="2027">2027</option>
														<option value="2028">2028</option>
														<option value="2029">2029</option>
														<option value="2030">2030</option>
													</select>
												</td>
											</tr>
											<tr>
												<td><b>Nama Wali Murid*</b></td>
												<td>
													<input type="text" name="ortu" size="30" maxlength="50"/>
												</td>
											</tr>
											<tr>
												<td><b>Alamat</b></td>
												<td>
													<textarea name="alamat" cols="30" rows="4"></textarea>
												</td>
											</tr>
											<tr>
												<td><b>No Telepon*</b></td>
												<td>
													<input type="text" name="telepon" size="30" maxlength="50"/>
												</td>
											</tr>
											<tr>
												<td><b>Nilai UN*</b></td>
												<td>
													<input type="text" name="nilai" size="30" maxlength="50"/>
												</td>
											</tr>
											<tr>
												<td><b>Scan Ijazah*</b> (nama file namalengkap_nomortelepon.jpg)<b>*</b></td>
												<td><input type=file name="ijazah"></td>
											</tr>
											<tr>
												<td><b>Scan SKHUN*</b> (nama file namalengkap_nomortelepon.jpg)<b>*</b></td>
												<td><input type=file name="skhun"></td>
											</tr>
											<tr>
												<td><b>Foto Formal</b> (nama file namalengkap_nomortelepon.jpg)<b>*</b></td>
												<td><input type=file name="foto"></td>
											</tr>
											
								<tr>
									<td><b>Operator*</b></td>
									<td>
										<select name="petugas">
								<?php
								$select = "select * from user where aktif='3'";
								$res = mysql_query($select);
								$banyakrecord=mysql_num_rows($res);
								while($select_result = mysql_fetch_array($res))
								{
								$petugas = $select_result['nama'] ; ?>
								
			
										<option value="<?php echo $petugas ; ?>"><?php echo $petugas ; ?></option>
								<?php } ?>
										</select>
									</td>
								</tr>
											<tr>
												<td colspan="2" align="center">
													<input type="submit" name="kirim" value="Daftar Sekarang" onClick="isiform(this.form)"/>
													<label>
														<input type="reset" name="Reset" id="button" value="Kosongkan Formulir">
													</label>
												</td>
											</tr>
										</table>
									</form>
								</table>
								<h3><b>*wajib diisi</b></h3>					
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