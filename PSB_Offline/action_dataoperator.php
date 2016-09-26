<?php
	session_start();
	if(($_SESSION['login_member']==true)&& 
	  ($_SESSION['aktif']=="2")){
		include "koneksi.php";
		include("library.php");
		include "inc/inc.db.php";
		include "inc/lib_func.php";	
		$action = strtolower($_POST['action']);
		$id = $_REQUEST['id'];		
		if ($action == "delete")
		{
			echo "Anda memilih aksi delete pada record $id... <br/>";
			$delete = "delete from user where id = '$id'";
			$delete_query = mysql_query($delete);
			if ($delete_query) echo "Record $id berhasil dihapus!<br><META HTTP-EQUIV=Refresh CONTENT='2; URL=data_operator.php'>";
			else echo "Gagal menghapus record<br><META HTTP-EQUIV=Refresh CONTENT='2; URL=data_operator.php'>";
		}		
		else 
		{
			$sql = "select * from user where id='$id'";
			$res = mysql_query($sql);
			$banyakrecord=mysql_num_rows($res);
			while($select_result = mysql_fetch_array($res))
				{
					$id = $select_result['id'] ;
					$username = $select_result['username'];
					$nama = $select_result['nama'];
					$email = $select_result['email'];
					$telp = $select_result['telp'];
	?><title>ADMIN SMA KARTIKA SILIWANGI 1</title>
	<form action="update_dataoperator.php" method="POST">
		<table border='1' width='25%' cellpadding='3'  cellspacing='3' align='center' bgcolor="#FFFFF">
			<caption><h2>Data Operator</h2></caption>
			<input type="hidden" name="id" size="30" value="<?php echo $id ; ?>" maxlength="50"/>
			<tr>
				<td><b>Username</b></td>
				<td><input type="text" name="username" value="<?php echo $username ; ?>" size="30" maxlength="50"/></td>
			</tr>
			<tr>
				<td><b>Nama</b></td>
				<td><input type="text" name="nama" value="<?php echo $nama ; ?>" size="30" maxlength="50"/></td>
			</tr>
			<tr>
				<td><b>Email</b></td>
				<td><input type="text" name="email" value="<?php echo $email ; ?>" size="30" maxlength="50"/></td>
			</tr>
			<tr>
				<td><b>No Telp</b></td>
				<td><input type="text" name="telp" value="<?php echo $telp ; ?>" size="30" maxlength="50"/></td>
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
	else
	{
		header("Location: belum_login_admin.php");
	}
?>