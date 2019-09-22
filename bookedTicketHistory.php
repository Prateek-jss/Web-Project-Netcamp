<?php
session_start();
if(isset($_SESSION['namee']))
{
mysql_connect("localhost","root","");
$x=$_SESSION['namee'];

mysql_select_db("railway");

$sql="SELECT * FROM ticket WHERE name='$x'";

$records=mysql_query($sql);
}
?>

<html>
	<head>
		<title>Booked Tickets</title>
		<center><font color="white" size="7"><u>Booked &nbsp Ticket &nbsp History</u></font></center>
	</head>
	
	<body background="train2.jpg">
	<center>
	<br><br>
	<pre>
		<table width="600" border="6" cellpadding="3" cellspacing="3" style="color:white" bgcolor="grey">
			<font color="white">
			<tr hieght='5'>
			<th width='20%'>Name</th>
			<th width='20%'>Train name</th>
			<th width='20%'>Departure</th>
			<th width='20%'>Destination</th>
			<th width='20%'>Coach</th>
			<th width='20%'>Date</th>
			<th width='20%'>noofseats</th>
			</th>
			</font>
		
		<?php
		while($rowvalue=mysql_fetch_array($records))
		{
		echo "<tr hieght='5'>";		
		echo "<td>".$rowvalue['name']."</td>";
		echo "<td>".$rowvalue['trainname']."</td>";
		echo "<td>".$rowvalue['departure']."</td>";
		echo "<td>".$rowvalue['destination']."</td>";
		echo "<td>".$rowvalue['coach']."</td>";
		echo "<td>".$rowvalue['date']."</td>";
		echo "<td>".$rowvalue['noofseats']."</td>";
		$id=$rowvalue['name'];
				}
		?>
		</table>
	</pre>
	<form action=cancel.html>
	<Button >CANCEL Ticket</Button>
	</form>
	<form action=select.html>
	<input type=submit value="Back To Home Page">
	</form>
	<form action=logout.php>
	<Button >LOGOUT</Button>
	</form>
	</center>
	</body>
</html>