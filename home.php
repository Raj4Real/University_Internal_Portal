<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/home.css" />
<title>home</title>

</head>

<body>
<?php

session_start();
if(isset($_SESSION['uname'])) 
{
	include("loged_header.php");
}
else
	{
		include("header.php");
	}
	
?>

<div style="color:black" id="content">


home content 
jkshfjklashdjfklakdsjfhjkahlsjdfhkjlaldshfjkadshfkjalsdhfjhaslkjd hfjash dfsjakdh fsd jsdhf sdh fjkhs fkjhsdjkfh jkshdf jk hsklajdhf kjhsdf jhsdajkhf hsdajf hjksdahfjkhsdf jskdhf hsdf jksdh fkjshdf hsjdkfh jksdhf jkhsdjkfh jkwahgfusahdgjk asdghjkbh kjsgdjksa gkhsdakjgh kjasdh fkjhasdkhgkjasdbn fjhadskgjh ksdahf kjasdh fkhkjhgd kajsdhf jsdg kh kjahg uahsjkbsdjgiuregh iuasf iehw udsgf jagb hg tkjhfjksdvbdgajdnvuidvhadnvuaygalfvdigujiavyugtlavigaiyuta jdi dsafhdsadadfoidivdjhfduvchuasdhjudahanathadhgfahuiniuados

</div>

<?php include ("footer.php");?>

</body>
</html>


