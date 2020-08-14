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
	<title>HMS login Page</title>
</head>
<!-- plugin links -->
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
	<script type="text/javascript" src="sweetalert/sweetalert.min.js"></script>

<!-- start boostrap links -->
	<link rel="stylesheet" type="text/css" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.5.0-dist/css/bootstrap.css">
	<!-- end boostrap links -->

	<!-- css links -->
	<link rel="stylesheet" type="text/css" href="Css/style.css">
	<!-- fontawesome links -->
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.13.1-web/css/all.min.css">

<body>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="card">
						    <div class="card-body login-card-body">
						      	<div class="form_icon"><img src="images/loginimg.png" id="img"></div>
								<h3>LOGIN FORM</h3>

						      	<form action="loginHandler.php" method="post">

						        	<div class="input-group mb-4">
						        		<div class="input-group-append">
							            	<div class="input-group-text">
							              		<span class="fa fa-user"></span>
							            	</div>
							          	</div>
							          	<input type="text" class="form-control" placeholder="username" name="username">
						        	</div>

						        	<div class="input-group mb-4">
						        		<div class="input-group-append">
							            	<div class="input-group-text">
							              		<span class="fa fa-key"></span>
							            	</div>
							          	</div>
							          	<input type="password" class="form-control" placeholder="password" name="password">
						        	</div>

						        	<div class="checkbox">
								        <label>
								          	<input name="remember" id="remember" type="checkbox" value="1">&nbsp; Remember Me
								        </label>
								    </div>
						        
							        <div class="row">
							          	<div class="col-12">
							            	<button type="submit" name="submit" class="btn btn-success btn-block">Sign In</button>
							          	</div>
							        </div>
						      	</form>

							    <p class="mb-1">
							    	<a href="forgot-password.html" style="text-decoration: none; color: white;">
							        	I forgot my password.?
							        </a>
							    </p>
							    
						    </div>    
					</div>

				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function myalert(){
			swal("Good job!", "You clicked the button!", "success");
		}
	</script>
</body>
</html>