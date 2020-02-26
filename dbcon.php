<?php
include('config.php');

  // REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $conf_password = mysqli_real_escape_string($conn, $_POST['conf_password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $conf_password) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (fullname,username, email, password) 
  			  VALUES('$fullname','$username', '$email', '$password')";
  	mysqli_query($conn, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You have successfully registered";
  	header('location: login.php');
  }
  if($query)
			{
				echo '<script type="text/javascript"> alert("You Have Successfully Signed Up ") </script>';
			}
      else
      {
				echo '<script type="text/javascript"> alert("Registration Failed") </script>';
      }
    }
    	// else
			// {
			// 	echo '<script type="text/javascript"> alert("Password and Confirm Password does not match")</script>';
			// }

?>