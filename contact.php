<!DOCTYPE html>
<html>
<head>
	<title>HMS Contact Page</title>
	<!-- plugin links -->
	<script type="text/javascript" src="SweetAlert/sweetalert2.min.js"></script>
	<script type="text/javascript" src="SweetAlert/sweetalert2.all.min.js"></script>
	<script type="text/javascript" src="jquery-3.5.1/jquery-3.5.1.min.js"></script>
<!-- start boostrap links -->
	<link rel="stylesheet" type="text/css" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.5.0-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.5.0-dist/js/bootstrap.min.js">
	<!-- end boostrap links -->

	<!-- css links -->
	<link rel="stylesheet" type="text/css" href="Css/style.css">
	<!-- fontawesome links -->
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.13.1-web/css/all.min.css">
</head>
<body>
	<div class="container-fluid">
		<!-- include header file -->
		<?php 
			include "include/header.php";
		?>

		<div class="container">

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<span class="map">map is appeared here</span>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="container">
						<h4>contact means</h4>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<h5>Address</h5>
								<label>tunguuu</label>
								<label>Zanzibar,Tanzania</label>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<h5>Contact</h5>
								<label>phone: +255778016802</label>
								<label>email: abdulhafidh2708@gmail.com</label>
							</div>
						</div>
					</div>
					<hr>

					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="time-hrs" style="text-align: center;">
								<label style="color: blue"><u><b>View Hours</b></u>&nbsp;&nbsp;<span class="input-icon"><i class="fa fa-clock"></i></span></label>
								<h2>We're Open At These Times</h2>
								<hr>

						      <div class="row">
						      	<div class="col-6">
						      		<span class="day">Monday</span>
						      	</div>
						      	<div class="col-6">
						      		<span class="time">4pm - 12am</span>
						      	</div>
						      </div>

						      <div class="row">
						      	<div class="col-6">
						      		<span class="day">Tuesday</span>
						      	</div>
						      	<div class="col-6">
						      		<span class="time">4pm - 12am</span>
						      	</div>
						      </div>

						      <div class="row">
						      	<div class="col-6">
						      		<span class="day">Wednesday</span>
						      	</div>
						      	<div class="col-6">
						      		<span class="time">4pm - 12am</span>
						      	</div>
						      </div>

						      <div class="row">
						      	<div class="col-6">
						      		<span class="day">Thursday</span>
						      	</div>
						      	<div class="col-6">
						      		<span class="time">4pm - 12am</span>
						      	</div>
						      </div>

						      <div class="row">
						      	<div class="col-6">
						      		<span class="day">Friday</span>
						      	</div>
						      	<div class="col-6">
						      		<span class="time">4pm - 12am</span>
						      	</div>
						      </div>

						      <div class="row">
						      	<div class="col-6">
						      		<span class="day">Saturday</span>
						      	</div>
						      	<div class="col-6">
						      		<span class="time">4pm - 12am</span>
						      	</div>
						      </div>

						      <div class="row">
						      	<div class="col-6">
						      		<span class="day">Sunday</span>
						      	</div>
						      	<div class="col-6">
						      		<span class="time">4pm - 12am</span>
						      	</div>
						      </div>
						      </div>
			      
						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<br>
							<br>
							<br>
							<h4>Follow us</h4>
							<label>facebook</label>
							<label>Twiteer</label>
						</div>
					</div>


				</div>
			</div>
		</div>
		<!-- include footer page -->
		<?php 
			include "include/footer.php"
		?>

		<!-- include request popup form -->
		<?php
			include "include/modal-form.php"
		?>
		
	</div>

		<!-- script for modal start -->
	<script>
		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
		btn.onclick = function() {
		  modal.style.display = "block";
		}

		// When the user clicks on (x), close the modal
		span.onclick = function() {
		  modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		  if (event.target == modal) {
		    modal.style.display = "none";
		  }
		}
	</script>

</body>
</html>