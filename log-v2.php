<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style/loginStyle.css">
</head>
<body>
  <?php
  		// PHP 7
	   	$db = new PDO('mysql:host=localhost;dbname=scrappdb', "root", "");
		/*$result = $db->prepare("SELECT mail FROM userdata");
		$result->execute();
		$row = $result->fetch();
		echo $row[0];*/
		$stmt = $db->query('SELECT mail FROM userdata');
		while ($row = $stmt->fetch())
		{
    			echo $row['mail'] . "\n";
		}
		
		// PHP 5
		//$connection = mysql_connect("scrapp", "scrapp", "Abhidksarvesh");
		
		
		
    ?>
</body>
</html>
