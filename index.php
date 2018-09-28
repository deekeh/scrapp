<!DOCTYPE html>
<html>
<head>
	<title>Scrapp</title>
	<link rel="stylesheet" type="text/css" href="style/decorate.css">
</head>
<body>
	<div id="menubar">
		<section><img src="images/logo-name-horizontal.png" width="70%"></section>
		
		<section id="right">
			<?php
			if (session_status() == PHP_SESSION_NONE) session_start();
			/*if(isset($_POST['login']) == true)
			{
				session_start();
				//$_SESSION["uid"] = 'name';
			}*/
			if (isset($_SESSION['uid']) == false)
			{
				echo "<a href='login.php' id='login'>Login</a><a href='register.php' id='register'>Register</a>";
			}
			else
			{
				echo "Hello ".$_SESSION['uid']."&nbsp;&nbsp;&nbsp;&nbsp;";
				echo "<a href='logout.php'>Logout</a>";
			}
			
			
		?>
		</section>

	</div>
	<br><br><br>
	Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text <br>
	<br><a href="sell.html">Sell your item</a>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
	Sample text<br>
</body>
</html>
