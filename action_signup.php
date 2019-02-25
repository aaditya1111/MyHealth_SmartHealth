<?php
session_start();
$con=mysqli_connect('localhost','root','','myhealth') or die(mysqli_error());
$name=$_POST['patient_fname'];
$last=$_POST['patient_lname'];
$contact=$_POST['mobile_no'];
$sex=$_POST['gender'];
$dobn=$_POST['dob'];
$email=$_POST['email'];
$psw=base64_encode($_POST['pwd']);




if(isset($name))
{
	$query="INSERT INTO `signup` ( `name`, `last`, `contact`, `gender`, `dob`, `email`, `password`)	VALUES ('".$name."','".$last."','".$contact."','".$sex."','".$dobn."','".$email."','".$psw."')";
	$result=mysqli_query($con,$query);
	if($result){
		echo 'inserted';
	}
	else{
		echo 'failed';
	}
	header('Location: http://localhost/myhealth/login.php');
}	
else
	echo "Failed";

?>