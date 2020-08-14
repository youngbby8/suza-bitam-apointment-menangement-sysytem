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
						<h4 style="color: #08899c;">Update Shift form</h4>
					</div>
				</div>

				<div class="card">
				    <div class="card-body login-card-body">
						<h3>UPDATE SHIFT FORM</h3>

						<?php
						include"connection/connection.php";

							if (isset($_GET['id']) ) {
								/*$x = $_GET['id'];
								echo "$x";*/
								$stmt = $conn->prepare("SELECT * FROM shift where id = :id");
								$stmt->execute(array(":id" => $_GET['id']));
								$row = $stmt->fetch(PDO::FETCH_ASSOC);

								$name = htmlentities($row['name']);
								$startTime = htmlentities($row['startTime']);
								$endTime = htmlentities($row['endTime']);
								$id = htmlentities($row['id']);

						}
						?>

				      	<form action="handler/update-shift-handler.php" method="post">

				        	<div class="input-group mb-4">
				        		<div class="input-group-append">
					            	<div class="input-group-text">
					              		<span class="fa fa-user"></span>
					            	</div>
					          	</div>
					          	<input type="hidden" name="id" value="<?= $id ?>">
					          	<input type="text" name="name" class="form-control" placeholder="name" value="<?= $name ?>">
				        	</div>

				        	<div class="input-group mb-4">
				        		<div class="input-group-append">
					            	<div class="input-group-text">
					              		<span class="fa fa-clock"></span>
					            	</div>
					          	</div>
					          	<input type="text" name="startTime" class="form-control" placeholder="start time" value="<?= $startTime ?>">
				        	</div>

				        	<div class="input-group mb-4">
				        		<div class="input-group-append">
					            	<div class="input-group-text">
					              		<span class="fa fa-clock"></span>
					            	</div>
					          	</div>
					          	<input type="text" name="endTime" class="form-control" placeholder="end time" value="<?= $endTime ?>">
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