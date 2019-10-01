<?php
require('connect.php');
if(isset($_POST['login'])){
	if(!empty($_POST['username']) && !empty($_POST['password'])){
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$password = md5($pass);
	$query = "SELECT * FROM users WHERE username='$username' AND password ='$password'";
	$result=mysqli_query($db, $query);
	if (mysqli_num_rows($result)>0) {
		$_SESSION['username'] = $username;
		header('Location: '.$_SESSION['backurl']);
	}
} else {
	echo "Wrong Credentials";
	header('Location: index.php');
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<form method="POST" action="login.php" class="login-form">
		<h3 align="center">Login</h3><hr align="center">
		<input type="text" placeholder="username" name="username"><br>
		<input type="password" placeholder="password" name="password"><br>
		<input type="submit" name="login" value="Login" align="center">
	</form>
</body>
</html>