<?php
		if (session_status() == PHP_SESSION_NONE) session_start();
		if(isset($_POST['login']) == true)
		{
			//session_start();
			$mail = $_POST['mail'];
			$pass =$_POST['passwd'];
			$db = new PDO('mysql:host=dk;dbname=scrappdb', "DK", "Abhidksrvs");
			$stmt = $db->query('SELECT mail,first_name,pincode,user_type FROM login where mail="' 		. $mail.		'"   and   pass="'		.$pass.		'"');
			
			$row = $stmt->fetch();
			if(!empty($row['mail']))
			{
				$_SESSION['uid'] = $row['first_name'];
				$_SESSION['mail'] = $row['mail'];
				$_SESSION['pincode'] = $row['pincode'];
				$_SESSION['user_type'] = $row['user_type'];
			}
			else echo "Invalid user.";
		}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style/loginStyle.css">
</head>
<body>
	<form method="post" action="login.php">
		<?php
		if (session_status() == PHP_SESSION_NONE) session_start();
		if(isset($_SESSION['uid']) == false)
		{
			echo '<label>Email- id:<input type="email" name="mail" class="text" required></label><br><br>';
			echo '<label>Password:<input type="password" name="passwd" class="text" required></label><br><br>';
			echo '<input type="submit" name="login" value="Submit" id="submit">';
		}
		else
		{
			/*echo "You have logged in.<br>";
			echo "<a href='index.php'>Go to the home page</a>";
			sleep(10);*/
			header('Location: index.php');
		}
		?>
	</form>
</body>
</html>