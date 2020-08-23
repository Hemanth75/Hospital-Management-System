<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="uikit/css/uikit.min.css" />
        <script src="uikit/js/uikit.min.js"></script>
        <script src="uikit/js/uikit-icons.min.js"></script>
        <style type="text/css">
        	#container{
        		background-image: url('images/hosp.jpg');
        		background-repeat: no-repeat;
        		background-size: cover;
        		width: 1800px;
        		height: 800px
        	}
        	#div1{
        		float: left;
        		margin-left: 50px;
        	}

        	#div2{
        		float: left;
        		margin-left: 800px; 
        	}
        	#STATUSFORM{
        		display: none;
        	}
        </style>
</head>
<body>
	<div id="container">
	<a href="doctorlogin.php"><p style="font-size: 25px; color:yellow;margin-left: 1400px;">BACK</p></a>

		<div class="uk-position-left" id="div1">
			<div class="uk-card uk-card-default uk-card-body" style="background-color: yellow;">

				<form method="post"  style="width: 500px;" action="patientdetailssubmission.php">

					<div >
					</div>
					<div >
						<label for="firstname" class="-margin">First Name</label>
						<input type="text" name="firstname" class="uk-input" id="firstname" required>
					</div>
					<div >
						<label for="lastname" class="uk-margin">Last Name</label>
						<input type="text" name="lastname" class="uk-input" id="lastname" required>
					</div>
					<div >
						<label for="age" class="uk-margin">Age</label>
						<input type="text" name="age" class="uk-input" id="age" required>
					</div>
					<div >
						<label for="mobile" class="uk-margin">Mobile</label>
						<input type="text" name="mobile" class="uk-input" id="mobile" required>
					</div>
					<div >
						<label for="address" class="uk-margin">Address</label>
						<textarea name="address" class="uk-input" id="address" style="height: 100px;" rows="3" required
						></textarea>
					</div>
					<div >
						<label for="disease" class="uk-margin">Disease</label>
						<input type="text" name="disease" class="uk-input" id="disease" required>
					</div>
					<select name="doc_type" id="doc_type"  onclick="change(this.value);" class="uk-margin">
						<option value="" disabled selected>Select</option>
						<option value="General">General</option>
						<option value="ENT">ENT</option>
					</select><br>
					<select name="doctorlist" id="doctorlist" class="uk-margin">	
					</select>
					<div class="uk-margin">
						<input type="submit" name="pat_details" value="BOOK APPOINTMENT">
					</div>
						
					
				</form>
				<button style="margin:20px" onclick="displayFunc1(this)" id="display1" class="uk-margin">CHECK STATUS</button>
			</div>
			
		</div>
		<div id="div2">
				<div class="uk-card uk-card-default uk-card-body" id="STATUSFORM">
			  		<form method="post" action="patientcheckstatus.php" >
				        <p>LOGIN AGAIN TO CHECK STATUS</p>
						<div >
							<input type="text" name="firstname" class="uk-input" placeholder="firstname" required>
						</div>
						<div >
							<input type="text" name="lastname" class="uk-input" placeholder="lastname" required>
						</div>
						<div >
							<input type="submit" name="pat_login" value="LOGIN">
						</div>
					</form>
			 	</div>			
		</div>
		<div style="clear: both;"></div>
	</div>
	<?php include 'abcd.php'; ?>
	<script type="text/javascript">
		var doctortypes = {
			General:<?php echo json_encode($ab); ?>,
			ENT:<?php echo json_encode($ac); ?>
		}
		function change(value){
			if(value.length == 0) document.getElementById('doctorlist').innerHTML = "<option></option>";
			else{
				var opt = "";
				for (optId in doctortypes[value]){
					opt += "<option>" + doctortypes[value][optId] + "</option>";
				}
				document.getElementById('doctorlist').innerHTML = opt;
			}
		}
		function bookAppointment(){
			
			document.getElementById('appointment').innerHTML="Appointed";
		
		}
		var statuscheck=document.getElementById('STATUSFORM');
		function displayFunc1(x){
			if(x.id=='display1'){
				if(statuscheck.style.display==="none"){
					statuscheck.style.display="block";
				}
				else{
					statuscheck.style.display="none";
				}
			}
		}
	</script>


</body>
</html>