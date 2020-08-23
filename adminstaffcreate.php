<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="uikit/css/uikit.min.css" />
    <script src="uikit/js/uikit.min.js"></script>
    <script src="uikit/js/uikit-icons.min.js"></script>
</head>
<body>
<?php 
	$con=mysqli_connect("localhost:3307","root","","hosdb");
	if (isset($_POST['staffcreate'])){
		$staffid=$_POST['staffid'];
		$staffname=$_POST['staffname'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		$query="insert into adminstaffcreate (staffid,staffname,email,password) values ('$staffid','$staffname','$email','$password')";
		$result=mysqli_query($con,$query);
		if($result){
			header("Location:adminstaffcreate.php");
		}
	}
	if(isset($_POST['staffdelete'])){
		$staffid=$_POST['staffid'];
		$query="delete from adminstaffcreate where staffid='$staffid'";
		$result=mysqli_query($con,$query);
		if($result){
			header("Location:adminstaffcreate.php");

		}
	}
?>
</body>
</html>