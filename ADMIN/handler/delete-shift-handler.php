<?php

include "../connection/connection.php";

 	$id = $_GET['id'];
	//echo $username;
 		
 		$sql = "DELETE FROM shift WHERE id='$id'";

		  $conn->exec($sql);
		  header('location: ../home.php');
?>