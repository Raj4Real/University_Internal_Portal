<?php
include "forum_con.php";



print "<a href='forum_post.php'>New Topic</a><br>";

print "<table class='maintable'>";

 

print"<tr class='headline' style='font-size:18px;height:50px'>";
print"<td width='15%'>Topic</td>";
print"<td width='40%'> Post </td>";
print"<td width='20%'> Topic Starter </td>";
print"<td width='10%'> Replies </td>";
print"<td> Last replied time </td>";
print"</tr>";
	
$getthreads="SELECT * from forums where parentid='0' order by lastrepliedto DESC";

$getthreads2=mysqli_query($con,$getthreads) or die("Could not get threads");
while($getthreads3=mysqli_fetch_array($getthreads2))

{



  print "<tr class='mainrow'>

  	<td><A href='message.php?id=$getthreads3[post_id]'>$getthreads3[title]</a></td>
	<td><A href='message.php?id=$getthreads3[post_id]'>$getthreads3[post]</a></td>
	<td>$getthreads3[author]</td>
	<td>$getthreads3[numreplies]</td>
	<td>$getthreads3[showtime]<br>Last post by <b>$getthreads3[lastposter]</b></td>	
		</tr>";
		

}

	print "</table>"
	
?>


		


