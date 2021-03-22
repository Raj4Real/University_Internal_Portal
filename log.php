<?php


$con=mysqli_connect("localhost","root","","project_db");

	$uname = $_GET['uname'];
	$pass = $_GET['pass'];

session_start();	
	
if(mysql_errno())
{
	echo("error in connection <br>");
	echo(mysqli_connect_error());
	die();	
}
	
	$query = "select * from user_master where user_name='".$uname."' and password='".$pass."'";
	
	$result = mysqli_query($con,$query);
	
	$row = mysqli_fetch_row($result);
	
	
	if(empty($uname))
	{
		header('Location: index.php?err=eu');
	}
	else if(empty($pass))
	{
		header('Location:index.php?err=ep');
	}

	else if($row[0])
	{
		$_SESSION['uname']=$uname;
		header('Location: index.php');
	}
	
	else
	{
		header('Location: index.php?err=upnm');
		
	}
	
	
	