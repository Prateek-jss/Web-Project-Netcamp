<?php
$m=$_POST['a'];
$o=$_POST['b'];
$n=$_POST['c'];
$p=$_POST['d'];
if($m==""||$n==""||$o==""||$p=="")
{
	echo "Fill all fieldss";
}

else
{
	mysql_connect("localhost","root","");
	mysql_select_db("railway");
	$query="SELECT * FROM users where name='$m' AND password='$o'";
	$result=mysql_query($query);
	$row=mysql_num_rows($result);
	if($row==0)
	{
		$query1="INSERT INTO users (name,password, email, phone, confirmation) values ('$m', '$o', '$n', '$p', 0)";
		mysql_query($query1);
		echo "You have been registered!<br><br>";
	
	}
	
	else
	{echo "User already exists!<br><br>";
		$result=mysql_query("SELECT confirmation FROM users WHERE name='$m' AND password='$o'");
		$row=mysql_fetch_array($result);
		if($row[0]==1)
		{
			echo "You are confirmed!<br><br>";
		}
		else
		{
			echo "You are not confirmed!<br><br>";
		}
		
	}
}
header("refresh:3; url=login.html");
?>

