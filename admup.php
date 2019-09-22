<?php
session_start();
if(isset($_SESSION['nameee']))
{
	$v1=$_GET['new'];
	echo "<center><form method='POST' action=''>".$v1." : <input type='number' name='a'><br><br><input type='submit' value='Save'></form></center>";
	$val=$_POST['a'];
	mysql_connect("localhost", "root", "");
	mysql_select_db("net");
	mysql_query("UPDATE student SET confirmation='$val' WHERE name='$v1'");
	echo"<a href='logout.php'>LOGOUT</a>";
}
?>