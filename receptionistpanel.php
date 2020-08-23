<!DOCTYPE html>
<html>
<head>
	<title> Billing Section</title>
	<style type="text/css">
		#div1{
			width: 200px;
			height: 800px;
			background-color:#333333;
			float: left; 
		}
		#div2{
			width: 1300px;
			height: 800px;
			background-image: url('images/hosp.jpg');
			float: left;
			color:yellow;
			text-align: left;
			font-size: larger;	
		}
		#ab{
			list-style-type:none;
			overflow: hidden;
			background-color: #333333;
			padding: 10px;
			margin: 0px;
		}
		 li{
			float: left;

		}
		li a{
			display: block;
			color:white;
			padding: 14px;
		}
		li a:hover{
			background-color: red;
		}
		#VP{
			display: none;
		}
		#PRC{
			display: none;
		}
		#RA{
			display: none;
		}
		#VR{
			display: none;
		}
	</style>
</head>
<body>
	<div id="div1">

		<button style="margin:20px" onclick="displayFunc1(this)" id="display1">Patient Details</button>
		<button style="margin:20px" onclick="displayFunc2(this)" id="display2">Discharge</button>
		<button style="margin:20px" onclick="displayFunc3(this)" id="display3">Delete Patient</button>
		<button style="margin:20px" onclick="displayFunc4(this)" id="display4">View Rooms</button>
		<a href="receptionist.php"><p  style="font-size: 25px; color: yellow;text-align: center;">LOGOUT</p></a>

	</div>
	<div id="div2">
		<!--<ul id="ab">
			<li><button onclick="doFunc1(this)" id="link1" style="margin:20px;" >Add New Doctor</button></li>
			<li><button onclick="doFunc2(this)" id="link2" style="margin:20px">Remove Doctor</button></li>
			<li><button onclick="doFunc3(this)" id="link3" style="margin:20px">Update Doctor</button></li>
			<li><button onclick="doFunc4(this)" id="link4" style="margin:20px">Add New Staff</button></li>
			<li><button onclick="doFunc5(this)" id="link5" style="margin:20px">Remove Staff</button></li>
			<li><button onclick="doFunc6(this)" id="link6" style="margin:20px">Update Staff</button></li>
		</ul>-->
		<div id="VP">
			<?php include 'patdet.php'; ?>
		</div>
		<div >
			<form method="POST" action="patientrecord.php" style="margin: 20px;" id="PRC">
				<h1>DISCHARGE</h1>
				Patient Id:<input type="text" name="patientid" style="margin: 20px;" required><br>
				Date-of-Discharge:<input type="date" name="dod" style="margin: 20px;" required><br>
				Room Fee:<input type="text" name="roomfee" style="margin: 20px;" required><br>

				<input type="submit" name="dischargedate" value="DISCHARGE DATE">
			</form>	
		</div>
		<div >
			<form method="POST" action="patientdetailssubmission.php" style="margin: 20px;" id="RA">
				<h1>DELETE PATIENT</h1>
				Patient Id:<input type="text" name="patientid" style="margin: 20px;" required><br>
				<input type="submit" name="deletepatient" value="DELETE">
			</form>	
		</div>
		<div >
			<form method="POST" action="viewrooms.php" style="margin: 20px;" id="VR">
				<h1>VIEW ROOM</h1>
				Room No:<input type="text" name="room_no" style="margin: 20px;" required><br>
				<input type="submit" name="room_view" value="OK">
			</form>	
		</div>
		

	</div>
	<div style="clear: both;"></div>
	<script type="text/javascript">
		var vp = document.getElementById('VP');
		var prc = document.getElementById('PRC');
		var ra = document.getElementById('RA');
		var vr = document.getElementById('VR');
		function displayFunc1(x){
			if(x.id == 'display1'){
				prc.style.display = "none";
				ra.style.display = "none";
				vr.style.display = "none";
				if (vp.style.display === "none"){
					vp.style.display = "block";
					}
					else{
						vp.style.display = "none";
						}
		}
	}
	function displayFunc2(x){
			if(x.id == 'display2'){
				vp.style.display = "none";
				ra.style.display = "none";
				vr.style.display = "none";
				if (prc.style.display === "none"){
					prc.style.display = "block";
					}
					else{
						prc.style.display = "none";
						}
		}
	}
	function displayFunc3(x){
			if(x.id == 'display3'){
				vp.style.display = "none";
				prc.style.display = "none";
				vr.style.display = "none";
				if (ra.style.display === "none"){
					ra.style.display = "block";
					}
					else{
						ra.style.display = "none";
						}
		}
	}
	function displayFunc4(x){
			if(x.id == 'display4'){
				vp.style.display = "none";
				prc.style.display = "none";
				ra.style.display = "none";
				if (vr.style.display === "none"){
					vr.style.display = "block";
					}
					else{
						vr.style.display = "none";
						}
		}
	}	
	</script>
</body>
</html>