<?php
session_start();
if(isset($_SESSION['namee']))
{

$x=$_POST['d'];
$y=$_POST['de'];
$n=$_POST['a'];
$v=$_POST['b'];
$t=$_POST['c'];
$l=$_POST['coach'];
$p=$_POST['o'];
mysql_connect("localhost","root","");
mysql_select_db("railway");
$sql1="INSERT INTO available (name,from,departure,starttime,endtime,type,noofseats) VALUES('$n','$x','$y','$v','$t','$l','$p')";
mysql_query($sql1);
echo('train added');
header("refresh:3; url=adminlogin.php");
}
?>