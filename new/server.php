<?php

// initializing variables
$name = "";
$email    = "";
$password_1 = "";
$password_2 = "";
$contact = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'edumula');
if($db===FALSE)
{
  die("Could Not Connect. ".mysqli_connect_error());
}

// REGISTER USER
if (isset($_POST['signup'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM signup WHERE Name='$name' OR Email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user['Email'] === $email) {
      array_push($errors, "email already exists");
      echo "email already exists";
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    session_start();
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO signup (Name, Email, Password, Contact) values ('$name', '$email', '$password', '$contact')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "You are now logged in";
  	//header('location: index.php');
  }
