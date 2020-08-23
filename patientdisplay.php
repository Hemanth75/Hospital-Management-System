<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 100%;
			color:#d96459;
			font-family: monospace;
			text-align: left;
		}
		th{
			background-color: #d96459;
			color:white;
		}
		tr:nth-child(even){
			background-color: #f2f2f2
		}
	</style>
</head>
<body>

<?php 
	$con=mysqli_connect("localhost:3307","root","","hosdb");
	$query="CALL `getPatient`();";
	$result=mysqli_query($con,$query);

	echo "<table border='2'>
	<tr>
	<th>pat-id</th>
	<th>pat-name</th>
	<th>doctor name</th>
	<th>disease</th>
	<th>doctor fee</th>
	<th>room fee</th>
	<th>DOJ</th>
	<th>room-no</th>
	<th>DD</th>
	<th>total fee</th>
	</tr>";
	while ($row=mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['firstname']." ".$row['lastname']."</td>";
		echo "<td>".$row['doctor']."</td>";
		echo "<td>".$row['disease']."</td>";
		echo "<td>".$row['fee']."</td>";
		echo "<td>".$row['roomfee']."</td>";
		echo "<td>".$row['doj']."</td>";
		echo "<td>".$row['roomid']."</td>";	
		echo "<td>".$row['dod']."</td>";
		echo "<td>".$row['total']."</td>";	
		echo "</tr>";
	}
	echo "</table>";
?>

</body>
</html>