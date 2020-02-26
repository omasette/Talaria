<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	// header('Location: index.html');
	// exit();
}
include('header.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['loggedin']?>!</p>
		</div>
	</body>
</html>