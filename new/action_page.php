<?php session_start(); ?>
<?php

	$email=$_POST["email"];
	$passw=md5($_POST["psw"]);

	$email=stripcslashes($email);
	$passw=stripcslashes($passw);

	$con=mysqli_connect("localhost","root","","edumula");

	$result=mysqli_query($con,"select * from signup where Email='$email' and Password='$passw'") or die("Failed to query database".mysql_error());
	$row=mysqli_fetch_array($result);
	if($row['Email']==$email && $row['Password']==$passw)
	{
		echo "Login Success!!! Welcome ".$row['Name'];
		echo "<script> window.location.assign('project3.php'); </script>";
	}
	else
	{
		echo "Failed to login!";
	}