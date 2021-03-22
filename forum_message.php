
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/forum.css" />

<title>Forumst</title>
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

<br />

<?php include("forum_header.php");?>

<div id="forum_content">

<?php 

include "forum_con.php"; //mysql db connection here

$id=$_GET['id'];

$gettopic="SELECT * from forums where post_id='$id'";

$gettopic2=mysqli_query($con,$gettopic) or die("Could not get topic");

$gettopic3=mysqli_fetch_array($gettopic2);


print "<div class='yellowbar'><A href='forum_all.php'><div class='new_topic'>Back to List</div></a>";

if(isset($_SESSION['uname']))
{
	print"<A href='forum_post.php'><div class='new_topic'>New Topic</div></a>";
	print"<A href='forum_reply.php?id=$id'><div class='new_topic'>Reply</div></a></div>";
}
else
{
	print"<A href='javascript:error();'><div class='new_topic'>New Topic</div></a>";
	print"<A href='javascript:error();'><div class='new_topic'>Reply</div></a></div>";
	
	print"<script> function error(){alert('please login first')}</script>";
}


print"<div id='forum_container'>";

print	"<div id='header'>";
print    	"<div id='author_name'>$gettopic3[author]</div>";
print        "<div id='last_replied'>Last replied to at $gettopic3[showtime]</div>";
 print   "</div>";
    
print    "<div id='author'></div>";
    
 print   "<div id='content'>";
    
	$message=strip_tags($gettopic3['post']);
	
	$desc=strip_tags($gettopic3['description']);

	$message=nl2br($message);
	
	$desc=nl2br($desc);
	
	print "<h1>$message</h1>
	&nbsp;&nbsp;$desc</div>";
	
print	"<div id='footer'>";
print		"<a href='#'><div id='edit'>Edit</div></a>";
print    	"<a href='forum_reply.php?id=$id'><div id='reply'>Reply</div></a>";
       
 print   "</div>";
    
print "</div>";




$getreplies="Select * from forums where parentid='$id' order by post_id desc"; //getting replies

$getreplies2=mysqli_query($con,$getreplies) or die("Could not get replies");


while($getreplies3=mysqli_fetch_array($getreplies2))

{
	$innerMain = mysqli_query($con,"select * from forums where parentid='$getreplies3[post_id]'");
	
	
		
print"<div id='forum_container'>";

print	"<div id='header'>";
print    	"<div id='author_name'>$getreplies3[author]</div>";
print        "<div id='last_replied'>Last replied to at $getreplies3[showtime]</div>";
 print   "</div>";
    
print    "<div id='author'></div>";
    
 print   "<div id='content'>";
 
//================================== 
	 
	 $message=strip_tags($getreplies3['post']);

   		$message=nl2br($message);
		print "<h2>$message</h2>";
		print"<br><br>";

 
		
	print"<br><br></div>";
	
//==========================================	
	
	
print	"<div id='footer'>";

print		"<a href='#'><div id='edit'>Edit</div></a>";
print    	"<a href='forum_reply2.php?id=$getreplies3[post_id]'><div id='reply'>Reply</div></a>";
       
 print   "</div>";
    
print "</div>";	


	 while($innerComment = mysqli_fetch_assoc($innerMain))
	{
	

		
print"<div id='forum_container'>";

print	"<div id='header'>";
print    	"<div id='author_name'>$innerComment[author]</div>";
print        "<div id='last_replied'>Last replied to at $innerComment[showtime]</div>";
 print   "</div>";
    
print    "<div id='author'></div>";
    
 print   "<div id='content'>";
	
	
 		print "<div id='quote'>Originally Posted By <a href='#'><font style='font-weight:bold'>$getreplies3[author]</font></a><br><br>$getreplies3[post]</div><br>";
		
		print"<br>";
		print"<div style='margin-left:30px'>$innerComment[post]</div>";
		print"</div>";
		
		print"<div id='footer'>";

print	"<a href='#'><div id='edit'>Edit</div></a>";
print    "<a href='forum_reply2.php?id=$innerComment[post_id]'><div id='reply'>Reply</div></a>";
print   "</div>";
		
		print"</div>";
		
		
	}
 

}


print "</body>";
print "</html>";

?>
</div>