<?php
	include "../connection/connection.php";

	$duli="ipo";

	if (isset($_POST['username'])
		&& isset($_POST['password'])  
		&& isset($_POST['role'])
		&& isset($_POST['uname'])) {
		# code...

		$sql = ("UPDATE user SET username = :username, password = :password/*, role = :role*/ WHERE username = :uname");
		$stmt = $conn ->prepare($sql);
		$stmt->execute(array(
			':username' => $_POST['username'],
			':password' => $_POST['password'],
			/*':role' => $_POST['role'])*/
			':uname' => $_POST['uname']));
		header('location: ../home.php');
		/*header('Location: ../home.php');*/
	}
?>