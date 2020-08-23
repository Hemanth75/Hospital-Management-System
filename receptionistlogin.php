<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>
<div >
<?php include'receptionist.php' ?>
<?php 
	$con=mysqli_connect("localhost:3307","root","","hosdb");
	if (isset($_POST['logsub'])) {
	$type=$_POST['type'];
	$receptionistname = $_POST['recpname'];
	$password=$_POST['recppass'];
	$query="select * from login where user='$receptionistname' and password='$password' and type='$type'";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)) {
			if($row['user']==$receptionistname && $row['password']==$password && $row['type']=='Billing'){
			header("Location:receptionistpanel.php");
		}
	}
	if($row['user']!=$receptionistname || $row['password']!=$password){
		echo"<script type='text/javascript'>alert('UserName or Password is incorrect');</script>";

	}

}
?>
</div>
</body>
</html>	
		

