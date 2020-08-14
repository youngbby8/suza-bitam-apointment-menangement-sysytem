<?php
	include"../connection/connection.php";

	if (isset($_POST['submit']) && isset($_POST['name']) &&
		isset($_POST['startTime'])  
		&& isset($_POST['endTime'])) {
		# code...
		/*echo "hapa imeita";*/

		$sql = ("INSERT INTO shift (name,startTime,endTime) VALUES (:name,:startTime,:endTime)");
		$stmt = $conn ->prepare($sql);
		$stmt->execute(array(
			':name' => $_POST['name'],
			':startTime' => $_POST['startTime'],
			':endTime' => $_POST['endTime']));
		echo "string";
			header('Location: ../view-shift.php');
	}
?>