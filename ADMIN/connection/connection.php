<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databese = "hospital";

	try{
		$conn = new PDO("mysql:host=$servername;dbname=$databese", 'root', '');

		// check if our connection is succesifull or not
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//echo "GOOD connection is success. ";
	}
	catch(PDOException $e){
		echo "SORRY connection is failed"
		 . $e->getMessage();
	}
?>