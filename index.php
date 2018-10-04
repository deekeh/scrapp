<!DOCTYPE html>
<html>
<head>
	<title>Scrapp</title>
	<link rel="stylesheet" type="text/css" href="style/decorate.css">
	<script type="text/javascript" src="js/contents.js"></script>
</head>
<body>
	<div id="menubar">
		<section><img src="images/logo-name-horizontal.png" width="70%"></section>
		<a href="sell.php" class="sell">Sell your item</a>
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
				echo "<a href='logout.php' id='logout'>Logout</a>";
			}
			
			
		?>
		</section>

	</div>
	<br><br><br>
	<div id="home"><input type="button" id="home-button" value="Home" onclick="navBtn_click(getElementById('home-content'),getElementById('home-button'))" style="color: #00b300; background-color: #ffffff"></button></div>
	<div id="about"><input type="button" value="About" id="about-button" onclick="navBtn_click(getElementById('about-content'),getElementById('about-button'))"></button></div>
	<div id="contact"><input type="button" value="Contact us" id="contact-button" onclick="navBtn_click(getElementById('contact-content'),getElementById('contact-button'))"></button></div>
	<br><br>
	<div id="home-content" style="display: block;">
		<div>
		<fieldset>
			<img src="images/scrap.png" width="20%">
		</fieldset>
		</div>
	</div>
	<div id="about-content" style="display: none;">
		<div>
		<fieldset>
			<img src="images/recycle.png" width="20%">
		</fieldset>
		</div><br>
		<div>
		<fieldset>
			<img src="images/apply.png" width="15%">
		</fieldset>
		</div><br>
		<div>
		<fieldset>
			<img src="images/delivery.png" width="20%">
		</fieldset>
		</div>
	</div>
	<div id="contact-content" style="display: none;">
		<div>
		<fieldset>
			<img src="images/contact.png" width="20%">
		</fieldset>
		</div>
	</div>
</body>
</html>
