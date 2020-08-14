<?php
	include "../connection/connection.php";

	$id = $_GET['id'];
	echo "$id";

	$sql = ("UPDATE appointment SET status = 'Decline'  WHERE id = $id");
		$stmt = $conn ->prepare($sql);
		$stmt->execute(array());

		header('location: ../view-appointment.php');
?>