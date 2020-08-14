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
						<h4 style="color: #08899c;">Add new appointment form</h4>
					</div>
				</div>

				<div class="card">
				    <div class="card-body login-card-body">
						<h3>REGISTER A NEW APPOINTMENT FORM</h3>

				      	<form action="handler/add-appointment-handler.php" method="POST">

				      		<div class="row">
					      		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
									    <label>First Name:</label>
									    <input type="text" class="form-control" name="fName" required="">
								  	</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
									    <label>Second Name:</label>
									    <input type="text" class="form-control" name="sName" required="">
								  	</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
									    <label>Last Name:</label>
									    <input type="text" class="form-control" name="lName" required="">
								  	</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
						    			<label>Gender:</label>
									    <select class="form-control" name="Gender">
											<option value="0" name="0">Choose patient gender...</option>
										    <option value="Male" name="Male">Male</option>
										    <option value="Female" name="Female">Female</option>
										</select>
								  	</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
									    <label>Address:</label>
									    <input type="text" class="form-control" name="adress" required="">
								  	</div>
								</div>

							  	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
						    			<label>Status:</label>
									    <select class="form-control" name="maritial">
											<option value="0" name="0">Choose patient Status...</option>
										    <option value="Married" name="Married">Married</option>
										    <option value="Single" name="Single">Single</option>
										</select>
								  	</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
									    <label>Phone:</label>
									    <input type="text" class="form-control" name="phone" required="">
								  	</div>
								</div>

					      		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
									    <label>Email:</label>
									    <input type="email" class="form-control" name="email" required="">
								  	</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"">
						    		<div class="form-group">
									    <label>Problem:</label>
									    <input type="hidden" name="status" value="Pending">
									    <input type="text" class="form-control" name="problem">
								  	</div>
								</div>
								
					      		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"">
						    		<div class="form-group">
									    <label>Date:</label>
									    <input type="date" class="form-control" name="day" required="">
								  	</div>
								</div>

							  	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12>
						    		<div class="form-group">
									    <label>Time:</label>
									    <input type="time" class="form-control" name="clock" required="">
								</div>
							</div>

							<div class="row">
						  		<div class="col-12">
						  			<button type="submit" name="submit" class="btn btn-success btn-block">ADD</button>
						  		</div>
							</div>
				    		
						</form>
				    </div> <!-- card body div end -->
				</div> <!-- card div end -->

				

				<?php
					include"include/footer.php"
				?>

			</div> <!-- main container end that controll iterm at center -->
			
		</div> <!-- div wrapper end -->
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