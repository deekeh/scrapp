<?php
	if (session_status() == PHP_SESSION_NONE) session_start();

	if (isset($_POST['a-submit']))
	{
		//if (!empty($_POST['pincode'])) $pin = $_POST['pincode'];
		$pin = (!empty($_POST['pincode'])) ? $_POST['pincode'] : "";
		//echo $pin;
		$umail = (!empty($_POST['umail'])) ? $_POST['umail'] : "";
		//echo $umail;
		$appdate = (!empty($_POST['app-date'])) ? $_POST['app-date'] : "";
		//echo $appdate;

		$query = "select * from orders";
		if (!empty($pin) || !empty($umail) || !empty($appdate))
		{
			$query .= " where ";
			if (!empty($pin))
			{
				$query .= "pincode = '" .$pin. "'";
				$query .= (!empty($umail) || !empty($appdate)) ? " and " : "";
			}
			if (!empty($umail))
			{
				$query .= "user_mail = '" .$umail. "'";
				$query .= (!empty($appdate)) ? " and " : "";
			}
			if (!empty($appdate))
			{
				$query .= "order_date = '" .$appdate. "'";
			}
			$query .= ";";
		}
		//echo $query;
		$db = new PDO('mysql:host=localhost;dbname=scrappdb', "root", "");
		$stmt = $db->query($query);
		$row = $stmt->fetch();
		foreach ($row as $key => $value) {
			echo $key."\t".$value."<br>";
		}
		//echo $row['pincode'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Control Panel</title>
</head>
<body>
	<form method="post">
		<label>Pincode: <input type="number" name="pincode" value="<?php if(isset($pin)) echo htmlentities($pin) ?>" min="110000" max="999999"></label>&nbsp;&nbsp;<span style="color: #ff0000">||</span>&nbsp;

		<label>User email: <input type="email" name="umail" value="<?php if(isset($umail)) echo htmlentities($umail) ?>"></label>&nbsp;&nbsp;<span style="color: #ff0000">||</span>&nbsp;

		<label>Application date (on/before): <input type="date" name="app-date" value="<?php if(isset($appdate)) echo htmlentities($appdate) ?>"></label>&nbsp;&nbsp;<span style="color: #ff0000">||</span>&nbsp;
		
		<input type="submit" name="a-submit" value="Search">
	</form>
</body>
</html>