<?php
session_start();
$con=mysqli_connect('localhost','root','','myhealth') or die(mysqli_error());
$name=$_POST['hospital_name'];
$location=$_POST['location'];
$contact=$_POST['mobile_no'];
$email=$_POST['email'];
$psw=base64_encode($_POST['pwd']);
$bb=$_POST['blood-bank'];




if(isset($name))
{
	$query="INSERT INTO `hsignup` ( `hname`, `location`, `contact`, `email`, `password`, `blood`)	VALUES ('".$name."','".$location."','".$contact."','".$email."','".$psw."','".$bb."')";
	$result=mysqli_query($con,$query);
	if($result){
		echo 'inserted';
	}
	else{
		echo 'failed';
	}
	header('Location: http://localhost/myhealth/login-hospital_admin.php');
}	
else
	echo "Failed";

?>