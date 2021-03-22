<?php include("config.php"); 


$query = "select * from chatrooms";
$result= mysqli_query($con,$query);
$rooms= mysqli_fetch_array($result);

?>

