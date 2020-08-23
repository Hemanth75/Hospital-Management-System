<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
$con=mysqli_connect("localhost:3307","root","","hosdb");
if (isset($_POST['recordsubmit'])){
	$patientid=$_POST['patientid'];
	$disease=$_POST['disease'];
	$fee=$_POST['fee'];
	$doj=$_POST['doj'];
	$query="insert into record (patientid,fee,doj) values ('$patientid','$fee','$doj')";
	$result=mysqli_query($con,$query);
	if($result){
		header("Location:doctorlogin.php");
	}
}
if(isset($_POST['dischargedate'])){
	$patientid=$_POST['patientid'];
	$dod=$_POST['dod'];
	$roomfee=$_POST['roomfee'];
	$query="update record set dod='$dod',roomfee=$roomfee where patientid='$patientid'";
	$result=mysqli_query($con,$query);
	if($result){
		header("Location:receptionistpanel.php");
	}


}


/*if (isset($_POST['pat_login'])){
	$email_id=$_POST['email_id'];
	$password=$_POST['password'];
	$query="select * from patientlogin where email_id='$email_id' and password='$password'";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)) {
		if($row['email_id']==$email_id && $row['password']==$password){
			header("Location:patientdetails.php");
	
}

}
}*/
?>

</body>
</html>
