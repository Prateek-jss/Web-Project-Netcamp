<?php
session_start();
$m=$_POST['a'];
$o=$_POST['b'];
$_SESSION['namee']=$n;
$_SESSION['pwddd']=$o;
mysql_connect("localhost", "root", "");
mysql_select_db("railway");
$query="SELECT * FROM users";
$result=mysql_query($query);
$row=mysql_num_rows($result);
$query1="SELECT * FROM admin WHERE name='$m' AND password='$o'";
$result1=mysql_query($query1);
$row1=mysql_num_rows($result1);
if($row1!=0)
{
	$query="SELECT * FROM users";
	$result=mysql_query($query);
	echo"<body background='train2.jpg'></body>";

		echo"<table width='600' border='6' cellpadding='3' cellspacing='3' style='color:white' bgcolor='grey'>";
		echo"<tr height='5'>";
		echo"<td width='20%'>NAME</td>";
		echo"<td width='20%'>PASSWORD</td>";
		echo"<td width='20%'>EMAIL</td>";
		echo"<td width='20%'>PHONE</td>";
		echo"<td width='20%'>CONFIRMATION</td>";
		echo"</tr>";
		echo"</table>";
	while($row=mysql_fetch_array($result))
	{
		echo"<table width='600' border='6' cellpadding='3' cellspacing='3' style='color:white' bgcolor='grey'";
		echo"<tr height='5px'>";
		echo"<td width='20%'>".$row[0]."</td>";
		echo"<td width='20%'>".$row[1]."</td>";
		echo"<td width='20%'>".$row[2]."</td>";
		echo"<td width='20%'>".$row[3]."</td>";
		echo"<td width='20%'>".$row[4]."<a href='upate.html'>Update</a></td>"; //Confirmation with link to update
		echo"</tr>";
		echo"</table>";
	}
	echo('<BUTTON size=50 ><a href=addtrain.html>ADD TRAIN </a></BUTTON><br><br><br>');
	
	echo "<br><a href='logout.php'>LOGOUT</a>";
	
	echo('<marquee direction=right align=bottom ><img src="d.gif" align=bottom></marquee>');
}
else
header("refresh:0; url=admlogin.html");
?>
