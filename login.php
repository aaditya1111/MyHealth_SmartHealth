<!DOCTYPE html>
<html lang="en">

<head>
    <title>myHealth</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="myHeath, Health Portal, Pateint Data" />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="web/css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>


<body>
    <h1></h1>
    <div class=" w3l-login-form">
        <h2 style="text-decoration-color: #C09DA4">Patient Login</h2>
        <form action="plogin_loc.php" method="POST">

            <div class=" w3l-form-group">
                <label>Email Id:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
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
            <!--<div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>-->
            <button type="submit" name="login-submit">Login</button>
        </form>
          <p class=" w3l-register-p">Login as<a href="login-hospital_admin.php" class="register"> Hospital-Admin</a></p>
          <p class=" w3l-register-p">Don't have an account?<a href="signup.php" class="register"> Patient Sign up/</a><a href="hospital-signup.php" class="register">Hospital-SignUp</a></p>
    </div>
    <footer>
        <p class="copyright-agileinfo"> &copy; 2019 HackinCity Project. All Rights Reserved | Design by <a href="">Aaditya-Aman-Varun</a></p>
    </footer>

</body>

</html>
