<?php 
session_start();
include('login2.html');
$name="Anonymous";
$email='';
$cn='';
$db = mysqli_connect('localhost', 'root', '', 'engilife');
if($db===FALSE)
{
  die("Could Not Connect. ".mysqli_connect_error());
}
if(isset($_SESSION['email'])){
  header('Location: http://localhost/PROJECT/index.php');
  $res= "SELECT * FROM signup WHERE  Email = ".$_SESSION['email'];
  $run = mysqli_query($db, $res);
  if(mysqli_num_rows($run)) {
          echo "<alert>Hello </alert>";
         $row= $run->fetch_assoc();
         $name=$row['Name'];
         $cn=$row['Contact'];
  }
 }else{
header('Location: http://localhost/PROJECT/index.php');
}
?>
<html>
<head>
<title>EngiLife.com</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Carter One' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Jacques Francois Shadow' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bonbon' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bungee Inline' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Capriola' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-green w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="new.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="colleges.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">COLLEGES</a>
    <a href="shop.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SHOPS</a>
    <a href="#engitalk" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ENGI-TALK</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>

    <form action="/action_page.php" class="w3-bar-item w3-button w3-padding-very small w3-hide-small">
      <input type="text" placeholder=" Search here Colleges.." name="search">
      
    </form>
    
<a class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="Float:right"><button onclick="document.getElementById('id01').style.display='block'" style="width:300px">Log In | Sign Up</button></a>
   </div>
  </div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="new.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
  <a href="colleges.html" class="w3-bar-item w3-button w3-padding-large">COLLEGES</a>
  <a href="shop.html"target="_blank" class="w3-bar-item w3-button w3-padding-large">SHOPS</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">MERCH</a>
</div>


<br><br><br>
<br><br>
<div id="Profile" style="text-align: center;  "><h1 style="font-family: 'Sofia' ; font-size: 70px"><b><u>EngiLife</u></b></h1>  </div>

<div style="text-align: center; "><h3 style="font-family: 'Aclonica'"><-----Bridging the Education gap-----></h3></div>
  <br><br>

<div style="text-align: center">
<img  src="pande.jpg" style="border-radius:100% ; width: 280px">
</div>
<div style="text-align: center;  "><h5 style="font-family: 'Amarante' ; font-size: 25px"><b><?php echo $_SESSION['name'].$name; ?></b></h5>
  <h5 style="font-family: 'ABeeZee'"><i class="fa fa-home"></i>Institute of Engineering and Technology Lucknow</h5>
  <ul>
    <li>
      <h5 style="font-family: 'ABeeZee'"><i class="fa fa-book"></i>B.Tech , CSE (2nd Year)</h5>
    </li>
    <li>
      <h5 style="font-family: 'ABeeZee'"><i class="fa fa-book"></i><?php echo $_SESSION['email'].$cn; ?></h5>
    </li>
  </ul>
 </div>
 <br><br>
 <div class="w3-yellow" style=" float: left ; padding-left: 30px ;margin-left: 70px "><h4 style="font-family: 'Amarante'"><a href=""><i class="fa fa-user "></i>About</a></h4></div>
 <div  class="w3-yellow" style=" float: left ; padding-left: 100px  "><h4 style="font-family: 'Amarante'"><a href=""><i class="fa fa-cog"></i>Update Profile</a></h4></div>
 <div class="w3-yellow" style=" float: left ; padding-left: 100px  "><h4 style="font-family: 'Amarante'"><a href=""><i class="fa fa-envelope"></i>Notifications</a></h4></div>
 <div class="w3-yellow" style=" float: left ; padding-left: 100px  "><h4 style="font-family: 'Amarante'"><a href=""><i class="fa fa-comment"></i>Chat</a></h4></div>
 <div class="w3-yellow" style=" float: left ; padding-left: 100px  "><h4 style="font-family: 'Amarante'"><a href=""><i class="fa fa-pencil-square"></i>My Blog</a></h4></div>
 <div class="w3-yellow" style=" float: left ; padding-left: 100px  "><h4 style="font-family: 'Amarante'"><a href=""><i class="fa fa-list-alt"></i>Study Material</a></h4></div>
 <div class="w3-yellow" style=" float: left ; padding-left: 100px  "><h4 style="font-family: 'Amarante'"><a href=""><i class="fa fa-download"></i>Downloads</a></h4></div>
<div class="w3-yellow" style=" float: left ; padding-left: 100px  "><h4 style="font-family: 'Amarante'"><a href="logout.php"><i class="fa fa-power-off"></i>Log Out</a></h4></div>

<br><br><br><br>
<br><br><br><br>
<div style="width: 300px ; height: 600px  ; margin-left: 70px" class="w3-light-blue">
  
  <ul>
    <br>
    <li>
      <p>
        You are among the Top Viewers of Our Website
      </p>
    </li>
  </ul>
</div>

<br><br><br><br>
<br><br><br><br>

<!-- Footer -->
<div class="w3-container w3-black" style="padding:5px 3px" id="contact">
  <h3 class="w3-center" style="float: left"><u>CONTACT</u></h3><br>
  <div class="w3-row-padding" style="margin-top:8px">
    <div class="w3-half">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Aryabhatt Hostel , I.E.T Lucknow , U.P , India</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +91-8808414903 +91-9455012989 +91-7752854394 </p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: support@engilife.com</p>
      <br>
      <form action="action_page.php" target="_blank">
        <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
        <p>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form>
    </div>

    <div class="w3-half" style="padding-left:300px">
      <p class=" w3-xxlarge w3-margin-right" style="float: right">About Us</p><br><br><br>
      <p class=" w3-medium w3-margin-right" style="float: right">India is a land of diversity. Everything starting from <br>Education dialect, clothes , traditions , art to festivals has its own flavour and essence .<br> So we at “EngiLife.com” help to connect All Students  and teachers - communities throughout the developing world.<br>  With the help of people who have carried these century long Educational Elements form one generation to other,we make students to get educated with all the required materials at single platform at single Click.
</p>

    
  </div>
</div>
<footer class="w3-center w3-black w3-padding-8">
  <a href="#Profile" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xxlarge w3-section">
    <a href="https://www.facebook.com/login.php" target="blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com/?hl=en" target="blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://accounts.snapchat.com/accounts/login?continue=https%3A%2F%2Faccounts.snapchat.com%2Faccounts%2Fwelcome" target="blank"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
    <a href="https://in.pinterest.com/" target="blank"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    <a href="https://twitter.com/" target="blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/feed/" target="blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
  </div>
  <p>Copyright © 2018 - All Rights Reserved - <a href="http://www.engilife.com/" title="W3.CSS" target="_blank" class="w3-hover-text-green">Engilife.com</a></p>
</footer>


 </body>
 </html>