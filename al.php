<?php
	$con=mysqli_connect("localhost:3307","root","","hosdb");

	$query="select d.doctorid,d.doctorname,p.id,p.firstname,p.lastname,p.mobile,p.disease,p.appointment_status from admindoctorcreate d,patientdetails p where (d.doc_type='General' or d.doc_type='ENT') and d.doctorname=p.doctor";
					$result=mysqli_query($con,$query);

					echo "<table border='2'>
					<tr>
					<th>Doctor Id</th>
					<th>Doctor Name</th>
					<th>Patient Id</th>
					<th>Patient Name</th>
					<th>Mobile</th>
					<th>Disease</th>
					<th>Appointment</th>
					<th>Appointment Status</th>
					</tr>";
					while ($row=mysqli_fetch_array($result)) {
						echo "<tr>";
						echo "<td>".$row['doctorid']."</td>";
						echo "<td>".$row['doctorname']."</td>";
						echo "<td>".$row['id']."</td>";
						echo "<td>".$row['firstname']." ".$row['lastname']."</td>";
						echo "<td>".$row['mobile']."</td>";
						echo "<td>".$row['disease']."</td>";
						echo "<td>"."<form method='post' action='patientdetailssubmission.php'>
										<input type='text' name='patientid' placeholder='patient-id' required>
											<select name='status_select'>
												<option disabled selected>Select</option>
												<option style='color:green;' value='Appointed'>Appointed</option>
											</select>
										<input type='submit' name='check_status' value='OK'>
									</form>"."</td>";
						echo "<td>".$row['appointment_status']."</td>";	
						echo "</tr>";
						
					}
					echo "</table>";
?>