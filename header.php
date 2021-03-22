

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="forum-style.css" />

	<link rel="stylesheet" href="css sliding menu/reset.css">
	<link rel="stylesheet" href="css sliding menu/style.css"> <!-- Resource style -->
	<script src="js sliding menu/modernizr.js"></script> <!-- Modernizr -->

<!------------------------------>
	
<!------------------------------->
</head>

<body>

<!---------------main header------------------->

<div id="top-header">


   <form action='log.php' method='get'>
		<table align='right' class='login_table'>
   			<tr>
            	<td><?php
				
				if(isset($_GET['err']))
				{	
					if($_GET['err']=='eu')
					{
						?><script>alert("enter username.!");</script><?php
					}
					else if($_GET['err']=='ep')
					{
						?><script>alert("enter password.!");</script><?php
					}
					else if($_GET['err']=='upnm')
					{
						?><script>alert("username or password is invalid.!");</script><?php
					}
					else if($_GET['err']=='lf')
					{
						?><script>alert("please Login first.!");</script><?php
					}
				}
					?></td>
        		<td><input type='text' name='uname' placeholder='User name' class='ield'></td>
           		<td><input type='password' name='pass' placeholder='Password' class='field'></td>
				<td><input type='submit' value="" id='login_btn'></td>
            
 			</tr>
        </table>      
</form> 
    
</div>    

<?php include("nav.php");?>
<!-------------------navigation/menubar------------> 
 <?PHP include("reg.php");?>
 



</body>
</html>
