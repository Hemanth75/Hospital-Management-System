<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$con=mysqli_connect("localhost:3307","root","","hosdb");
if (isset($_POST['roomsubmit'])){
	$roomid=$_POST['roomid'];
	$patientid=$_POST['patientid'];
	$room_type=$_POST['room_type'];

	$query="insert into room (roomid,patientid,room_type) values ('$roomid','$patientid','$room_type')";
	$result=mysqli_query($con,$query);
	if($result){
		header("Location:doctorlogin.php");
	}
}
?>

</body>
</html>