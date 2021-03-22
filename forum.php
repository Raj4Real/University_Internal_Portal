<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forum</title>

</head>

<body>

<?php 

if(isset($_SESSION['uname'])) 
{
	include("header.php");
}
else
	{
		include("loged_header");
	}
?>

<div class="content">
<h1>General Agriculture Discussion Forums</h1>
<br />
<br />

<div id="forum_nav">	
	<ul class="forum_menu">
      
  		<a href="forum_all.php"><li>All</li></a>
  		<a href="forum_general.php"><li>General</li></a>
  		<a href="forum_education.php"><li>Education</li></a>
  	    <a href="forum_extention.php"><li>Extention</li></a> 
	</ul>

</div>



</body>
</html>

