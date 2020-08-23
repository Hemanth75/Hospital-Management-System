<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 100%;
			color:white;
			font-family: monospace;
			text-align: left;
		}
		tr:nth-child(even){
			background-color: orange;
		}
	</style>
</head>
<body style="background-image: url('images/hosp.jpg');background-repeat: no-repeat;background-size: cover;width: 1700px;height: 800px">
	<a href="patientdetails.php"><p style="font-size: 25px; color: yellow;text-align: center;">BACK</p></a>

<?php 
$con=mysqli_connect("localhost:3307","root","","hosdb");
if (isset($_POST['pat_login'])){
	$firstname=($_POST['firstname']);
	$lastname=$_POST['lastname'];
	$query="select * from patientdetails where firstname='$firstname' and lastname='$lastname'";
	$result=mysqli_query($con,$query);
	if($result){
	echo "<table border='2' style='width:400px;height:400px;'>";
	while($row=mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<th><h2>First Name</h2></th>";
		echo "<td><h2>".$row['firstname']."</h2></td>";	
		echo "</tr>";

		echo "<tr>";
		echo "<th><h2>Last Name</h2></th>";
		echo "<td><h2>".$row['lastname']."</h2></td>";	
		echo "</tr>";

		echo "<tr>";
		echo "<th><h2>Age</h2></th>";
		echo "<td><h2>".$row['age']."</h2></td>";	
		echo "</tr>";

		echo "<tr>";
		echo "<th><h2>Mobile</h2></th>";
		echo "<td><h2>".$row['mobile']."</h2></td>";	
		echo "</tr>";

		echo "<tr>";
		echo "<th><h2>Address</h2></th>";
		echo "<td><h2>".$row['address']."</h2></td>";	
		echo "</tr>";

		echo "<tr>";
		echo "<th><h2>Doctor Type</h2></th>";
		echo "<td><h2>".$row['doc_type']."</h2></td>";	
		echo "</tr>";

		echo "<tr>";
		echo "<th><h2>Doctor</h2></th>";
		echo "<td><h2>".$row['doctor']."</h2></td>";	
		echo "</tr>";

		echo "<tr>";
		echo "<th><h2>Appointment Status</h2></th>";
		echo "<td><h2>".$row['appointment_status']."</h2></td>";	
		echo "</tr>";


		
		}
	echo "</table>";
}
}
?>
</body>
</html>
