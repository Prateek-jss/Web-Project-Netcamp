<?php
$x=$_POST['d'];
$y=$_POST['a'];
	mysql_connect("localhost", "root", "");
	mysql_select_db("railway");
	mysql_query("UPDATE users SET confirmation='$x' WHERE name='$y'");
	echo('updating');
	header("refresh:1; url=adminlogin.php");

?>