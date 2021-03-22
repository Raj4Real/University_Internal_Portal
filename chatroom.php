<?php include("controller_creat_room.php");

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

	<div class='yellowbar'>
   		<a href='creat_room.php'><div class='new_topic'>Create Room</div></a>
        <input type='search' placeholder='Search Rooms' class='search rounded'>
    </div>
    
	<div style="margin-top:50px"> 
<?php
 
     while($row = mysqli_fetch_array($result))
     {   
print   "<div id='chatroom_wrap'>
		 <a href='chat_index.php'><div class='chatroom'>$row[room_name]</div></a>
		 </div><br>";
	 } ?>
    
	</div>
 
</div>