<?php

include "../connection/connection.php";

 	$username = $_GET['username'];
	//echo $username;
 		
 		$sql = "DELETE FROM user WHERE username='$username'";

		  $conn->exec($sql);
		  header('location: ../home.php');
?>