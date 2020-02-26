<?php include ('dbcon.php'); ?>
<html>
<head>
   <title> Signup/registration</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body class="bg"> 
    <img src="try.jpg" alt="talaria logo" class= pic>
  <div class = "start">
    
    <h1 class="yess"> Sign up or Register Here</h1>
	      <form action="dbcon.php" method="POST">
		  <?php include('errors.php'); ?>

            <label class="yess"> Full Name: </label>
              <input type="text" name="fullname" class="txtbox" placeholder="Enter Full name" /> <br><br>
            <label class="yess"> Username: </label>
              <input type="text" name="username" class="txtbox" placeholder=" Username" /> <br><br>
            <label class="yess"> Email Address: </label>
              <input type="text" name="email" class="txtbox" placeholder="youremail@gmail.com " /> <br><br>
            <label class="yess"> Password: </label>
              <input type="password" name="password" class="txtbox" placeholder="********" /> <br><br>
            <label class="yess"> Confirm Password: </label>
	            <input type="password" name="conf_password" class="txtbox" placeholder="Confirm Password" /> <br><br>
	
                <center> <button type="submit" name="reg_user" class="btn">Register </button></center>
                <p class="yess"> Already have an account? <a href="login.php" class="yess">Login</a>.</p>
	      </form>
  </div>
</body>
</html>

