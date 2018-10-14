<?php
	if (session_status() == PHP_SESSION_NONE) session_start();

	if (isset($_POST['a-submit']))
	{
		$pin = (!empty($_POST['pincode'])) ? $_POST['pincode'] : "";
		$umail = (!empty($_POST['umail'])) ? $_POST['umail'] : "";
		$appdate = (!empty($_POST['app-date'])) ? $_POST['app-date'] : "";

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
				$query .= "order_date <= '" .$appdate. "'";
			}
			$query .= ";";
		}
		$db = new PDO('mysql:host=dk;dbname=scrappdb', "DK", "Abhidksrvs");
		$stmt = $db->query($query);
		$row = $stmt->fetchAll();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Control Panel</title>
	<style type="text/css">
		table
		{
			border: solid 1px;
			border-radius: 5px;
		}
		td,th
		{
			border: solid;
			border-width: 0 0 1px 0;
			padding: 10px;
		}
		tr
		{
			border: solid 0 0;
			border-width: 0 0 1px 0;
		}
	</style>
</head>
<body>
	<form method="post">
		<label>Pincode: <input type="number" name="pincode" value="<?php if(isset($pin)) echo htmlentities($pin) ?>" min="110000" max="999999"></label>&nbsp;&nbsp;<span style="color: #ff0000">||</span>&nbsp;

		<label>User email: <input type="email" name="umail" value="<?php if(isset($umail)) echo htmlentities($umail) ?>"></label>&nbsp;&nbsp;<span style="color: #ff0000">||</span>&nbsp;

		<label>Application date (on/before): <input type="date" name="app-date" value="<?php if(isset($appdate)) echo htmlentities($appdate) ?>"></label>&nbsp;&nbsp;<span style="color: #ff0000">||</span>&nbsp;
		<?php echo $appdate; ?>
		
		<input type="submit" name="a-submit" value="Search">
	</form>
	<br><br><br>
	<table border="1">
		<tr>
			<th>Order ID</th>
			<th>User Email ID</th>
			<th>Mass</th>
			<th>Application status</th>
			<th>Application date</th>
			<th>Pincode</th>
		</tr>
			<?php
				if (isset($row))
				{
					foreach ($row as $value)
					{
						echo "<tr>";
						echo "<td>" .$value['order_id']. "</td>";
						echo "<td>" .$value['user_mail']. "</td>";
						echo "<td>" .$value['mass']. "</td>";
						echo "<td>" .$value['order_status']. "</td>";
						echo "<td>" .$value['order_date']. "</td>";
						echo "<td>" .$value['pincode']. "</td>";
						echo "</tr>";
					}
				}
			?>
	</table>
</body>
</html>