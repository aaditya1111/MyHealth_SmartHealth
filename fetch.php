<?php
session_start();
$con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'myhealth');
  if(!$con)
  echo "<script> alert('Connection Failed') </script>";
	$res="select * from patient_reg ";
 $query=mysqli_query($con,$res);
 $val=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<span>Aadhar Number: </span><td><?php echo $val['aadhaar_no']; ?></td><br>
<span>Patient Name: </span><td><?php echo $val['name']; ?></td><br>
<span>Last Visit: </span><td><?php echo $val['last_visit']; ?></td><br>
<span>Doctor Consulted: </span><td><?php echo $val['doctor_name']; ?></td><br>
<span>Diseases Found: </span><td><?php echo $val['diseases_found']; ?></td><br>
<span>Next Visit Date: </span><td><?php echo $val['next_visit']; ?></td><br>
<br><br>
</body>
</html>
