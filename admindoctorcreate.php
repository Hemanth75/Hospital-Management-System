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
	if (isset($_POST['doctorcreate'])){
		$doctorid=$_POST['doctorid'];
		$doctorname=$_POST['doctorname'];
		$email=$_POST['email'];
		$doc_type=$_POST['doc_type'];
		$query="insert into admindoctorcreate (doctorid,doctorname,email,password,doc_type) values ('$doctorid','$doctorname','$email','$password','$doc_type')";
		$result=mysqli_query($con,$query);
		if($result){
			header("Location:adminpanel.php");
		}
	}
	if(isset($_POST['doctordelete'])){
		$doctorid=$_POST['doctorid'];
		$query="delete from admindoctorcreate where doctorid='$doctorid'";
		$result=mysqli_query($con,$query);
		if($result){
			header("Location:adminpanel.php");
		}
	}
	if(isset($_POST['doctorupdate'])){
		$doctorid=$_POST['doctorid'];
		$doctorname=$_POST['doctorname'];
		$email=$_POST['email'];
		$doc_type=$_POST['doc_type'];
	    $query="update admindoctorcreate set doctorname='$doctorname',email='$email',password='$password',doc_type='$doc_type'
	    where doctorid='$doctorid'";
	    $result=mysqli_query($con,$query);
		if($result){
			header("Location:adminpanel.php");
		}
	}
	
	?>
</body>
</html>
