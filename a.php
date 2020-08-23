<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="a.js">
	</script>
	<style type="text/css">
		table{
			float: left;
		}
	</style>
</head>
<body style="background-image: url('images/hosp.jpg');background-repeat: no-repeat;background-size: cover;width: 1700px;height: 800px">
	<!--<button onclick="aaa()">AB</button>
	<p id="appointment"></p>-->
	<div>
	<?php 
	$con=mysqli_connect("localhost:3307","root","","hosdb");
	if(isset($_POST['roomsub'])){
		$roomid=$_POST['room_no'];

	$query="CALL `getRoom`('$roomid');";
	$result=mysqli_query($con,$query);
	$data=mysqli_fetch_assoc($result);
	echo "<table border='2'>
	<tr>
	<th>$roomid</th>
	</tr>";
	echo "<tr>";
	echo "<td>".$data['total']."</td>";
	echo "</tr>";
	echo "</table>";
}
?>
</div>
		

</body>
</html>