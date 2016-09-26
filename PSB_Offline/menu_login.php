<div class="header">		
	User Login
	<p>
	<?php 
		if(isset($_SESSION['login_member']))
		{
			if(($_SESSION['login_member']==true)&&($_SESSION['aktif']=="1")&&($_SESSION['username']))
				{			
					echo "Selamat Datang, ".$_SESSION['nama'];
				}
		} 
		else
		{
			echo "Selamat Datang, Tamu";
		}
	?>
	</p>
</div>
<br /><br /><br />
<div id="menu">
	<table width="100" height="100" align="center">
		<tr>
			<td>
				<center><a href="tutorial.php"><img src="gambar/psb online.jpg" width=160 height=80/></a></center>
			</td>
		</tr>
		<?php if(isset($_SESSION['login_member'])){ ?>
			<tr>
				<td>
					<form method=post action="logout.php">
						<table border=0 width="100" height="100">
							<tr>
								<td align="center">
									<input type="submit" name="tblmember" value="Logout" title="Log Out"/>
								</td>
							</tr>
							<tr>
								<td><br /></td>
							</tr>
						</table>
					</form>
				</td>
			</tr>
		<?php }
		else {
		?>
			<tr>
			<td>
				<?php form_login(); ?>
				<a href="lostpassword.php"><font size="-1"><center>Forgot Password?</center></font></a><br />
			</td>
		</tr>			
		<?php
		}
		?>
	</table>
</div>