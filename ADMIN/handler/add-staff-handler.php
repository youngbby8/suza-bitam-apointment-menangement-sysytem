<?php
	include"../connection/connection.php";
	/* this sql is for the insert only to the user table */
	if (isset($_POST['submit'])
		&& isset($_POST['username']) 
		&& isset($_POST['password'])  
		&& isset($_POST['role'])) {
		# code...
		$sql = ("INSERT INTO user (username,password,role) VALUES (:username,:password,:role)");
		$stmt = $conn ->prepare($sql);
		$stmt->execute(array(
			':username' => $_POST['username'],
			':password' => $_POST['password'],
			':role' => $_POST['role']));

			/*This bottom for the staff table*/
			if (isset($_POST['submit'])
				&& isset($_POST['firstName'])
				&& isset($_POST['secondName'])
				&& isset($_POST['lastName'])
				&& isset($_POST['gender'])
				&& isset($_POST['address'])
				&& isset($_POST['phone'])
				&& isset($_POST['email'])
				&& isset($_POST['specialized'])
				&& isset($_POST['username'])) {
				# code...
				/* this sql is for the insert only to the staff table */
				$sql = ("INSERT INTO staff (firstName,secondName,lastName,gender,address,phone,email,specialized,username) 
					VALUES 
						(:firstName,:secondName,:lastName,:gender,:address,:phone,:email,:specialized,:username)");
				$stmt = $conn ->prepare($sql);
				$stmt->execute(array(
					':firstName' => $_POST['firstName'],
					':secondName' => $_POST['secondName'],
					':lastName' => $_POST['lastName'],
					':gender' => $_POST['gender'],
					':address' => $_POST['address'],
					':phone' => $_POST['phone'],
					':email' => $_POST['email'],
					':specialized' => $_POST['specialized'],
					':username' => $_POST['username']));
				echo "user succesed inserted";

				header('Location: ../view-staff.php');
			}
		
	}
?>