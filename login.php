<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
  </head>
		
		<body class="bg">
		<img src="try.jpg" alt="talaria logo" class= pic>
			<div class="start">
  			<center> <h2 class="yess">Login</h2> </center>
				<form method="POST" action="logprocess.php">

  					<label class="yess">Username</label>
  						<input type="text" id="username" name="username" class="txtbox" placeholder="username" ><br><br>

  		  			<label class="yess">Password</label>
  						<input type="password" id="password" name="password" class="txtbox" placeholder="********"><br><br>

      				<center><button type="submit" class="btn" name="login_user" value="Login">Login</button>
      	
      		<p class="yess">Forgot Your Password? <a href="forgotpassword.php" class="yess">Forgot Password</a></p>
			  <p class="yess">Not yet a member? <a href="registration.php" class="yess">Sign up</a> </center></p>
			</div>
       			</form>
		</body>
</html>

