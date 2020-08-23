<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			border-style: solid;
			border-width: 2px;
			border-color: yellow;
		}
		table th,td{
			background-color: pink;
		}
		
	</style>
</head>
<body>

<div id="VD">
<?php 
	$con=mysqli_connect("localhost:3307","root","","hosdb");
	$query="select * from admindoctorcreate";
	$result=mysqli_query($con,$query);

	echo "<table border='2'>
	<tr>
	<th>doctor id</th>
	<th>doctor name</th>
	<th>email</th>
	<th>doctor type</th>
	</tr>";
	while ($row=mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$row['doctorid']."</td>";
		echo "<td>"."DR.".$row['doctorname']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['doc_type']."</td>";	
		echo "</tr>";
	}
	echo "</table>";
?>
</div>

</body>
</html>