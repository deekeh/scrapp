<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style/loginStyle.css">
</head>
<body>
	<form method="post" action="in.php">
		<?php
		session_start();
		if(isset($_SESSION['uid']) == '')
		{
			echo '<label>Email- id:<input type="email" name="mail" class="text" required></label><br><br>';
			echo '<label>Password:<input type="password" name="passwd" class="text" required></label><br><br>';
			echo '<input type="submit" name="login" value="Submit" id="submit">';
		}
		else
		{
			echo "You have already logged in.<br>";
			echo "<a href='in.php'>Go to the home page</a>";
		}
		?>
	</form>
</body>
</html>
