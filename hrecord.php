<?php
session_start();
$con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'iitm');
  if(!$con)
  echo "<script> alert('Connection Failed') </script>";
	$res="select * from record ";
 $query=mysqli_query($con,$res);
 $val=mysqli_fetch_array($query);
?>
 
 
 <html>
  <head>
  <link href="css/hrecord.css" rel="stylesheet" type="text/css"/>
  </head>
  
  <body style="background:reportbg.jpg; background-repeat:no_repeat;">
  <div id="header">
       <p class="txt1">Health and Fitness Report</p>
       <p class="txt2"><tr>
	   <td><b>Roll no:</b></td>
	   <td><?php echo $val['roll']; ?></td>
	   </tr></p>
   </div>

   <div id="content">
       <p class="txt3">Body Mass Index(BMI)</p>
	    <table cellspacing="15px" cellpadding="10px">
		<tr><td colspan="3" class="subhead">Your Child's BMI report:</td></tr>
		<tr>
		<td>Height:<?php echo $val['height']; ?></td>
		<td>Weight:<?php echo $val['weight']; ?></td>
		</tr>
		<tr>
		<td>BMI:<?php echo $val['bmi']; ?></td>
		<td>BMI Percentile:<?php echo $val['bmi_per']; ?></td>
		</tr>
		<tr class="details">
		<td>0-5%<br>Underweight</td>
		<td>6%-85%<br>Healthy weight Range</td>
		<td>86% +<br>Underweight</td>
		</tr>
		</table>
	</div>


	<div id="content">
       <p class="txt3">Eye Care</p>
	    <table cellspacing="15px" cellpadding="10px">
		<tr><td colspan="3" class="subhead">Your Child's vision:</td></tr>
		<tr>
		<td>Vision:<?php echo $val['vision']; ?></td>
		</tr>
		</table>
	</div>

	<div id="content">
       <p class="txt3">Haemogram</p>
	    <table cellspacing="15px" cellpadding="10px">
		<tr><td colspan="3" class="subhead">Your Child's blood report:</td></tr>
		<tr>
		<td>Haemoglobin:<?php echo $val['haemoglobin']; ?></td>
		<td>Haematocrit:<?php echo $val['haemotocrit']; ?></td>
		</tr>
		<tr>
		<td>RBC count:<?php echo $val['rbc']; ?></td>
		<td>WBC count:<?php echo $val['wbc']; ?></td>
		</tr>
		<tr>
		<td>Platelets count:<?php echo $val['platelets']; ?></td>
		<td>Blood Group:<?php echo $val['bgrp']; ?></td>
		</tr>
		</table>
	</div>
	
	<div id="content">
       <p class="txt3">Breathing Related</p>
	    <table cellspacing="15px" cellpadding="10px">
		<tr><td colspan="3" class="subhead">Your Child's breathing related issues:<?php echo $val['breathing_issues']; ?></td></tr>
		</table>
	</div>

    <div id="content">
       <p class="txt3">Bone Density</p>
	    <table cellspacing="15px" cellpadding="10px">
		<tr><td colspan="3" class="subhead">Your Child's BMD:<?php echo $val['bmd']; ?></td></tr>
      </table>
	</div>

	<div id="content">
       <p class="txt3">Others</p>
	    <table cellspacing="15px" cellpadding="10px">
		<tr><td colspan="3" class="subhead"></td></tr>
		<tr>
		<td>Fever Frequency:<?php echo $val['fever']; ?></td>
		<td>Food Allergies:<?php echo $val['allergies']; ?></td>
		</tr>
		<tr>
		<td>Skin Infections:<?php echo $val['skin_infections']; ?></td>
		<td>ENT Problems:<?php echo $val['ent_prb']; ?></td>
		</tr>
		<tr>
		<td>Sore throat frequencies:<?php echo $val['sore_throat']; ?></td>
		</tr>
		</table>
	</div>

	</body>
	</html>
   
   