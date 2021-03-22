<link rel="stylesheet" href="css/chat.css" />

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
	$uname = $_SESSION['uname'];
	
?>

<div class="content">

<h1 align="center" style="font-size:36px">Explorer agriculture live</h1>
	<div id="chatroom_wrap">
	<a href="chatroom.php"><div class="chatroom" style="margin-top:50px">General</div></a>
	</div>
    
    <div id="chatroom_wrap">
	<a href="chatroom.php"><div class="chatroom" style="margin-top:5px">Education</div></a>
	</div>
    
    <div id="chatroom_wrap">
	<a href="chatroom.php"><div class="chatroom" style="margin-top:5px">Research</div></a>
	</div>
 
</div>
<?php include("footer.php") ?>