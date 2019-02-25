<!DOCTYPE html>
<html lang="en">

<head>
    <title>myHealth|Hospital-SignUp</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="myHeath, Health Portal, Pateint Data" />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="web/css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- fontawesome css -->
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

    <script>
    function ShowHidefun(that) {
        if (that.value == "yes") {
            document.getElementById("ifYes").style.display = "block";
        } else {
            document.getElementById("ifYes").style.display = "none";
        }
    }
</script>

</head>


<body>
    <!-- TODO -- SignUp Logo -->
    <div class="signup-logo">
        <img class="center-block" style="width: 20%; height: 20%" src="PICS/signup.png" alt="SignUp Logo">
    </div>
    <div class="w3l-login-form">
        <!--<h2>Sign Up Here</h2>-->
        <form action="hospital_action.php" method="POST">

            <div class=" w3l-form-group">
                <label>Hospital Name</label>
                <div class="group">
                    <i class="fas fa-plus-square"></i>
                    <input type="text" class="form-control" name="hospital_name" placeholder="Hospital Name" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Location</label>
                <div class="group">
                    <i class="fas fa-map-marker-alt"></i>
                    <input type="text" class="form-control" name="location" placeholder="Location" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Mobile No.</label>
                <div class="group">
                    <i class="fas fa-phone"></i>
                    <input type="text" class="form-control" name="mobile_no" placeholder="Mobile No" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Email:</label>
                <div class="group">
                    <i class="fas fa-envelope"></i>
                    <input type="text" class="form-control" name="email" placeholder="email@example.com" required="required" />
                </div>
            </div>
            
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Confirm Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="confirmpwd" placeholder="Confirm Password" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label for="blood-bank">Do you have Blood Blank?:</label>
                <div class="group">
                    <i class="fas fa-venus-mars"></i>
                    <select class="form-control" name="blood-bank" onchange="ShowHidefun(this)">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                </div>
                <div class="group" id="ifYes" style="display: block;">
                    <input type="text" name="ifyes" id="txtBox" class="form-control" placeholder="If yes, then name all the blood groups!">
                </div>
            </div>
            <!--<div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>-->
            <button type="submit" name="signup-submit">Sign Up</button>
        </form>
        <p class=" w3l-register-p">Already a member?<a href="login-hospital_admin.php" class="register"> Hostel-Admin Login</a></p>
    </div>
    <footer>
        <p class="copyright-agileinfo"> &copy; 2019 HackinCity Project. All Rights Reserved | Design by <a href="">Aaditya-Aman-Varun</a></p>
    </footer>

</body>
</html>