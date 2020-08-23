<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'doctorlogin.php'; ?>
	<?php 
	$con=mysqli_connect("localhost:3307","root","","hosdb");
	$query="select d.doctorid,d.doctorname,p.firstname,p.lastname from admindoctorcreate d,patientdetails p where d.doc_type='General' and d.doctorname=p.doctor";
	$result=mysqli_query($con,$query);

	echo "<table border='2'>
	<tr>
	<th>Doctor Id</th>
	<th>Doctor Name</th>
	<th>Patient Name</th>
	<th>Appointment Status</th>
	</tr>";
	while ($row=mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$row['doctorid']."</td>";
		echo "<td>".$row['doctorname']."</td>";
		echo "<td>".$row['firstname']." ".$row['lastname']."</td>";
		echo "<td>"."<form ><select><option disabled selected>Select</option><option style='color:green;'>Appointed</select></form>"."</td>";	
		echo "</tr>";
		
	}
	echo "</table>";
		
?>


</body>
</html>
