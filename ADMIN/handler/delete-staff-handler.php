<?php

include "../connection/connection.php";

 	$id = $_GET['id'];
 		
 		$sql = "DELETE FROM staff WHERE id='$id'";

		  $conn->exec($sql);
		  header('location: ../view-staff.php');
?>