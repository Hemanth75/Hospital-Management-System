<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			border-style: solid;
			border-width: 2px;
			height: auto;
		}
		table th{
			color:black;
		}
		
	</style>
</head>
<body>

<div >
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
</div>
<!---select p.id,p.firstname,p.lastname,p.doctor,r.disease,r.fee,r.roomfee,r.doj,r.dod,r.total,o.roomid from patientdetails p,record r,room o where (p.id = r.patientid and p.id = o.patientid) or (p.id = r.patientid and o.patientid='NULL')--->

</body>
</html>