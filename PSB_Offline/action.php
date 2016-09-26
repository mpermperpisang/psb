<?php
	session_start();
	if(($_SESSION['login_member']==true)&& 
	  ($_SESSION['aktif']=="1")){
		include "koneksi.php";
		include("library.php");
		include "inc/inc.db.php";
		include "inc/lib_func.php";	
		$action = strtolower($_POST['action']);
		$id = $_REQUEST['id'];	
			
		if ($action == "delete")
		{
			echo "Anda memilih aksi delete pada record $id... <br/>";
			$delete = "delete from registrasi where id_daftar = '$id'";
			$delete_query = mysql_query($delete);
			if ($delete_query) echo "Record $id berhasil dihapus!<br><META HTTP-EQUIV=Refresh CONTENT='2; URL=lihatdata.php'>";
			else echo "Gagal menghapus record<br><META HTTP-EQUIV=Refresh CONTENT='2; URL=lihatdata.php'>";
		}	
			
		else 
		{
			$sql = "select * from pendaftaran where id_daftar = '$id'";
			$res = mysql_query($sql);
			$banyakrecord=mysql_num_rows($res);
			while($select_result = mysql_fetch_array($res))
				{
					$id = $select_result['id_daftar'] ;
					$nama = $select_result['nama_pendaftar'];
					$ttl = $select_result['ttl'] ;
					$jeniskelamin = $select_result['jns_kelamin'] ;
					$agama = $select_result['agama'];
					$sekolah = $select_result['sekolah_asal'];
					$tahun_ajaran = $select_result['tahun_lulus'];
					$ortu = $select_result['ortu'] ;
					$alamat = $select_result['alamat'];
					$telepon = $select_result['telp'];
					$uang_daftar = $select_result['uang_daftar'];
					$nilai = $select_result['nilai'];
					$ijazah=$select_result['ijazah'];
					$foto=$select_result['foto'];
					$skhun=$select_result['skhun'];
	?><title>SMA KARTIKA SILIWANGI 1</title>
		<form action="update.php" method="POST">
			<table border='1' width='45%' cellpadding='3'  cellspacing='3' align='center' bgcolor="#FFFFF">
				<caption><h2>Formulir Pendaftaran Siswa Baru</h2></caption>
				<input type="hidden" name="id" size="30" value="<?php echo $id ; ?>" maxlength="50"/>
				<tr>
					<td><b>Nama Lengkap</b></td>
					<td><input type="text" name="nama" value="<?php echo $nama ; ?>" size="50" maxlength="50"/></td>
				</tr>
				<tr>
					<td><b>Jenis Kelamin</b></td>
					<td>	
						<?php if ($jeniskelamin == 'Laki-laki') { ?>
							<input type="radio" name="jenis_kelamin" value="Laki-laki" checked="checked"/><label for="jenis_kelamin">Laki-laki</label>		
							<input type="radio" name="jenis_kelamin" value="Perempuan"/><label for="jenis_kelamin">Perempuan</label>
						<?php }	else if ($jeniskelamin == 'Perempuan') { ?>
							<input type="radio" name="jenis_kelamin" value="Laki-laki"/><label for="jenis_kelamin">Laki-laki</label>		
							<input type="radio" name="jenis_kelamin" value="Perempuan" checked="checked"/><label for="jenis_kelamin">Perempuan</label>
						<?php } ?>
					</td>
				</tr>
				<tr>
					<td><b>Tempat Tanggal Lahir</b></td>
					<td>
						<input type="text" name="ttl" size="50" maxlength="50" value="<?php echo $ttl ; ?>"/>
					</td>
				</tr>
				<tr>
					<td><b>Agama</b></td>
					<td>
						<input type="text" name="agama" size="50" maxlength="50" value="<?php echo $agama ; ?>"/>
					</td>
				</tr>
				<tr>
					<td><b>Lulusan Sekolah<b/></td>
					<td>
						<input type="text" name="sekolah" size="50" maxlength="50" value="<?php echo $sekolah ; ?>"/>
					</td>
				</tr>
				<tr>
					<td><b>Tahun Lulus</b></td>
					<td>
						<select name="tahun_ajaran">
							<option><?php echo $tahun_ajaran ; ?></option>
							<option value="kosong">-------</option>
							<option value="pilih">Pilih</option>
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
					<td><b>Nama Wali Murid</b></td>
					<td>
						<input type="text" name="ortu" size="50" maxlength="50"  value="<?php echo $ortu ; ?>"/>
					</td>
				</tr>
				<tr>
					<td><b>Alamat</b></td>
					<td>
						<textarea name="alamat" cols="36" rows="5"><?php echo $alamat ; ?></textarea>
					</td>
				</tr>
				<tr>
					<td><b>No Telepon</b></td>
					<td>
						<input type="text" name="telepon" size="50" value="<?php echo $telepon ; ?>" maxlength="50"/>
					</td>
				</tr>
				<tr>
					<td><b>Nilai</b></td>
					<td>
						<input type="text" name="nilai" size="50" value="<?php echo $nilai ; ?>" maxlength="50"/>
					</td>
				</tr>
				<tr>
					<td><b>Biaya Pendaftaran</b></td>
					<td>
						<?php echo $uang_daftar ; ?>
					</td>
				</tr>
				<tr>
					<td><b>Scan Ijazah</b></td>
					<td><?php echo" <img src='ijazah/$ijazah' width=100 height=150><br />"; ?></td>
				</tr>
				<tr>
					<td><b>Scan SKHUN</b></td>
					<td><?php echo" <img src='skhun/$skhun' width=100 height=150><br />"; ?></td>
				</tr>
				<tr>
					<td><b>Foto Formal</b></td>
					<td><?php echo "<img src='foto/$foto' width=100 height=150><br />"; ?></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="kirim" value="Update!"/>
					</td>
				</tr>
			</table>
		</form>	
	<?php
				}
		}
	?>
<?php
	}
	else {
		header("Location: belum_login.php");
	}
?>