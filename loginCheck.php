<?php
session_start();
$x=$_POST['user'];
$y=$_POST['pwd'];
 mysql_connect("localhost","root","");
mysql_select_db("railway");

$sql="SELECT * FROM users WHERE name='$x' AND password='$y'";
$records=mysql_query($sql);
$sql2="SELECT * FROM users WHERE name='$x' AND password='$y' AND confirmation=1";
$r2=mysql_query($sql2);
$ro=mysql_num_rows($r2);
$row=mysql_num_rows($records);
	if($row!=0)
	{
		if($ro!=0)
		{echo("redirecting...");
	$_SESSION["namee"]=$x;
	$_SESSION["pwdd"]=$y;
		header("refresh:2; url=select.html");
		}
		else
		{
			echo('<marquee scrollamount="15"><h1 style="color:red">you are not verified contact support - 7500917590</h1><marquee>');
			header("refresh:7; url=login.html");
		
		}
	}
	else
	{
		echo('<br><br> <h1 align="center" style="color:red">INVALID &nbsp USERNAME &nbsp OR &nbsp PASSWORD <br><br> Enter correct details</h1>');
		header("refresh:3; url=login.html");
	
	}

?>
