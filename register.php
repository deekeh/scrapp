<?php
	if(isset($_POST['reg-submit']))
	{
		$name = $_POST['name'];
		$lname = $_POST['lname'];
		$address = $_POST['address'];
		$pin = $_POST['pin'];
		$mail = $_POST['mail'];
		$pass = $_POST['passw'];
		
		try
		{
			$db = new PDO('mysql:host=hostname;dbname=scrappdb', "user", "password");
			$stmt = $db->query('SELECT mail FROM login where mail="' 		. $mail .	'"');
			
			$row = $stmt->fetch();
			if(!empty($row['mail'])) $error = "Email already exists";
			else
			{
				$sql = "INSERT INTO login (mail, pass, name, lname, address, pincode) VALUES ('" .$mail."'," ."'" .$pass. "', '" .$name. "', '" .$lname. "', '" .$address. "', '" .$pin. "')";
				$db->exec($sql);
				//$sql = "INSERT INTO login (mail, pass, fname, lname, address, pincode) VALUES ('mail', 'pass', 'fname', 'lname', 'address', '111111');";
				header('Location: index.php');
			}
			$db = null;
		}
		catch(PDOException $e)
		{
			echo $sql . "<br>" . $e->getMessage();
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style/loginStyle.css">
</head>
<body>
	<form method="post" action="register.php">
		<label>First Name:<input type="text" name="name" value="<?php if(isset($name)) echo htmlentities($name) ?>" placeholder="Your first name" class="text" required></label><br><br>
		<label>Last Name:<input type="text" name="lname" value="<?php if(isset($lname)) echo htmlentities($lname) ?>" placeholder="Your last name" class="text" required></label><br><br>
		<label>Address: <textarea rows="6" cols="30" name="address" placeholder="Your address" class="text" required><?php if(isset($address)) echo htmlentities($address) ?></textarea></label><br><br>
		<label>Pin code:<input type="number" name="pin" value="<?php if(isset($pin)) echo htmlentities($pin) ?>" placeholder="Your area pin code" class="text" required></label><br><br>
		<label>Email- id:<input type="email" name="mail" value="<?php if(isset($mail)) echo htmlentities($mail) ?>" placeholder="Your email ID" class="text" required></label>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: red; font-family: Candara"><?php if(isset($error)) echo htmlentities($error) ?></span><br><br>
		<label>Password:<input type="password" name="passw" value="<?php if(isset($pass)) echo htmlentities($pass) ?>" placeholder="Password" class="text" required></label><br><br>
		<input type="submit" name="reg-submit" value="Submit" id="submit">
	</form>
</body>
</html>
