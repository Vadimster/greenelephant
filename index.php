<?php 
	include ('db.php');
	$dataBase = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
	$statement = $dataBase->query('SELECT * FROM users');
	$rowCount = $statement->rowCount();
	echo 'There are currently ' . $rowCount . ' rows in the database';


?>