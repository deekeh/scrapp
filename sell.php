<?php
	if (session_status() == PHP_SESSION_NONE) session_start();

	if(isset($_SESSION['uid']) == false)
	{
		header('Location: login.php');
	}
	else
	{
		$mail = $_SESSION['mail'];
		$db = new PDO('mysql:host=localhost;dbname=scrappdb', "root", "");
		$stmt = $db->query('SELECT pincode FROM orders where mail="' 		. $mail.		'"');
		$row = $stmt->fetch();
		if(!empty($row['pincode']))	$pincode = $row['pincode'];

		if (isset($_POST['sell-submit']) == true)
		{
			$wt = $_POST['wt'];
			$sql = "INSERT INTO orders (user_mail, mass) VALUES ('" .$mail."'," .$wt. ")";
			echo $sql;
			$db->beginTransaction();
			$db->exec($sql);
			$db->commit();
			//echo "<script type='text/javascript'>window.alert('Applied successfully');</script>";
			header('Location: index.php');
			
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sell on Scrapp</title>
	<link rel="stylesheet" type="text/css" href="style/text-submit.css">
</head>
<body>
	<form method="post">
		<label>Pincode:<input type="text" name="pin" value="<?php echo $pincode; ?>" class='text' disabled></label><br>
		<label>Weight in grams:<input type="text" name="wt" class="text"></label><br>
		<input type="submit" name="sell-submit" value="Apply" id='submit'>
		<input type="reset" name="reset" value="Reset" id="reset">
	</form>
</body>
</html>
