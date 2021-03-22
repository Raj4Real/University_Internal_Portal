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

print "<tr class='headline'><td>Post a message</td></tr>";

print "<tr class='maintables'><td>";

if(isset($_POST['submit']))

{
	
   $type=$_POST['type'];
	
   $title=$_POST['title'];	
	
   $name=$_SESSION['uname'];

   $yourpost=$_POST['yourpost'];
   
   $desc=$_POST['desc'];

 

   if(strlen($yourpost)<1)

   {

      print "You did not type in a post."; //no post entered

   }

   else if(strlen($desc)<1)

   {

      print "You did not enter a subject."; //no subject entered

   }

   else

   {

      $thedate=date("U"); //get unix timestamp

      $displaytime=date("F j, Y, g:i a");

      //we now strip HTML injections

      $desc=strip_tags($desc);
      $yourpost=strip_tags($yourpost);
	   

      $insertpost="INSERT INTO forums(author,title,description,post,showtime,realtime,lastposter,type) values('$name','$title','$desc','$yourpost','$displaytime','$thedate','$name','$type')";

      mysqli_query($con,$insertpost) or die("Could not insert post"); //insert post

      print "Message posted, go back to <A href='forum_all.php'>Forum</a>.";

   }



}

else

{

   print "<form action='forum_post.php' method='post'>";

   print "<br>Category:<br>";
   
    print "       	<select name='type' class='text_field'>";
    print "                   <option value='general'>general</option>";
    print "                  	<option value='education'>education</option>";
    print "                   <option value='research'>research</option>";
    print "                 	<option value='extention'>extention</option>";
    print "              </select><br>";
   	
  

   
   print "Title:";

   print "<input type='text' name='title' size='20'><br>";
   
   print "Post:";

   print "<input type='text' name='yourpost' size='20'><br><br>";

   print "Description:<br>";

   print "<textarea name='desc' rows='5' cols='40'></textarea><br>";

   print "<input type='submit' name='submit' value='submit'></form>";



}

print "</td></tr></table>";

?>

</div>