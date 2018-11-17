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
				<p>
					Solid waste management (SWM) is a major problem for many urban local bodies (ULBs) in India, where urbanization, industrialization and economic growth have resulted in increased municipal solid waste (MSW) generation per person. Effective SWM is a major challenge in cities with high population density. Achieving sustainable development within a country experiencing rapid population growth and improvements in living standards is made more difficult in India because it is a diverse country with many different religious groups, cultures and traditions.
				</p>
				<p>
					Despite significant development in social, economic and environmental areas, SWM systems in India have remained relatively unchanged. The informal sector has a key role in extracting value from waste, with approximately 90% of residual waste currently dumped rather than properly landfilled. There is an urgent need to move to more sustainable SWM, and this requires new management systems and waste management facilities. Current SWM systems are inefficient, with waste having a negative impact on public health, the environment and the economy. The waste Management and Handling Rules in India were introduced by the Ministry of Environment and Forests (MoEF), although compliance is variable and limited.
				</p>
			</div>
			</img>
		</fieldset>
		</div><br>
		<div>
		<fieldset>
			<img class="main-img-right" src="images/waste2.png" width="20%">
			<div class="img-info">
				<p>
					India is experiencing rapid urbanization while remaining a country with physical, climatic, geographical, ecological, social, cultural and linguistic diversity. The population of India was 1252 million in 2013, compared with 1028 million in 2001. Population growth is a major contributor to increasing MSW in India.
				</p>
				<p>
					Megacities are a relatively recent phenomenon, associated with globalization of the economy, culture and technology. Megacities in India include Ahmedabad (6.3 million), Hyderabad (7.7 million), Bangalore (8.4 million), Chennai (8.6 million), Kolkata (14.1 million), Delhi (16.3 million) and Greater Mumbai (18.4 million). These have dynamic economic growth and high waste generation per capita.
				</p>
			</div>
			</img>
		</fieldset>
		</div><br>
		<div>
		<fieldset>
			<img class="main-img-left" src="images/waste3.png" width="20%">
			<div class="img-info">
				<p>
					The MoEF issued MSW (Management and Handling) Rules 2000 to ensure proper waste management in India and new updated draft rules have recently been published. Municipal authorities are responsible for implementing these rules and developing infrastructure for collection, storage, segregation, transportation, processing and disposal of MSW. Chandigarh is the first city to develop SWM in a planned way and has improved waste management compared with other Indian cities.
				</p>
				<p>
					SWM disposal is at a critical stage of development in India. There is a need to develop facilities to treat and dispose of increasing amounts of MSW. More than 90% of waste in India is believed to be dumped in an unsatisfactory manner. It is estimated that approximately 1400 km2 was occupied by waste dumps in 1997 and this is expected to increase in the future.
				</p>
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
			<img class="main-img-right" src="images/apply.png" width="15%">
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
				<a href="mailto:mail@scrapp.com" style="text-decoration: none; color: #00b300;">Contact us</a>
			</div>
			</img>
		</fieldset>
		</div>
	</div>
</body>
</html>
