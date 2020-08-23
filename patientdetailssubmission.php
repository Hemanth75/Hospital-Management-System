<?php 
$con=mysqli_connect("localhost:3307","root","","hosdb");
if (isset($_POST['pat_details'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$age=$_POST['age'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	$disease=$_POST['disease'];
	$doc_type=$_POST['doc_type'];
	$doctorlist=$_POST['doctorlist'];

$query="insert into patientdetails (firstname,lastname,age,mobile,address,disease,doc_type,doctor) values ('$firstname','$lastname','$age','$mobile','$address','$disease','$doc_type','$doctorlist')";
	$result=mysqli_query($con,$query);
	if($result){
		header("Location:patientdetails.php");
	}
}
if(isset($_POST['deletepatient'])){
	$patientid=$_POST['patientid'];
	$query="delete from patientdetails where id='$patientid'";
	$result=mysqli_query($con,$query);
	if($result){
		header("Location:receptionistpanel.php");
	}
}
if(isset($_POST['check_status'])){
	$patientid=$_POST['patientid'];
	$status=$_POST['status_select'];
	$query="update patientdetails set appointment_status = '$status' where id='$patientid'";
	$result=mysqli_query($con,$query);
	if($result){
		header("Location:doctorlogin.php");
	}
}
?>