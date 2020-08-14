<?php
	include"../connection/connection.php";

	if (isset($_POST['username']) &&
		isset($_POST['password'])  
		&& isset($_POST['role'])) {
		# code...

		$sql = ("INSERT INTO user (username,password,role) VALUES (:username,:password,:role)");
		$stmt = $conn ->prepare($sql);
		$stmt->execute(array(
			':username' => $_POST['username'],
			':password' => $_POST['password'],
			':role' => $_POST['role']));
		header('Location: ../home.php');
	}
?>