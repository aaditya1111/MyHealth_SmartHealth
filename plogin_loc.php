
<?php
session_start();
{
$email=$_POST['email'];
$psw=$_POST['pwd']; 
 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'myhealth');
  if(!$con)
  echo "<script> alert('Connection Failed') </script>";
 
 $res="select* from signup";
 $query=mysqli_query($con,$res);

 if(!$query)
 {
	 echo "<script> alert('DATA BASE NOT FOUND') </script>";
 }
   $num=mysqli_num_rows($query);
   $temp=0;
 for($i=0;$i<$num;$i++)
 {
	 $val=mysqli_fetch_array($query);
	 {
		 if($val['email']==$email && base64_decode($val['password'])==$psw)
		 {
		 	$_SESSION['email']=$email;
		 	$temp=1;
			echo"You are Successfully Logged In";
			header('Location: http://localhost/myhealth/fetch.php');

			
		 }
	 } 
 }
 
 if($temp==0)
 {
	        echo "<div>";
            echo "<b>No existing user or wrong password.<b>";
			echo "<br>";
			
            echo "</div>";
 }
 }

?> 