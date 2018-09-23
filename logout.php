<!DOCTYPE html>
<html>
<head>
	<title>Logged out</title>
</head>
<body>
	<?php
		session_start();
		$_SESSION['uid'] = '';
		setcookie('PHPSESSID', '', time() - 86400);
		$_SESSION=array();
		unset($_SESSION);
		session_destroy();
	?>
	You have been logged out.<br>
	<a href="in.php">Go to the home page</a>
</body>
</html>