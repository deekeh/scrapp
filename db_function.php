<?php
	function conn(&$db)
	{
		$db = new PDO('mysql:host=localhost;dbname=scrappdb', "root", "");
	}
?>