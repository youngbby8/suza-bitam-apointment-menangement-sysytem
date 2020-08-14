<!-- The Modal start -->
<div id="myModal" class="modal">
	<!-- Modal content -->
  	<div class="modal-content">

  		

    	<span class="close">&times;</span>
    	<!--Pop up Form-->
    	<form action="modal-appointment-handler.php" method="POST" name="AppointmentForm" onsubmit="validation()">
    		<div class="row">
					      		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
									    <label>First Name:</label>
									    <input type="text" class="form-control" name="fName">
								  	</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
									    <label>Second Name:</label>
									    <input type="text" class="form-control" name="sName">
								  	</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
									    <label>Last Name:</label>
									    <input type="text" class="form-control" name="lName">
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
									    <input type="text" class="form-control" name="adress">
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
									    <input type="text" class="form-control" name="phone">
								  	</div>
								</div>

					      		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<div class="form-group">
									    <label>Email:</label>
									    <input type="email" class="form-control" name="email">
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
									    <input type="date" class="form-control" name="day">
								  	</div>
								</div>

							  	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12>
						    		<div class="form-group">
									    <label>Time:</label>
									    <input type="time" class="form-control" name="clock">
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

	<!-- appointment form validation -->
	<script>
		function validation()
		{
			var fname = document.forms["AppointmentForm"]["fName"];
			var sname = document.forms["AppointmentForm"]["sName"];
			var lname = document.forms["AppointmentForm"]["lName"];
			var address = document.forms["AppointmentForm"]["adress"];
			var phone = document.forms["AppointmentForm"]["phone"];
			var email = document.forms["AppointmentForm"]["email"];

			if (fname.value == "")
			 {
			 	window.alert("Please enter your first name.");
			 	fname.focus();
			 	return false;
			 }

			 if (sname.value == "")
			 {
			 	window.alert("Please enter your second name.");
			 	sname.focus();
			 	return false;
			 }

			 if (lname.value == "")
			 {
			 	window.alert("Please enter your last name.");
			 	lname.focus();
			 	return false;
			 }

			 if (address.value == "")
			 {
			 	window.alert("Please enter your address .");
			 	address.focus();
			 	return false;
			 }

			 if (phone.value == "")
			 {
			 	window.alert("Please enter your phone number.");
			 	phone.focus();
			 	return false;
			 }

			 if (email.value == "")
			 {
			 	window.alert("Please enter a valid email .");
			 	email.focus();
			 	return false;
			 }
			 return true;
		}
		
	</script>
