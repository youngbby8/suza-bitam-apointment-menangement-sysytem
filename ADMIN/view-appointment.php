<?php
	session_start();
	if (isset($_SESSION["role"])) {
		# code...
		//echo $_SESSION["role"];
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>loged-home-page</title>
	<!-- plugin links -->
	<script type="text/javascript" src="../jquery/jquery.min.js"></script>
	<script type="text/javascript" src="../sweetalert/sweetalert.min.js"></script>

	
<!-- start boostrap links -->
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.5.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.5.0-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.5.0-dist/js/bootstrap.min.js">

	<!-- Data table -->
	<link rel="stylesheet" type="text/css" href="../DataTables-1.10.21/css/dataTables.bootstrap.min.css">

	<!-- css links -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- fontawesome links -->
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.13.1-web/css/all.min.css">

</head>
<body>
	<div class="container-fluid">
		<div class="wrapper">
			<!-- include top nav bar page -->
			<?php
				include "include/top-nav-bar.php"
			?>

			<!-- include side bar page -->
			<?php
				include "include/side-bar.php"
			?>

			<!-- main container start -->
			<div class="main_container" id="main">

				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h4 style="color: #08899c;">Dashbord page</h4>
						<p><a href="Add-Appointment.php" class="btn btn-success">ADD NEW APPOINTMENT</a></p>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h4 style="color: #08899c;">List of appointment</h4>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="iterm">

							<table class="table table-hover text-nowrap">
								<thead>
				                    <tr>
				                        <th>First Name</th>
				                        <th>Second Name</th>
				                        <th>Last Name</th>
				                        <th>Gender</th>
				                        <th>Address</th>
				                        <th>Maritial</th>
				                        <th>Phone</th>
				                        <th>Email</th>
				                        <th>Problem</th>
				                        <th>Date</th>
				                        <th>Time</th>
				                        <th>Status</th>
				                        <th>ACCEPT</th>
				                        <th>DECLINE</th>
				                    </tr>
				                </thead>

				                <tbody>

				                	<?php
										include"connection/connection.php";

										$sql = "SELECT * FROM appointment";
										$stmt = $conn->query($sql);
										while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
											# code...
											$first = $row['fName'];
											$second = $row['sName'];
											$last = $row['lName'];
											$gender = $row['Gender'];
											$adres = $row['adress'];
											$mariuals = $row['maritial'];
											$tel = $row['phone'];
											$mail = $row['email'];
											$prob = $row['problem'];
											$date = $row['day'];
											$time = $row['clock'];
											$status = $row['status'];

											echo "<tr><td>";
												echo (htmlentities($row['fName']));
												echo ("</td><td>");
												echo (htmlentities($row['sName']));
												echo ("</td><td>");
												echo (htmlentities($row['lName']));
												echo("</td><td>");
												echo (htmlentities($row['Gender']));
												echo("</td><td>");
												echo (htmlentities($row['adress']));
												echo("</td><td>");
												echo (htmlentities($row['maritial']));
												echo("</td><td>");
												echo (htmlentities($row['phone']));
												echo("</td><td>");
												echo (htmlentities($row['email']));
												echo("</td><td>");
												echo (htmlentities($row['problem']));
												echo("</td><td>");
												echo (htmlentities($row['day']));
												echo("</td><td>");
												echo (htmlentities($row['clock']));
												echo("</td><td>");
												echo (htmlentities($row['status']));
												echo("</td><td>");
											    echo('<a style="color: green" href="handler/Accept-appointment-handler.php?id='.$row['id'].'">
											    	<i class="fa fa-calendar-check" aria-hidden="true"></i>
											    </a>');
											    echo("</td><td>");
											    echo('<a style="color: red" href="handler/decline-appointment.php?id='.$row['id'].'">
											    	<i class="fa fa-calendar-times" aria-hidden="true"></i>
											    </a>');
											    echo("</td></tr>\n");

										}


									?>

			                  </tbody>

                			</table>
						</div>
					</div>
				</div>

				<?php
					include"include/footer.php"
				?>

			</div>
			<!-- main container end -->
		</div>
	</div>
	



	<script>
		/* Set the width of the sidebar to 200px (show it full) */
		function openNav() {
			document.getElementById("sidebar").style.display = "block";
		  	document.getElementById("sidebar").style.width = "210px";
		  	document.getElementById("main").style.width = "85%";
		  	document.getElementById("main").style.cssFloat = "right";
		}

	</script>

	<script>
		/* Set the width of the sidebar to close it */
		function closeNav() {
			 document.getElementById("sidebar").style.display = "none";
		  	document.getElementById("main").style.width = "100%"
		} 
	</script>

	<!-- for sweet alert -->
	<script type="text/javascript">

		function edit(){
			
			swal("Good job!", "You clicked the button!", "success");
		}
		
	</script>


</body>
</html>