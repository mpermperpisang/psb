<?php		
	function form_login(){
	?>
		<form method=post action="login.php">
			<table border=0 width="150" height="50" align="center">
				<tr>
					<td align="center"><font size="-1">Username</font><input type="text" name="username" size="20" maxlength="30"></td>
				</tr>
				<tr>
					<td height="10"></td>
				</tr>
				<tr>
					<td align="center"><font size="-1">Password</font><input type="password" name="password" size="20" maxlength="30"></td>
				</tr>
				<tr>
					<td height="10"></td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" name="tblmember" value="Login" title="Log In "/>
						<input type="button" value="Daftar" title="Daftar Akun" onClick="window.location.href='daftar.php'" align="right">
					</td>
				</tr>
				<tr>
					<td><br /></td>
				</tr>
			</table>
		</form>
	<?php
	}
	
	function tombol_logout(){
	?>
		<table border=0 width="200" height="200" align="center" bgcolor="#FFFFFF">
			<tr>
				<td>
					<a href="logout.php" title="Log Out">
						<img src="image/go-green-and-create-a-website-that-is-enviroment-friendly.jpg" width="200" height="200" border="0" />
					</a>
				</td>
			</tr>
		</table>
	<?php
	}
	
function menu_member()
	{
		$telahlogin=(isset($_SESSION['login_member']));
		if($telahlogin==false)
			form_login();
		else
			tombol_logout();
	}
	
	function koneksi_db(){
		$host = "localhost";
		$database = "smaks101_kartikasiliwangi";
		$user = "root";
		$password = "";
		$link=mysql_connect($host,$user,$password);
		mysql_select_db($database,$link);
		if(!$link)
			echo "Error : ".mysql_error();
		return $link;
	}  
?>