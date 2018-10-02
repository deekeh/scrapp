<?php
	if (isset($_POST['a-pin-submit']))
	{
		if (!empty($_POST['pincode']))
		{
			$pin = $_POST['pincode'];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Control Panel</title>
</head>
<body>
	<form method="post">
		<input type="number" name="pincode" value="Pincode" min="110000" max="999999">
		<input type="submit" name="a-pin-submit">
	</form>
</body>
</html>