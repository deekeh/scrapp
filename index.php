<!DOCTYPE html>
<html>
<head>
	<title>Scrapp</title>
	<link rel="stylesheet" type="text/css" href="style/decorate.css">
	<script type="text/javascript" src="js/contents.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="menubar">
		<section><img src="images/logo-name-horizontal.png" width="70%"></section>
		<?php
			if (session_status() == PHP_SESSION_NONE) session_start();
			if(isset($_SESSION['user_type']))
				if($_SESSION['user_type'])
					echo '<a href="sell.php" class="sell">Sell your item</a>';
				else
					echo '<a href="admin.php" class="sell">Go to admin page</a>';
		?>
		<section id="right">
			<?php
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
			<img class="main-img-left" src="images/scrap.png" width="20%" />
			<div class="img-info">
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc tincidunt ante vitae massa. Et harum quidem rerum facilis est et expedita distinctio. Duis bibendum, lectus ut viverra rhoncus, dolor nunc faucibus libero, eget facilisis enim ipsum id lacus. Nam sed tellus id magna elementum tincidunt. Phasellus rhoncus. Aliquam erat volutpat. Nullam eget nisl. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Vivamus porttitor turpis ac leo. Ut tempus purus at lorem. Maecenas aliquet accumsan leo. Mauris elementum mauris vitae tortor. Praesent vitae arcu tempor neque lacinia pretium. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus et lorem id felis nonummy placerat.
			</div>
			</img>
		</fieldset>
		</div>
	</div>

	<div id="about-content" style="display: none;">
		<div>
		<fieldset>
			<img class="main-img-left" src="images/recycle.png" width="20%">
			<div class="img-info">
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc tincidunt ante vitae massa. Et harum quidem rerum facilis est et expedita distinctio. Duis bibendum, lectus ut viverra rhoncus, dolor nunc faucibus libero, eget facilisis enim ipsum id lacus. Nam sed tellus id magna elementum tincidunt. Phasellus rhoncus. Aliquam erat volutpat. Nullam eget nisl. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Vivamus porttitor turpis ac leo. Ut tempus purus at lorem. Maecenas aliquet accumsan leo. Mauris elementum mauris vitae tortor. Praesent vitae arcu tempor neque lacinia pretium. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus et lorem id felis nonummy placerat.
			</div>
			</img>
		</fieldset>
		</div><br>
		<div>
		<fieldset>
			<img class="main-img-right" src="images/apply.png" width="15%" style="float: right;">
			<div class="img-info">
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc tincidunt ante vitae massa. Et harum quidem rerum facilis est et expedita distinctio. Duis bibendum, lectus ut viverra rhoncus, dolor nunc faucibus libero, eget facilisis enim ipsum id lacus. Nam sed tellus id magna elementum tincidunt. Phasellus rhoncus. Aliquam erat volutpat. Nullam eget nisl. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Vivamus porttitor turpis ac leo. Ut tempus purus at lorem. Maecenas aliquet accumsan leo. Mauris elementum mauris vitae tortor. Praesent vitae arcu tempor neque lacinia pretium. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus et lorem id felis nonummy placerat.
			</div>
			</img>
		</fieldset>
		</div><br>
		<div>
		<fieldset>
			<img class="main-img-left" src="images/delivery.png" width="20%">
			<div class="img-info">
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc tincidunt ante vitae massa. Et harum quidem rerum facilis est et expedita distinctio. Duis bibendum, lectus ut viverra rhoncus, dolor nunc faucibus libero, eget facilisis enim ipsum id lacus. Nam sed tellus id magna elementum tincidunt. Phasellus rhoncus. Aliquam erat volutpat. Nullam eget nisl. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Vivamus porttitor turpis ac leo. Ut tempus purus at lorem. Maecenas aliquet accumsan leo. Mauris elementum mauris vitae tortor. Praesent vitae arcu tempor neque lacinia pretium. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus et lorem id felis nonummy placerat.
			</div>
			</img>
		</fieldset>
		</div>
	</div>

	<div id="contact-content" style="display: none;">
		<div>
		<fieldset>
			<img class="main-img-left" src="images/contact.png" width="20%">
			<div class="img-info">
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc tincidunt ante vitae massa. Et harum quidem rerum facilis est et expedita distinctio. Duis bibendum, lectus ut viverra rhoncus, dolor nunc faucibus libero, eget facilisis enim ipsum id lacus. Nam sed tellus id magna elementum tincidunt. Phasellus rhoncus. Aliquam erat volutpat. Nullam eget nisl. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Vivamus porttitor turpis ac leo. Ut tempus purus at lorem. Maecenas aliquet accumsan leo. Mauris elementum mauris vitae tortor. Praesent vitae arcu tempor neque lacinia pretium. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus et lorem id felis nonummy placerat.
				<br><br>
				<a href="mailto:mail @scrapp.com" style="text-decoration: none; color: #00b300;">Contact us</a>
			</div>
			</img>
		</fieldset>
		</div>
	</div>
</body>
</html>