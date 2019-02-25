<?php include ('login1.html'); ?>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Allerta Stencil' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Finger Paint' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Federo' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="style.css">

<script>
var arr=["Images/img2.jpg","Images/1.jpg","Images/2.jpg","Images/3.jpg","Images/img5.jpg","Images/4.jpg","Images/5.jpg"];
var n=0;
function change()
{
var a=document.getElementById("img1");
a.src=arr[n];
n++;

if(n==arr.length)
{
n=0;
}
window.setTimeout("change()",5000);
}
</script>
</head>
<body onload="change()" >
<div id="outer">
<div id="header">

<div id="logo"><h1>Edu -</h1></div>
<div id="logo1"><h1>Mula</h1></div>
<ul id="menu1" >
<a href="project3.php"><li>Home</li></a>
<a href="subjects.html"><li>Subjects</li></a>
<li>Services</li>
<li>Vocational Trainings</li>
<li>Registration</li>
<li>Contact Us</li><br>
<li style="Float:right"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login & Sign Up</button></li>

</ul>

</div>
<div id="content">
<div id="slider"><img id="img1" height="650px" width="100%"/>
<h1 style="position:relative;top:-500px;left:170px;color:white;font-family: 'Aclonica';font-size:40px">We are working to make people to carve<br> the paths of their lives....<br>
</h1>
<br>
<br>
<p style="position:relative;top:-400px;left:700px;color:Yellow;font-family: 'Finger Paint';font-size:35px"><b>"One Child ,One Teacher, One book,<br> One Pen can Change the world."</b><br> <i>-Malala Yousufzai-</i>
</p>
 </div>
<h1 style="position:relative;left:40px"><b>About Us:</b><br></h1>
<p style=" font-family: 'Federo'">We are providing a platform to Illiterate, Poor & Unprivilaged people to get their dreams fly and make others educated and get uplifted.<br> We are getting the help of different Companies for financial and Management supports, And we will launching this project to<br> colleges and Schools to get their students (Volunteers) to teach those needed children  and get stipend, certificates <br>as well as industrial training with endorsing company. We are also providing a free platform to those <br>Volunteers to apply for open Job & Internship Opportunities in that Company.</p>

</div>

</body>
</html>