<?php

 mysql_connect("localhost","root","");

mysql_select_db("railway");

$id = $_REQUEST['id'];
$num=mysql_query("SELECT noofseats FROM ticket WHERE name='$id'");
$num2=mysql_query("SELECT noofseats FROM avilable WHERE name='$id'");
$num3=$num+$num2;
mysql_query("UPDATE avilable SET noofseats='$num3' WHERE name='$id'");
$sql="DELETE FROM ticket WHERE name='$id'";
mysql_query($sql);
echo('Cancelling...');
header("refresh:3; url=bookedTicketHistory.php");
?>
