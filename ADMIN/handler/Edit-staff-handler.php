<?php
	include "../connection/connection.php";

	$duli="ipo";

	if (isset($_POST['uname'])
		&& isset($_POST['password'])  
		&& isset($_POST['role'])
		&& isset($_POST['username'])) {
		# code...

		$sql = ("UPDATE user SET username = :username, password = :password, role = :role WHERE username = :username");
		$stmt = $conn ->prepare($sql);
		$stmt->execute(array(
			':username' => $_POST['username'],
			':password' => $_POST['password'],
			':role' => $_POST['role']
			/*':uname' => $_POST['uname']*/));

			echo "mwanzo inapenya....... ";

			/*':uname' => $_POST['uname'])*/
		/*header('location: ../home.php');*/
		

		if (isset($_POST['id'])
			&&($_POST['firstName'])
			&& isset($_POST['secondName'])
			&& isset($_POST['lastName'])
			&& isset($_POST['gender'])
			&& isset($_POST['address'])
			&& isset($_POST['phone'])
			&& isset($_POST['email'])
			&& isset($_POST['specialized'])) {
			# code...

		$sql = ("UPDATE staff SET firstName = :firstName, secondName = :secondName, lastName = :lastName, gender = :gender,
		  address = :address, phone = :phone, email = :email, specialized = :specialized WHERE id = :id");
		$stmt = $conn ->prepare($sql);
		$stmt->execute(array(
			':id' => $_POST['id'],
			':firstName' => $_POST['firstName'],
			':secondName' => $_POST['secondName'],
			':lastName' => $_POST['lastName'],
			':gender' => $_POST['gender'],
			':address' => $_POST['address'],
			':phone' => $_POST['phone'],
			':email' => $_POST['email'],
			':specialized' => $_POST['specialized']));
		header('Location: ../view-staff.php');
		echo "all are inserted";
		}
	}
?>