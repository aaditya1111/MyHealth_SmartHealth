<?php
session_start();
$con=mysqli_connect('localhost','root','','myhealth') or die(mysqli_error());
$aadhaar=$_POST['aadhaar_no'];
$last_date=$_POST['last_date'];
$patient_name=$_POST['patient_name'];
$gender=$_POST['gender'];
$doctor_name=$_POST['doctor_name'];
$diseases=$_POST['diseases'];
$prescription=$_POST['prescription'];
$next_date=$_POST['next_date'];


if(isset($_POST['patient-reg-submit']))
{
	$query="INSERT INTO patient_reg ( sno, aadhaar_no, last_visit, name, gender, doctor_name, diseases_found, presc_med, next_visit)	VALUES (null,'$aadhaar','$last_date','$patient_name','$gender','$doctor_name','$diseases','$prescription','$next_date')";
	$result=mysqli_query($con,$query);
	if($result){
		echo 'inserted';
	}
	else{
		echo 'failed';
	}
	header('Location: http://localhost/myhealth/index.php');
}	
else
	echo "Failed";

?>