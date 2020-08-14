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
						<h4 style="color: #08899c;">Update user form</h4>
					</div>
				</div>

				<div class="card">
				    <div class="card-body login-card-body">
						<h3>UPDATE A USER FORM</h3>

						<?php
						include"connection/connection.php";

							if (isset($_GET['username']) ) {
								$stmt = $conn->prepare("SELECT * FROM user where username = :username");
								$stmt->execute(array(":username" => $_GET['username']));
								$row = $stmt->fetch(PDO::FETCH_ASSOC);

								$username = htmlentities($row['username']);
								$password = htmlentities($row['password']);
								$role = htmlentities($row['role']);
								$uname = htmlentities($row['username']);

						}
						?>

				      	<form action="handler/update-user-handler.php" method="post">

				        	<div class="input-group mb-4">
				        		<div class="input-group-append">
					            	<div class="input-group-text">
					              		<span class="fa fa-user"></span>
					            	</div>
					          	</div>
					          	<input type="text" name="username" class="form-control" value="<?= $username ?>" placeholder="username" required="">
					          	<input type="hidden" value="<?= $uname ?>" name="uname" class="form-control">
				        	</div>

				        	<div class="input-group mb-4">
				        		<div class="input-group-append">
					            	<div class="input-group-text">
					              		<span class="fa fa-key"></span>
					            	</div>
					          	</div>
					          	<input type="password" value="<?= $password ?>" name="password" class="form-control" placeholder="password" required="">
				        	</div>

				        	<div class="input-group mb-4">
				        		<div class="input-group-append">
					            	<div class="input-group-text">
					              		<span class="fa fa-key"></span>
					            	</div>
					          	</div>
					          	<select class="form-control" name="role">
									<option>Choose user role</option>
								    <option name="Admin" value="Admin">Admin</option>
								    <option name="Doctor" value="Doctor">Doctor</option>
								    <option name="Receptionist" value="Receptionist">Receptionist</option>
								    <option name="Patient" value="Patient">Patient</option>
								</select>
				        	</div>
				        
					        <div class="row">
					          	<div class="col-12">
					            	<button type="submit" name="update" class="btn btn-success btn-block">UPDATE</button>
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
</body>
</html>