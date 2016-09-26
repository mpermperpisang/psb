<?php
	include("library.php");
	session_start();			
				
				if(($_SESSION['login_member']==true)&& 
	   			($_SESSION['aktif']=="1"))
				{
											
						include("redirectview_siswa.php");
						echo "<meta http-equiv='refresh' content='1;url=home.php'>";
					
				}
				else if(($_SESSION['login_member']==true)&& 
	   			($_SESSION['aktif']=="2"))
	   			{
						include("redirectview_admin.php");
						echo "<meta http-equiv='refresh' content='1;url=admin.php'>";
				}
				else if(($_SESSION['login_member']==true)&& 
	   			($_SESSION['aktif']=="3"))
				{
						include("redirectview_operator.php");
						echo "<meta http-equiv='refresh' content='1;url=operator.php'>";
				}
				else if($_SESSION['login_member']==false)
				{
						header("Location: home.php");
				}			
?>