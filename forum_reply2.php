<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forum</title>

</head>

<body>

<?php include("header.php"); ?>

<br />
<?php include("forum_header.php");?>

<div id="forum_content">
<?php

include "forum_con.php"; //connection string

print "<link rel='stylesheet' href='style.css' type='text/css'>";

print "<table class='maintables'>";

print "<tr class='headline'><td>Reply</td></tr>";

print "<tr class='maintables'><td>";

$id=$_GET['id'];
$message="select * from forums where post_id='$id'";
$message2=mysqli_query($con,$message);
$message3=mysqli_fetch_array($message2);

if(isset($_POST['submit']))

{

    
   $name=$_SESSION['uname'];
   

   $yourpost=$_POST['yourpost'];
   

   $id=$_POST['id'];



	if(strlen($yourpost)<1)

   {

      print "You did not type in a post."; //no post entered

   }

   else

   {

      $thedate=date("U"); //get unix timestamp

      $displaytime=date("F j, Y, g:i a");

      //we now strip HTML injections

     

      $name=strip_tags($name);

      $yourpost=strip_tags($yourpost); 

      $insertpost="INSERT INTO forums(author,post,showtime,realtime,lastposter,parentid) values('$name','$yourpost','$displaytime','$thedate','$name','$id')";

      mysqli_query($con,$insertpost) or die("Could not insert post"); //insert post

      $updatepost="Update forums set numreplies=numreplies+'1', lastposter='$name',showtime='$displaytime', lastrepliedto='$thedate' where post_id='$id'";

      mysqli_query($con,$updatepost) or die("Could not update post");

      print "Message posted, go back to <A href='forum_message.php?id=$id'>Message</a>.";
	  
	  
	  

   }



}

else

{

   $id=$_GET['id'];

   print "<form action='forum_reply.php' method='post'>";

   print "<input type='hidden' name='id' value='$id'>";

   print "Your message:<br>";

   print "<textarea name='yourpost' rows='5' cols='40'></textarea><br>";

   print "<input type='submit' name='submit' value='submit'></form>";



}

print "</td></tr></table>";

?>
</div>