<?php
	include"ADMIN/connection/connection.php";

	if (isset($_POST['submit']) 
		&& isset($_POST['fName'])  
		&& isset($_POST['sName'])
		&& isset($_POST['lName'])
		&& isset($_POST['Gender'])
		&& isset($_POST['adress'])		
		&& isset($_POST['maritial'])
		&& isset($_POST['phone'])
		&& isset($_POST['email'])
		&& isset($_POST['day'])
		&& isset($_POST['clock'])
		&& isset($_POST['status'])
		&& isset($_POST['problem'])) {
		# code...
		echo "success";
		$sql = ("INSERT INTO appointment (fName, sName, lName, Gender, adress, maritial, phone, email, problem, day, clock, status)
		 VALUES 
		 (:fName,:sName,:lName,:Gender,:adress,:maritial,:phone,:email,:problem,:day,:clock,:status)");
		$stmt = $conn ->prepare($sql);
		$stmt->execute(array(
			':fName' => $_POST['fName'],
			':sName' => $_POST['sName'],
			':lName' => $_POST['lName'],
			':Gender' => $_POST['Gender'],
			':adress' => $_POST['adress'],
			':maritial' => $_POST['maritial'],
			':phone' => $_POST['phone'],
			':email' => $_POST['email'],
			':problem' => $_POST['problem'],
			':day' => $_POST['day'],
			':clock' => $_POST['clock'],
			':status' => $_POST['status']));

		header('Location: index.php?You success to request the appointment');
}
?>