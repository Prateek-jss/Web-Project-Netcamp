<?php
session_start();
if(isset($_SESSION['namee']))
{
$x=$_POST['d'];
$y=$_POST['de'];
$z=$_POST['coach'];
mysql_connect("localhost","root","");
mysql_select_db("railway");
$query="SELECT * FROM avilable";
$result=mysql_query($query);
$row=mysql_num_rows($result);

$query1="SELECT * FROM avilable WHERE source='$x' AND destination='$y' AND type='$z'";
$result1=mysql_query($query1);
	
if($row!=0)
{
	
		echo("<table width='600' border='6' cellpadding='3' cellspacing='3' style='color:white' bgcolor='grey'>");
		echo"<tr height='5'>";
		echo"<td width='20%'>NAME</td>";
		echo"<td width='20%'>from</td>";
		echo"<td width='20'>destination</td>";
		echo"<td width='20'>starttime</td>";
		echo"<td width='20'>endtime</td>";
		echo"<td width='20'>type</td>";
		echo"<td width='20'>no of seats</td>";
		echo"</tr>";
		echo"</table>";
	while($row=mysql_fetch_array($result1))
	{
		echo"<table width='600' border='6' cellpadding='3' cellspacing='3' style='color:white' bgcolor='grey'>";
		echo"<tr height='5px'>";
		echo"<td width='20%'>".$row[0]."</td>";
		echo"<td width='20%'>".$row[1]."</td>";
		echo"<td width='20%'>".$row[2]."</td>";
		echo"<td width='20%'>".$row[3]."</td>";
		echo"<td width='10%'>".$row[4]."</td>";
		echo"<td width='20%'>".$row[5]."</td>";
		echo"<td width='20%'>".$row[6]."</td>";
		echo"</tr>";
		echo"</table>";
	}
echo("<form action=logout.php>
	<Button >LOGOUT</Button>
	</form>");
}
}
?>
<html>
<br><body background="train1.jpg">
<form method="POST" action="book.php">
<font color="white" size=5>
ENTER NAME OF TRAIN:
<input type="text" name="a" size="40"><br>
ENTER NO OF SEATS :
<input type="number" name="b" size="40"><br>
Enter date of jurney:
<input type="text" name="dl">
<br>
<input type="Submit" value="Submit">
</form></font>
</body>
</html>

