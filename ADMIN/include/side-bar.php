<div class="sidebar" id="sidebar">
	<p><button class="closebtn" onclick="closeNav()" >&times;</button></p><br>


<?php

	if (isset($_SESSION["role"])) {
		# code...
		if ($_SESSION["role"] == 'Admin') {
			# code...
			?>
			<div class="dropdown" id="sidebar">
			  	<a href="#" class="title">
					<span class="icon-title">
						<i class="fa fa-user" aria-hidden="true"></i>
					</span>
					Staffs
				</a>

			  	<div class="dropdown-content" id="sidebar">
			    	<ul>
			    		<li>
			    			<a href="Add-staff.php" id="sidebar">Add Staff</a>
			    		</li>
			    		<li>
			    			<a href="view-staff.php" id="sidebar">View Staff</a>
			    		</li>
			    	</ul>
			  	</div>
			</div><br>

			<div class="dropdown" id="sidebar">
			  	<a href="#" class="title">
					<span class="icon-title">
						<i class="fa fa-calendar" aria-hidden="true"></i>
					</span>
					Appointment
				</a>
			  	<div class="dropdown-content" id="sidebar">
			    	<ul>
			    		<li>
			    			<a href="Add-Appointment.php" id="sidebar">Add Appointment</a>
			    		</li>
			    		<li>
			    			<a href="view-appointment.php" id="sidebar">View Appointment</a>
			    		</li>
			    	</ul>
			  	</div>
			</div>	

			<?php
		}

		else if ($_SESSION["role"] == 'Doctor'){
			?>
				<div class="dropdown" id="sidebar">
				  	<a href="#" class="title">
						<span class="icon-title">
							<i class="fa fa-calendar" aria-hidden="true"></i>
						</span>
						Appointment
					</a>
				  	<div class="dropdown-content" id="sidebar">
				    	<ul>
				    		<li>
				    			<a href="view-appointment.php" id="sidebar">View Appointment</a>
				    		</li>
				    	</ul>
				  	</div>
				</div>	
			<?php
		}

		else{
			echo "sorry invalid user";
		}
	}
?>
	<div class="dropdown" id="sidebar">
	  	<a href="handler/logout.php" class="title" name="logout">
			<span class="icon-title">
				<i class="fa fa-sign-out-alt" aria-hidden="true"></i>
			</span>
			Logout
		</a>
	</div><br>
	
 
</div>