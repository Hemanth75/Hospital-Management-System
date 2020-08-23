<?php 
	$con=mysqli_connect("localhost:3307","root","","hosdb");
	$query="select * from admindoctorcreate";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)) {
		if($row['doc_type'] == 'General'){
		$ab[] = $row['doctorname'];
	}	
	if($row['doc_type'] == 'ENT'){
		$ac[] = $row['doctorname'];
	}
	}
?>
