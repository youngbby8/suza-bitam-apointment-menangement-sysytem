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
						<h4 style="color: #08899c;">Update staff form</h4>
					</div>
				</div>

				<div class="card">
				    <div class="card-body login-card-body">
						<h3>UPDATE A STAFF FORM</h3>

				      	<form action="handler/Edit-staff-handler.php" method="post">

				      		<?php
							include"connection/connection.php";

								if (isset($_GET['id']) ) {
									$stmt = $conn->prepare("SELECT * FROM staff INNER JOIN user ON staff.username =user.username where id = :id");
									$stmt->execute(array(":id" => $_GET['id']));
									$row = $stmt->fetch(PDO::FETCH_ASSOC);

									/*user*/
									$username = htmlentities($row['username']);
									$uname = htmlentities($row['username']);
									$password = htmlentities($row['password']);
									$role = htmlentities($row['role']);

									/*staff*/
									$firstName = htmlentities($row['firstName']);
									$secondName = htmlentities($row['secondName']);
									$lastName = htmlentities($row['lastName']);
									$gender = htmlentities($row['gender']);
									$address = htmlentities($row['address']);
									$phone = htmlentities($row['phone']);
									$email = htmlentities($row['email']);
									$specialized = htmlentities($row['specialized']);
									$id = htmlentities($row['id']);
									/*$uname = htmlentities($row['username']);*/

							}
						?>

				      		<div class="row">
					      		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
									    <label>Username:</label>
									    <input type="hidden" name="uname" value="<?= $uname?>">
									    <input type="text" name="username" class="form-control" value="<?= $username ?>" placeholder="Username...">
								  	</div>
								</div>

							  	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
									    <label>Password:</label>
									    <input type="password" name="password" class="form-control" value="<?= $password ?>" placeholder="Password...">
								  	</div>
								</div>
							</div>

							<div class="row">
					      		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						    		<div class="form-group">
									    <label>Staff Role:</label>
									    <select class="form-control" name="role">
									    	<?php
									    	if ($role == 'Admin') {
									    		echo "<option value='Admin' name='Admin' selected >Admin</option>";
									    		# code...
									    	}
									    	else{
									    		echo "<option value='Doctor' name='Doctor' selected>Doctor</option>";
									    	}
											
											?>
											<option value="0" name="0">Choose user role...</option>
										    <option value="Admin" name="Admin">Admin</option>
										    <option value="Doctor" name="Doctor">Doctor</option>
										</select>
								  	</div>
								</div>
							</div>

				        	<div class="row">
					      		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
									    <label>First Name:</label>
									    <input type="hidden" name="id" value="<?= $id?>">
									    <input type="text" name="firstName" class="form-control" placeholder="First Name..." value="<?= $firstName ?>">
								  	</div>
								</div>

							  	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
									    <label>Second Name:</label>
									    <input type="text" name="secondName" class="form-control" placeholder="Second Name..." value="<?= $secondName ?>">
								  	</div>
								</div>
							</div>

				        	<div class="row">
					      		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
									    <label>Last Name:</label>
									    <input type="text" name="lastName" class="form-control" placeholder="Last Name..." value="<?= $lastName ?>">
								  	</div>
								</div>

							  	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
						    			<label>Staff Gender:</label>
									    <select class="form-control" name="gender">
									    	<?php
									    	if ($gender == 'Male') {
									    		echo "<option value='Male' name='Male' selected >Male</option>";
									    		# code...
									    	}
									    	else{
									    		echo "<option value='Female' name='Female' selected>Female</option>";
									    	}
											
											?>
											<option value="0" name="0">Choose user gender...</option>
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
									    <input type="text" name="address" class="form-control" placeholder="Address..." value="<?= $address ?>">
								  	</div>
								</div>

							  	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
									    <label>Phone:</label>
									    <input type="text" name="phone" class="form-control" placeholder="tell No..." value="<?= $phone ?>">
								  	</div>
								</div>
							</div>

							<div class="row">
					      		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
									    <label>Email:</label>
									    <input type="text" name="email" class="form-control" placeholder="Email..." value="<?= $email ?>">
								  	</div>
								</div>

							  	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
									    <label>Specialization:</label>
									    <input type="text" name="specialized" class="form-control" placeholder="Specialization..." value="<?= $specialized ?>">
								  	</div>
								</div>
							</div>
				        
					        <div class="row">
					          	<div class="col-12">
					            	<button type="submit" name="submit" class="btn btn-success btn-block">ADD</button>
					          	</div>
					        </div>
				      	</form>
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