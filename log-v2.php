<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style/loginStyle.css">
</head>
<body>
  <?php
	  $db = new PDO('mysql:host=hostname;dbname=database_name', "UserName", "Password");
		$result = $db->prepare("SELECT mail FROM login");
		$result->execute();
		$row = $result->fetch();
		echo $row[0];
    ?>
</body>
</html>
