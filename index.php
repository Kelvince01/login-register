<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<?php
	session_start();
	   $_SESSION['backurl'] = basename($_SERVER['PHP_SELF']); 
	   if(isset($_SESSION['username']) && !empty($_SESSION['username'])){ 
	   	echo $_SESSION['username']; ?>
	   	<a href="logout.php">Logout</a>
	   <?php } else { ?>
	   <a href="login.php">Login</a>
	   <a href="signup.php">Sign Up</a>
	<?php } ?>
</body>
<script type="text/javascript">
	function removeLoginForm(){
		var sessionId = "<?php echo $_SESSION['username']; ?>";
	}
</script>
</html>