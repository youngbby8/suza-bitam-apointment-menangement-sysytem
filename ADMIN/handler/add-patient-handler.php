<?php
	include"../connection/connection.php";
	/* this sql is for the insert only to the user table */
	if (isset($_POST['submit'])
		&& isset($_POST['username']) 
		&& isset($_POST['password'])  
		&& isset($_POST['role'])) {

		echo "user in...... ";
		# code...
	
		$sql = ("INSERT INTO user (username,password,role) VALUES (:username,:password,:role)");
		$stmt = $conn ->prepare($sql);
		$stmt->execute(array(
			':username' => $_POST['username'],
			':password' => $_POST['password'],
			':role' => $_POST['role']));

			/*This bottom for the patient table*/
			if (isset($_POST['submit'])
				&& isset($_POST['firstName'])
				&& isset($_POST['secondName'])
				&& isset($_POST['lastName'])
				&& isset($_POST['gender'])
				&& isset($_POST['address'])
				&& isset($_POST['phone'])
				&& isset($_POST['email'])
				&& isset($_POST['dob'])
				&& isset($_POST['status'])
				&& isset($_POST['problemType'])
				&& isset($_POST['username'])) {
				# code...

				/* this sql is for the insert only to the patient table */
				$sql2 = ("INSERT INTO patient (firstName,secondName,lastName,gender,address,phone,email,dob,status,problemType,username) 
					VALUES 
						(:firstName,:secondName,:lastName,:gender,:address,:phone,:email,:dob,:status,:problemType:username)");
				echo "$sql2";
				/*$stmt = $conn ->prepare($sql2);
				$stmt->execute(array(
					':firstName' => $_POST['firstName'],
					':secondName' => $_POST['secondName'],
					':lastName' => $_POST['lastName'],
					':gender' => $_POST['gender'],
					':address' => $_POST['address'],
					':phone' => $_POST['phone'],
					':email' => $_POST['email'],
					':dob' => $_POST['dob'],
					':dob' => $_POST['status'],
					':dob' => $_POST['problemType'],
					':username' => $_POST['username']));
				echo "patient in";*/

				/*header('Location: ../view-patient.php');*/
			}

		
	}
?>