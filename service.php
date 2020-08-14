<!DOCTYPE html>
<html>
<head>
	<title>HMS Service Page</title>
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
					<img src="images/1.jpg" alt="operation service image" id="service-image">
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="service-detail">
					<h4 id="service-name"><u>Operations:</u></h4>
					jjjkjnvkjdnvkjdnvkjdfnvkjdfkjdfnd  vj nergibg biuerbjerbger nbuberiuog juberiugr ndfbveribger fberjbern nevne vuergnhd v vbev nev enbver v cvienf bnmfb jger bn iu  njev n nviuv gv nfv yfdgr nfvggnbvv  udv dhbgen vhguvvh bggnvbrjg v nbhv b vue hdbv v vsughjer dfnbg35ughv kjg vugbjrbg gbabr
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="service-detail">
					<h4 id="service-name"><u>Operations:</u></h4>
					jjjkjnvkjdnvkjdnvkjdfnvkjdfkjdfnd  vj nergibg biuerbjerbger nbuberiuog juberiugr ndfbveribger fberjbern nevne vuergnhd v vbev nev enbver v cvienf bnmfb jger bn iu  njev n nviuv gv nfv yfdgr nfvggnbvv  udv dhbgen vhguvvh bggnvbrjg v nbhv b vue hdbv v vsughjer dfnbg35ughv kjg vugbjrbg gbabr
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<img src="images/2.jpg" alt="operation service image" id="service-image">
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<img src="images/3.jpg" alt="operation service image" id="service-image">
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="service-detail">
					<h4 id="service-name"><u>Operations:</u></h4>
					jjjkjnvkjdnvkjdnvkjdfnvkjdfkjdfnd  vj nergibg biuerbjerbger nbuberiuog juberiugr ndfbveribger fberjbern nevne vuergnhd v vbev nev enbver v cvienf bnmfb jger bn iu  njev n nviuv gv nfv yfdgr nfvggnbvv  udv dhbgen vhguvvh bggnvbrjg v nbhv b vue hdbv v vsughjer dfnbg35ughv kjg vugbjrbg gbabr
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="service-detail">
					<h4 id="service-name"><u>Operations:</u></h4>
					jjjkjnvkjdnvkjdnvkjdfnvkjdfkjdfnd  vj nergibg biuerbjerbger nbuberiuog juberiugr ndfbveribger fberjbern nevne vuergnhd v vbev nev enbver v cvienf bnmfb jger bn iu  njev n nviuv gv nfv yfdgr nfvggnbvv  udv dhbgen vhguvvh bggnvbrjg v nbhv b vue hdbv v vsughjer dfnbg35ughv kjg vugbjrbg gbabr
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<img src="images/4.jpeg" alt="operation service image" id="service-image">
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