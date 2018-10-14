<?php
	if (session_status() == PHP_SESSION_NONE) session_start();

	if(isset($_SESSION['uid']) == false)
	{
		header('Location: login.php');
	}
	else
	{
		$mail = $_SESSION['mail'];
		$db = new PDO('mysql:host=dk;dbname=scrappdb', "DK", "Abhidksrvs");
		//$stmt = $db->query('SELECT pincode FROM login where mail="' 		. $mail.		'"');
		//$row = $stmt->fetch();
		//if(!empty($row['pincode']))	$pincode = $row['pincode'];
		$pincode = $_SESSION['pincode'];

		if (isset($_POST['sell-submit']) == true)
		{
			$wt = $_POST['wt'];
			if($_POST['wt-unit'] == 'kilograms') $wt = $wt * 1000;
			$sql = "INSERT INTO orders (user_mail, mass, pincode) VALUES ('" .$mail."'," .$wt. ",'" .$pincode. "')";
			//echo $sql;
			$db->beginTransaction();
			$db->exec($sql);
			$db->commit();
			//echo "<script type='text/javascript'>window.alert('Applied successfully');</script>";
			//header('Location: index.php');
			
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
		<label>Weight:<br>
			<input type="text" name="wt" class="text" required style="display: inline-block;">
		</label>
		<select name="wt-unit">
			<option value="grams">grams</option>
			<option value="kilograms">kilograms</option>
		</select>
		<br><br>
		<input type="submit" name="sell-submit" value="Apply" id='submit'>
		<input type="reset" name="reset" value="Reset" id="reset">
	</form>
</body>
</html>