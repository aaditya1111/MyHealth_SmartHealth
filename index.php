<?php?>
<html>
<title>myHealth</title>
<meta charset="UTF-8">
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
<link href='https://fonts.googleapis.com/css?family=Bowlby One SC' rel='stylesheet'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
a.b{
  font-family: 'Bowlby One SC';font-size: 15px;


}
.bgimg-1   {
    background-position: center;
    background-size: cover;
    background-image: url("pics/home2.png");
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 13px;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
</style>
<body>

<nav>
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button w3-wide b">myHealth</a>
   
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i><b>HOME</b></a>
      <a href="mission.html" class=" w3-bar-item w3-button"><i class="fa fa-photo"></i><b>MISSION</b></a>
      <a href="team.html" class="w3-bar-item w3-button"><i class="fa fa-user"></i><b>TEAM</b></a>
      <a href="patient_reg_form.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i><b>PATIENT-RECORD</b></a>
      <a href="contact.html" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i><b> CONTACT</b></a>
      <a href="login.php" class="w3-bar-item w3-button w3-padding-small w3-hide-small" style="Float:right"><button onclick="document.getElementById('id01').style.display='block'" style="width:150px; height: 40px; padding: 5px; background-color: #fff"><b>Log In | Sign Up</b></button></a>
    </div>
    

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
</nav>

<!-- On small Screen -->

<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
  <a href="mission.html" onclick="w3_close()" class="w3-bar-item w3-button">MISSION</a>
 <a href="team.html" class="w3-bar-item w3-button"><i class="fa fa-user"></i>TEAM</a>
  <a href="portfolio.html" onclick="w3_close()" class="w3-bar-item w3-button">PORTFOLIO</a>
  <a href="finalapply.php" onclick="w3_close()" class="w3-bar-item w3-button">APPLY</a>
  <a href="contact.html" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>


<!--<header class="w3-display-container" id="home">
  <div class="w3-display-left w3-text-black" style="padding:60px; padding-top:200px
  ">
    <span class="w3-jumbo w3-hide-small" style="font-family: 'Aclonica' ">Come, Check & get healthy</span><br>
    
    <span  style="font-family: 'Berkshire Swash';font-size:30px ; padding:15spx"><i><b>Stop wasting valuable time with stuffs that just isn't you.</b></i></span>
    <p><a href="sponsor.php" class=" w3-button w3-red w3-padding-large w3-large w3-margin-top  w3-hover"><b>Sponsor Our Artisans</b></a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
  </div>
</header>-->

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center" id="home">
    <img src="pics/img1.jpg" style="width:100%;height:650px">
    <div class="centered w3-display-left w3-text-black" style="padding:60px; padding-top:70px"><span class=" w3-hide-small" style="font-family: 'Aclonica'; font-size: 50px ">Come, Check & Get Healthy</span><br><br>
    <span  style="font-family: 'Berkshire Swash';font-size:30px ; padding:15spx"><i><b>Your Health are in Good Hands</b></i></span>
    <br><br>
    <a href="login.php" class="w3-bar-item w3-button w3-padding-small w3-hide-small" style="padding-right: 50px"><button onclick="document.getElementById('id01').style.display='block'" style="width:150px; height: 40px; padding: 5px; background-color:#D3D3D3"><b>Sign In</b></button></a>
    <a href="signup.php" class="w3-bar-item w3-button w3-padding-small w3-hide-small"><button onclick="document.getElementById('id01').style.display='block'" style="width:150px; height: 40px; padding: 5px; background-color:white"><b>Sign Up</b></button></a>
    </div>
    
    </div>

  <div class="mySlides w3-display-container w3-center" id="home">
    <img src="pics/img4.jpg" style="width:100%;height:650px">
    <div class="centered w3-display-left w3-text-black" style="padding:60px; padding-top:70px"><span class=" w3-hide-small" style="font-family: 'Aclonica'; font-size: 50px ">Come, Check & Get Healthy</span><br><br>
    <span  style="font-family: 'Berkshire Swash';font-size:30px ; padding:15spx"><i><b>Your Health are in Good Hands</b></i></span>
    <br><br>
    <a href="login.php" class="w3-bar-item w3-button w3-padding-small w3-hide-small" style="padding-right: 50px"><button onclick="document.getElementById('id01').style.display='block'" style="width:150px; height: 40px; padding: 5px; background-color:#D3D3D3"><b>Sign In</b></button></a>
    <a href="signup.php" class="w3-bar-item w3-button w3-padding-small w3-hide-small"><button onclick="document.getElementById('id01').style.display='block'" style="width:150px; height: 40px; padding: 5px; background-color:white"><b>Sign Up</b></button></a>
    </div>
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center" id="home">
    <img src="pics/img3.jpg" style="width:100%;height:650px ">
    <div class="centered w3-display-left w3-text-black" style="padding:60px; padding-top:70px"><span class=" w3-hide-small" style="font-family: 'Aclonica'; font-size: 50px ">Come, Check & Get Healthy</span><br><br>
    <span  style="font-family: 'Berkshire Swash';font-size:30px ; padding:15spx"><i><b>Your Health are in Good Hands</b></i></span><br><br>
    <a href="login.php" class="w3-bar-item w3-button w3-padding-small w3-hide-small" style="padding-right: 50px"><button onclick="document.getElementById('id01').style.display='block'" style="width:150px; height: 40px; padding: 5px; background-color:#D3D3D3"><b>Sign In</b></button></a>
    <a href="signup.php" class="w3-bar-item w3-button w3-padding-small w3-hide-small"><button onclick="document.getElementById('id01').style.display='block'" style="width:150px; height: 40px; padding: 5px; background-color:white"><b>Sign Up</b></button></a>
    </div>
    
  </div>


<div class="w3-container" style="padding:40px" id="about">
  <h3 class="w3-center"><b>About This Platform</b></h3>
  <p class="w3-center w3-large">Key features of our platform</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Monitoring </p>
      <p>We are too responsive to monitor health status of a Man/Woman. We continuously focus the various health related checkups and factors.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-spinner w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Connectivity</p>
      <p>We respect the need of real India that they face health related issues, now they can connect to their past checkups and hosted Hospitals too </p>
    </div>
    <div class="w3-quarter">
      <i class="fas fa-burn w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Blood Bank</p>
      <p>We also request Hospitals to show the current status of their Blood Bank so that real time need of patient can be procured.</p>
    </div>
    <div class="w3-quarter">
      <i class="fas fa-ambulance w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>We provide a digital support to enchance the health status of a person. They can obtain all details of their past checkups. </p>
    </div>
  </div>
</div>



  <div class="w3-dark-grey" id="services">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center" style="margin:-35px 0px 0px 0px">MAKE INDIA HEALTHY AGAIN</h2>
       <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="pics/h1.jpg" style="width:100%; height: 170px"class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Get Healthy</b></p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('studymodal').style.display='block'">Get</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="pics/h2.jpg" style="width:100%; height: 170px" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Blood Banks</b></p>
         <a></a><button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketmodal').style.display='block'">Get</button></a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
        <img src="pics/h3.jpg" alt="Career" style="width:100%;height: 170px" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Check your Health Stats</b></p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketmodal').style.display='block'">Get</button>
          </div>
        </div>
      </div>
    </div>
  </div>
 





<div class="w3-container w3-white" style="padding:120px 260px">
  <div class="w3-row-padding">
    <div class="w3-col m6" style="font-family: 'Carter One';font-size: 18px">
      <h1 style="font-family: 'Jacques Francois Shadow' " >We Invest in Health Tech.</h1>
      <p>We help Hospitals to Digitalize their services <br>at our Platform so that any Patient can find Better Solutions of their Problems.</p>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="pics/h4.jpg" alt="Social Tech">
    </div>
  </div>
</div>



<!--<div class="w3-container w3-center w3-dark-grey" style="padding:100px 16px" id="pricing">
  <h1 style="font-family: 'Aclonica' ">How We Do</h1>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-red w3-xlarge w3-padding-32">Accelerate</li>
        <li class="w3-white w3-padding-52"><img src="growth-800x420.jpg" style="width: 200px " class="w3-hover-opacity"></li>
        
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Click here</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-section" style="float: right;">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Inspire</li>
         <li class="w3-white w3-padding-52"><img src="pixelunlimitedstoragefeat-800x420.jpg" style="width: 200px " class="w3-hover-opacity"></li>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Click here</button>
        </li>
      </ul>
    </div>
  </div>
</div>-->



<!--<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <p  style="font-family: 'Bonbon' ;font-size: 48px "><b>Testimonial</b></p>
      <p>Entrepreneurial, determined and innovative : be creative ,not afraid to fail until you succeed ,<br> visionary and out of the box thinker.<br> Ideally We are looking to make a big difference not a marginal or incremental improvement.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class=" w3-margin-right"></i>Wearable Crafted Products</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class=" w3-margin-right"></i>Domestic Crafted Produts</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class=" w3-margin-right"></i>Eatable Recipies</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
      </div>
    </div>
  </div>
</div>-->

<div class="w3-container w3-light-grey" style="padding:80px" id="work">
  <h2 class="w3-center" style="font-family: 'Bungee Inline' ">OUR SPONSORS</h2>
  <p class="w3-center w3-large">These are the People who have collborted with our Platform to get Facilated and facilitate other with the services.</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="images.jpg" style="width:100% ; height: 225px" onclick="onClick(this)" class="w3-hover-opacity" alt="1st FRIENDS">
      <h4 style="margin-left: 100px">Rahul Agnihotri</h4>
      <h6 style="margin-left: 100px">(Dabur Industries)</h6>
    </div>
    <div class="w3-col l3 m6">
      <img src="azimpremji_1386585743.jpg" style="width:100% ; height: 225px" onclick="onClick(this)" class="w3-hover-opacity" alt="2nd FRIENDS">
      <h4 style="margin-left: 100px">Aziz Saxena</h4>
      <h6 style="margin-left: 90px">(Raymond Industries)</h6>
    </div>
    <div class="w3-col l3 m6">
      <img src="laskhmimittal_1386316652.jpg" style="width:100% ; height: 225px" onclick="onClick(this)" class="w3-hover-opacity" alt="3rd FRIENDS">
      <h4 style="margin-left: 100px">Laxmi Mittal</h4>
      <h6 style="margin-left: 90px">(ArcelorMittal Steel)</h6>
    </div>
    <div class="w3-col l3 m6">
      <img src="womenentrepreneursinindia-jpg.png" style="width:100%; height: 225px" onclick="onClick(this)" class="w3-hover-opacity" alt="4th FRIENDS">
      <h4 style="margin-left: 100px">Bhumika Oberoi</h4>
      <h6 style="margin-left: 90px">(Vardhman Industries)</h6>
    </div>
  </div>

  
  </div>
</div>


<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>




<!-- Footer -->
<div class="w3-container w3-black " style="padding:5px 3px" id="contact">
  <h3 class="w3-center"><u>CONTACT</u></h3><br>
  <div class="w3-row-padding w3-center" style="margin-top:8px">
    <div class="w3-center " style="width: 1200px; float: center; padding-left: 300px ">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> IET Lucknow, Jankipuram, Lucknow, Uttarpradesh</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: 8808414903, 9140176632</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: support@localartisan.com</p>
      <br>
      <form action="action_page.php " target="_blank">
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

    <!--<div class="w3-half" style="padding-left:300px">
      <p class=" w3-xxlarge w3-margin-right" style="float: right">About Us</p><br><br><br>
      <p class=" w3-medium w3-margin-right" style="float: right">India is a land of diversity. Everything starting from <br>language dialect, clothes , traditions , art to festivals has its own flavour and essence .<br> So we at “localartisan.com” help to connect Indian artisans and designers - communities throughout the developing world.<br>  With the help of people who have carried these century long art form one generation to other,we make exquisite products which are the perfect blend of design and culture.
</p>

    
  </div>
</div>-->
<!--<footer class="w3-center w3-black w3-padding-8">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xxlarge w3-section">
    <a href="https://www.facebook.com/login.php" target="blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com/?hl=en" target="blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://accounts.snapchat.com/accounts/login?continue=https%3A%2F%2Faccounts.snapchat.com%2Faccounts%2Fwelcome" target="blank"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
    <a href="https://in.pinterest.com/" target="blank"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    <a href="https://twitter.com/" target="blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/feed/" target="blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
  </div>
  <p>Copyright © 2018 - All Rights Reserved - <a href="http://www.handscart.com/" title="W3.CSS" target="_blank" class="w3-hover-text-green">myHealth.com</a></p>
</footer>-->
<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 4000);
}
</script>

</body>
</html>
