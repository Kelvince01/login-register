<?php
require('connect.php');
if(isset($_POST['signup'])){
	if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$password = md5($pass);
	$query = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
	mysqli_query($db, $query);
	if (mysqli_affected_rows($db)>0) {
		$_SESSION['username'] = $username;
		header('Location: '.$_SESSION['backurl']);
	}
} else {
	echo "Wrong Credentials";
	header('Location: signup.php');
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<form method="POST" action="signup.php" class="login-form">
		<h3 align="center">Sign Up</h3><hr align="center">
		<input type="text" placeholder="username" name="username"><br>
		<input type="email" name="email" placeholder="email"><br>
		<input type="password" placeholder="password" name="password"><br>
		<input type="submit" name="signup" value="SignUp">
	</form>
</body>
</html>