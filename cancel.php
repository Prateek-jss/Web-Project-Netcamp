<?php
session_start();
if(isset($_SESSION['namee']))
{
$x=$_POST['a'];
$u=$_POST['c'];
$v=$_POST['d'];
$j=$_SESSION['namee'];
mysql_connect("localhost", "root", "");
	mysql_select_db("railway");
	$query="SELECT * FROM avilable WHERE tname='$x' AND source='$u' AND destination='$v'";
$result1=mysql_query($query);
while($row=mysql_fetch_array($result1))
	{
		$row6=$row[6];
	}
	$query1="SELECT * FROM ticket WHERE trainname='$x' AND departure='$u' AND destination='$v' AND name='$j'";
$result2=mysql_query($query1);
while($row4=mysql_fetch_array($result2))
	{
		$row61=$row4[6];
	}
	$row9=$row6+$row61;
	mysql_query("UPDATE avilable SET noofseats='$row9' WHERE tname='$x' AND source='$u' AND destination='$v'");
	mysql_query("DELETE FROM ticket WHERE trainname='$x' AND departure='$u' AND destination='$v' AND name='$j'");
	echo ("cancelling");
	header("refresh:4; url=bookedTicketHistory.php");
}
?>
	