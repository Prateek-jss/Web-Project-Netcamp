<?php
session_start();
if(isset($_SESSION['namee']))
{
$x=$_POST['a'];
$k=@$_SESSION['namee'];
$y=$_POST['b'];
$z=$_POST['dl'];
mysql_connect("localhost","root","");
mysql_select_db("railway");
$query="SELECT * FROM avilable WHERE Tname='$x'";
$result1=mysql_query($query);
while($row=mysql_fetch_array($result1))
	{
		echo"<table border='1' width='75%'>";
		echo"<tr height='5px'>";
		echo"<td width='20%'>".$row[0]."</td>";
		echo"<td width='20%'>".$row[1]."</td>";
		echo"<td width='20%'>".$row[2]."</td>";
		$row4=$row[2];
		echo"<td width='20%'>".$row[3]."</td>";
		$row3=$row[1];
		echo"<td width='20%'>".$row[4]."</td>";
		echo"<td width='20%'>".$row[5]."</td>";
		echo"<td width='20%'>".$row[6]."</td>";
		$row6=$row[6];
		echo"</tr>";
		echo"</table>";
	}
$querry1="INSERT INTO ticket VALUES('$k','$x','$row3','$row4','type','$z','$y')";
mysql_query($querry1);
$num=$row6-$y;
$querry2="UPDATE avilable SET noofseats='$num' WHERE Tname='$x'";
mysql_query($querry2);
echo ("Booking");
header("refresh:4; url=select.html");
}
?>
