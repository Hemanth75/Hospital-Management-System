<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="uikit/css/uikit.min.css" />
    <script src="uikit/js/uikit.min.js"></script>
    <script src="uikit/js/uikit-icons.min.js"></script>
	<style type="text/css">	
		#div1{
			width: 200px;
			height: 800px;
			background-color:#333333;
			float: left; 
		}
		#div2{
			width: 1310px;
			height: 800px;
			background-image: url('images/hosp.jpg');
			float: left;
			scroll-behavior: all;
			color:yellow;
			text-align: left;
			font-size: larger;	
		}
		#ab{
			list-style-type:none;
			overflow: hidden;
			background-color: #333333;
			padding: 10px;
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
		#VDP{
			display: none;
		}
		#AND{
			display: none;
		}
		#RD{
			display: none;
		}
		#UPD{
			display: none;
		}
		#ANS{
			display: none;
		}
		#RS{
			display: none;
		}
		#UPS{
			display: none;
		}
		#VD{
			display: none;
		}
		#VP{
			display: none;
		}
		.first{
			position: absolute;
		}
		.second{
			position: absolute;	
		}
	</style>
</head>
<body >
	<div id="div1">
		<button style="margin:20px" onclick="displayFunc1(this)" id="display1">View Doctor</button><br>
		<button style="margin:20px" onclick="displayFunc2(this)" id="display2">View Patients</button>
	</div>
	<div id="div2">
		<ul id="ab">
			<li><button onclick="doFunc1(this)" id="link1" style="margin:20px;" >Add New Doctor</button></li>
			<li><button onclick="doFunc2(this)" id="link2" style="margin:20px">Remove Doctor</button></li>
			<li><button onclick="doFunc3(this)" id="link3" style="margin:20px">Update Doctor</button></li>
			<!--<li><button onclick="doFunc4(this)" id="link4" style="margin:20px">Add New Staff</button></li>
			<li><button onclick="doFunc5(this)" id="link5" style="margin:20px">Remove Staff</button></li>
			<li><button onclick="doFunc6(this)" id="link6" style="margin:20px">Update Staff</button></li>-->
			<a href="admin.php"><p  style="font-size: 25px; color: yellow;text-align: right;">LOGOUT</p></a>

		</ul>
		<div class="first" >
			<form method="POST" action="admindoctorcreate.php" style="margin: 20px;" id="AND">
				<h1 style="color:yellow;">ADD A NEW DOCTOR</h1>
				Doctor Id:<input type="text" name="doctorid" style="margin: 20px;" ><br>
				Doctor Name:<input type="text" name="doctorname" style="margin: 20px" required><br>
				E-mail:<input type="text" name="email" style="margin: 20px;" ><br>
				Doctor Type:<select name="doc_type">
								<option value="General">General</option>
								<option value="ENT">ENT</option>
							</select><br><br>
				<input type="submit" name="doctorcreate" value="CREATE">
			</form>	
		</div>
		<div class="second">
			<form method="POST" action="admindoctorcreate.php" style="margin: 20px;" id="RD">
				<h1 style="color:yellow;">REMOVE A DOCTOR</h1>
				Doctor Id:<input type="text" name="doctorid" style="margin: 20px"><br><br>
				<input type="submit" name="doctordelete" value="DELETE">
			</form>	
		</div>
		<div >
			<form method="POST" action="admindoctorcreate.php" style="margin: 20px;" id="UPD">
				<h1 style="color:yellow;">UPDATE DOCTOR</h1>
				Doctor Id:<input type="text" name="doctorid" style="margin: 20px;" required><br>
				Doctor Name:<input type="text" name="doctorname" style="margin: 20px"  required><br>
				E-mail:<input type="text" name="email" style="margin: 20px;" required><br>
				Doctor Type:<select name="doc_type">
								<option value="General">General</option>
								<option value="ENT">ENT</option>
							</select><br><br>				
				<input type="submit" name="doctorupdate" value="UPDATE">
			</form>	
		</div>
		<!-- STAFF..............................................
		<div class="first">
			<form method="POST" action="adminstaffcreate.php" style="margin: 20px;" id="ANS">
				<h1>ADD A NEW STAFF</h1>
				Staff Id:<input type="text" name="staffid" style="margin: 20px;" ><br>
				Staff Name:<input type="text" name="staffname" style="margin: 20px" required><br>
				E-mail:<input type="text" name="email" style="margin: 20px;" ><br>
				Password:<input type="password" name="password" style="margin: 20px;" ><br>
				<input type="submit" name="staffcreate" value="CREATE">
			</form>	
		</div>
		<div class="second">
			<form method="POST" action="adminstaffcreate.php" style="margin: 20px;" id="RS">
				<h1>REMOVE A STAFF</h1>
				Staff Id:<input type="text" name="staffid" style="margin: 20px"><br><br>
				<input type="submit" name="staffdelete" value="DELETE">
			</form>	
		</div>
		<div >
			<form action="adminstaffcreate" style="margin: 20px;" id="UPS">
				<h1>UPDATE STAFF</h1>
				Staff Name:<input type="text" name="staffname" style="margin: 20px" required><br>
				Staff Id:<input type="text" name="docname" style="margin: 20px;" required><br>
				E-mail:<input type="text" name="docname" style="margin: 20px;" required><br>
				Password:<input type="password" name="docname" style="margin: 20px;" required><br>
			</form>	
		</div>
		 STAFF..............................................-->

		<div >
			<?php include 'doctordisplay.php'; ?>
		</div>
		<div id="VP">
			<?php include 'patientdisplay.php'; ?>
		</div>
		<div id="VDP">
			ABCD
		</div>
		<script type="text/javascript">
			var y =document.getElementById('AND');
			var z =document.getElementById('RD');
			var up =document.getElementById('UPD');
			var vdoc =document.getElementById("VD");
			var vpat =document.getElementById("VP");
			var v1 =document.getElementById('VDP');
			
			function doFunc1(x){
				if (x.id == 'link1'){
					z.style.display = "none";
					up.style.display = "none";
					vdoc.style.display = "none";
					vpat.style.display = "none";
					v1.style.display = "none";
					if (y.style.display === "none"){
					y.style.display = "block";
					}
					else{
						y.style.display = "none";
							}
						}
				}
			function doFunc2(x){
					if (x.id == 'link2'){
					y.style.display = "none";
					up.style.display = "none";
					vdoc.style.display = "none";
					vpat.style.display = "none";
					v1.style.display = "none";
					if (z.style.display === "none"){
					z.style.display = "block";
					}
					else{
						z.style.display = "none";
							}
						}
				}
			function doFunc3(x){
					if (x.id == 'link3'){
					y.style.display = "none";
					z.style.display = "none";
					vdoc.style.display = "none";
					vpat.style.display = "none";
					v1.style.display = "none";
					if (up.style.display === "none"){
					up.style.display = "block";
					}
					else{
						up.style.display = "none";
						}
					}
				}
			function displayFunc1(x){
					if (x.id == 'display1'){
						y.style.display = "none";
						z.style.display = "none";
						up.style.display = "none";
						vpat.style.display = "none";
						v1.style.display = "none";
						if (vdoc.style.display === "none"){
						vdoc.style.display = "block";
					}
					else{
						vdoc.style.display = "none";
							}
					}
				}
			function displayFunc2(x){
					if (x.id == 'display2'){
						y.style.display = "none";
						z.style.display = "none";
						up.style.display = "none";
						vdoc.style.display = "none";
						v1.style.display = "none";
						if (vpat.style.display === "none"){
						vpat.style.display = "block";
					}
					else{
						vpat.style.display = "none";
							}
					}
				}

				
		function func1(x){
					if(x.id == 'a1'){
						vdoc.style.display = "none";
						if (v1.style.display === "none"){
						v1.style.display = "block";
					}
					else{
						v1.style.display = "none";
				}
					}
				}
		</script>
			
	</div>
	<div style="clear: both;"></div>
</body>
</html>