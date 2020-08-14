<?php
	include "../connection/connection.php";

	if (isset($_POST['id'])
		&& isset($_POST['name'])  
		&& isset($_POST['startTime'])
		&& isset($_POST['endTime'])) {
		# code...

		$sql = ("UPDATE shift SET name = :name, startTime = :startTime, endTime = :endTime WHERE id = :id");
		$stmt = $conn ->prepare($sql);
		$stmt->execute(array(
			':name' => $_POST['name'],
			':startTime' => $_POST['startTime'],
			':endTime' => $_POST['endTime'],
			':id' => $_POST['id']));
		header('location: ../view-shift.php');
	}
?>