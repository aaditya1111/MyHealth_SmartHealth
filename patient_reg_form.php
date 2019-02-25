<!DOCTYPE html>
<html lang="en">

<head>
    <title>myHealth|Pateint Registration Form</title>
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
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <!-- /google fonts-->

    <script type="text/javascript">
        function changeIcon(that) {
            if (that.value=="male") {
                document.getElementById('gender-icon').className="fa fa-mars";
            } else if (that.value=="female") {
                document.getElementById('gender-icon').className="fa fa-venus";
            } else {
                document.getElementById('gender-icon').className="fa fa-genderless"
            }
        }
    </script>

</head>


<body>
    <h1></h1>
    <div class="w3l-login-form">
        <h2 style="text-decoration-color: #C09DA4">Patient Registration Form</h2>
        <form action="includes/patient.inc.php" method="POST">

            <div class=" w3l-form-group">
                <label>Aadhaar No.</label>
                <div class="group">
                    <i class="far fa-address-card"></i>
                    <input type="text" class="form-control" name="aadhaar_no" placeholder="Aadhaar No" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Last Visit:</label>
                <div class="group">
                    <i class="fas fa-calendar"></i>
                    <input type="date" class="form-control" name="last_date" placeholder="Date" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Pateint Name</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="patient_name" placeholder="Pateint Name" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label for="gender">Gender:</label>
                <div class="group">
                    <i id="gender-icon" class="fas fa-mars"></i>
                    <select class="form-control" id="gender" name="gender" onchange="changeIcon(this)">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Doctor Name</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="doctor_name" placeholder="Doctor Name" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Diseases Found:</label>
                <div class="group">
                    <i class="fas fa-diagnoses"></i>
                    <input type="text" class="form-control" name="diseases" placeholder="Diseases" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Prescribed Medicines:</label>
                <div class="group">
                    <i class="fas fa-file-medical"></i>
                    <input type="text" class="form-control" name="prescription" placeholder="Prescription" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Next Visit On:</label>
                <div class="group">
                    <i class="fas fa-calendar"></i>
                    <input type="date" class="form-control" name="next_date" placeholder="Date" required="required" />
                </div>
            </div>
            <!--<div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>-->
            <button type="submit" name="patient-reg-submit">Sign Up</button>
        </form>
        <p class=" w3l-register-p">Already a member?<a href="index.php" class="register"> Login</a></p>
    </div>
    <footer>
        <p class="copyright-agileinfo"> &copy; 2019 HackinCity Project. All Rights Reserved | Design by <a href="">Aaditya-Aman-Varun</a></p>
    </footer>

</body>
</html>