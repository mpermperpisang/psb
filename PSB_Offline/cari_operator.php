<title>OPERATOR SMA KARTIKA SILIWANGI 1</title>
<?php
	include "koneksi.php";
	include("library.php");
	include "inc/inc.db.php";
	include "inc/lib_func.php";	
	$telp=$_POST["telepon"];
	$link=koneksi_db();
	$sql = "select * from pendaftaran where telp='$telp' order by id_daftar desc";
	$res = mysql_query($sql);
	$banyakrecord=mysql_num_rows($res);
	if($banyakrecord>0)
	{
		while($select_result = mysql_fetch_array($res))
		{
			$id = $select_result['id_daftar'] ;
			$tanggaldaftar = $select_result['tanggal_daftar'] ;
			$nama = $select_result['nama_pendaftar'] ;
			$ttl = $select_result['ttl'] ;
			$jeniskelamin = $select_result['jns_kelamin'] ;
			$agama = $select_result['agama'] ;
			$sekolah =  $select_result['sekolah_asal'];
			$tahunajaran = $select_result['tahun_lulus'] ;
			$ortu = $select_result['ortu'] ;
			$alamat = $select_result['alamat'] ;
			$nilai = $select_result['nilai'] ;
			$uang_daftar = $select_result['uang_daftar'] ;
			$petugas = $select_result['petugas'] ;
		}
		echo"
							<form method=\"POST\" action=\"action_operator.php?id=$id\">
			<table border=\"1\" width=\"35%\" cellpadding=\"2\" cellspacing=\"2\" align=\"center\" bgcolor=\"#FFFFF\">
				<caption>
					<h2>Hasil Pencarian Data Calon Siswa Baru</h2>
				</caption>
				<tr>
					<td>Nomor ID</td>
					<td>
						<input align=\"center\" type=\"text\" name=\"id\" size=\"1\" disabled=\"disabled\" maxlength=\"50\" value=$id>
					</td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td>
						$nama
					</td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>
						$jeniskelamin
					</td>
				</tr>
				<tr>
					<td>Agama</td>
					<td>
						$agama
					</td>
				</tr>
				<tr>
					<td>Lulusan Sekolah</td>
					<td>
						$sekolah
					</td>
				</tr>
				<tr>
					<td>Tahun Lulus</td>
					<td>
						$tahunajaran
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>
						$alamat
					</td>
				</tr>
				<tr>
					<td>No Telepon</td>
					<td>
						$telp
					</td>
				</tr>				
				<tr>
					<td>Nilai</td>
					<td>
						$nilai
					</td>
				</tr>
				<tr>
					<td>Pembayaran Pendaftaran</td>
					<td>
						$uang_daftar
					</td>
				</tr>			
				<tr>
					<td>Petugas</td>
					<td>
						$petugas
					</td>
				</tr>
				<tr>
					<td colspan=\"2\" align=\"center\">
								<input type=\"hidden\" value=\"$id\" name=\"id\">
								<input type=\"submit\" name=\"action\" value=\"Update Data\">
							</form>
							<form method=\"POST\" action=\"download.php?id=$id\">
								<input type=\"hidden\" value=\"$id\" name=\"id\"><center>
								<input type=\"submit\" name=\"action\" value=\"Download Data Formulir\"></td>
							</form>
					</td>
				</tr>
			</table>";
	}
	else
	{
		include("redirectview_notfound.php"); 
		echo "<META HTTP-EQUIV=Refresh CONTENT='2; URL=lihatdata_operator.php'>";	
	}
?>