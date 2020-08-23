
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include'admin.php' ?>
<?php 
	$con=mysqli_connect("localhost:3307","root","","hosdb");
	if (isset($_POST['logsub'])) {
		$type=$_POST['type'];
		$username=$_POST['admname'];
		$password=$_POST['adpass'];
		$query="select * from login where user='$username' and password='$password' and type='$type'";
		$result=mysqli_query($con,$query);
		while($row=mysqli_fetch_array($result)) {
			if($row['user']==$username && $row['password']==$password && $row['type']=='Admin'){
			header("Location:adminpanel.php");

		}	
			
		//elseif($row['user']==$username && $row['password']==$password && $row['type']=='User'){
		//	header("Location:index.php");
		//}
	}
	if($row['user']!=$username || $row['password']!=$password){
			echo"<script type='text/javascript'>alert('UserName or Password is incorrect');</script>";
		}

	}
?>

			<!--<script type="text/javascript">
				function sucess(){
					
					document.getElementById('demo1').innerHTML= alert("UserName or Password is correct!");
				
				}
				function failure(){
					
					document.getElementById('demo').innerHTML= alert("UserName or Password is incorrect!");
				
				}
				
			</script>-->

</body>
</html>