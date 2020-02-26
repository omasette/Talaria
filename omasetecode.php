<?php
	
	if(isset($_POST['login']))
	{
	$fullname = $_POST['Fullname'];
	$username = $_POST['Username'];
	$email = $_POST['Email'];
	$password = $_POST['password'];
	$conf_password = $_POST['Conf_password'];
	
	if($password==$conf_password)
		{
      $query = "SELECT * FROM users WHERE Email='$email'";
				$query_run = mysqli_query($connection, $query);
				
				if(mysqli_num_rows ($query_run)>0)
				{
					echo '<script type="text/javascript"> alert("Email Address already exists...Try another Email address") </script>';
				}
			

			$query = "INSERT INTO users ('Fullname', 'Username', 'Email', 'password', 'Conf_password')
			VALUES ('$fullname', '$username', '$email', '$password', '$conf_password')";
			$query_run = mysqli_query($connection, $query);
			
			if($query_run)
			{
				echo '<script type="text/javascript"> alert("You Have Successfully Signed Up ") </script>';
			}
      else
      {
				echo '<script type="text/javascript"> alert("Registration Failed") </script>';
      }
    }
    	else
			{
				echo '<script type="text/javascript"> alert("Password and Confirm Password does not match")</script>';
			}
	}

?>