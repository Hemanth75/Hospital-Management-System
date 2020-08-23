<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			color:yellow;
			text-align: left;
		}
		table th{
			color:black;
		}	
		table th,tr{
			font-size: larger;
		}
	</style>
</head>
<body style="background-image: url('images/hosp.jpg');background-repeat: no-repeat;background-size: cover;width: 1700px;height: 800px">
	<?php 
	$con=mysqli_connect("localhost:3307","root","","hosdb");
	if (isset($_POST['room_view'])) {
		$room_no=$_POST['room_no'];
		$query="select p.firstname,p.lastname from room r,patientdetails p where r.roomid='$room_no' and r.patientid=p.id";
		$result=mysqli_query($con,$query);
		echo "<table border='2'>
		<tr>
		<th>patient name</th>
		</tr>";
		while ($row=mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>".$row['firstname']." ".$row['lastname']."</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	



?>

</body>
</html>
