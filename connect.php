<?php

$con=mysqli_connect("localhost","root","","project_db");

if(isset($_REQUEST['submit']))
{ 
$fname= $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email= $_REQUEST['email'];
$uname= $_REQUEST['uname'];
$pass1= $_REQUEST['pass1'];
$gender= $_REQUEST['gender'];
$designation= $_REQUEST['designation'];
				  
$query="insert into user_master(user_name,password,first_name,last_name,email,gender,designation)values('$uname','$pass1','$fname','$lname','$email','$gender','$designation')";
mysqli_query($con,$query);
}

if(mysql_errno())
{
	print("error...");
	die();
}

?>
