<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/ext.css" />
<link rel="stylesheet" href="css/forum.css" />
<title>Forum</title>

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

<br />

<?php include("forum_header.php");?>

<div id="forum_content">

<?php
include "forum_con.php";


print"<div class='yellowbar'>";
 		if(isset($_SESSION['uname']))
		{print"<a href='forum_post.php'><div class='new_topic'>New Topic</div></a>";}
		else
		{
			print"<a href='javascript:error()'><div class='new_topic'>New Topic</div></a>";
			print"<script>function error(){alert('please login first..!');}</script>";
		}
	   print"</div>";
	
$getthreads="SELECT * from forums where parentid='0' AND type='extention' order by lastrepliedto DESC";


$getthreads2=mysqli_query($con,$getthreads) or die("Could not get threads");
while($getthreads3=mysqli_fetch_array($getthreads2))

{
	
print"<div id='list'>";

print"<div id='item'>";

print "<div id='part2'><A href='forum_message.php?id=$getthreads3[post_id]'><font size='4'>$getthreads3[post]</font></a>
	<br>posted by <font style='font-weight:bold'>$getthreads3[author]</font></div>
	<div id='part1'>
<A href='forum_message.php?id=$getthreads3[post_id]'><font size='4px'>$getthreads3[title]</font></a></div>
	<div id='part3'>$getthreads3[showtime]<br>Last post by <b>$getthreads3[lastposter]</b></div>	
	<div id='part4'>Replies: $getthreads3[numreplies]</div>";
	
		
print "</div>";
print "</div>";
}


	
	
?>


</div>
</div>

<?php include ("footer.php");?>