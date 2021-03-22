<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="forum-style.css" />

	<link rel="stylesheet" href="css sliding menu/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css sliding menu/style.css"> <!-- Resource style -->
	<script src="js sliding menu/modernizr.js"></script> <!-- Modernizr -->

<!------------------------------>
	
<!------------------------------->
</head>

<body>

<!---------------main header------------------->

<div id="top-header">
	
<a href="logout.php"><img src="images/logout.png" id="out"></a>
    
<a href="#"><img src="images/09_gear-512.png" id="set"></a>

<a href="#"><img src="images/08_mail-512.png" id="msg"></a>

<a href="#"><img src="images/09_bell-512.png" id="not"></a>

<div style="float:right;padding:17px;font-size:16px;color:#000"><?php print "Welcome &nbsp<a href='user.php' style='color:#fff;font-size:18px;text-transform:uppercase;font-weight:bold'>".$_SESSION['uname']; ?></a></div>
    
</div>    

<?php include("nav.php");?>
<!-------------------navigation/menubar------------> 
<div style="visibility:hidden"><?PHP include("reg.php");?></div>


</body>
</html>
