<div class="top_navbar">
	<button class="openbtn" onclick="openNav()">&#9776;</button>

	<div class="top_menu">
		<div class="logo"> <a href="home.php"><img src="../images/hosp.png" class="logo-img" id="logo"></a></div>

		<!-- notifications -->
		<ul>

			<?php

				if (isset($_SESSION["role"])) {
					# code...
					if ($_SESSION["role"] == 'Admin') {
						# code...
						?>
						
							<li>
								<a href=""><i class="fa fa-comments"></i>
									<span class="badge badge-success navbar-badge">
										<?php
										include"connection/connection.php";

											$sql = "SELECT * FROM `appointment` WHERE STATUS='Accepted' ";
											$stmt = $conn->query($sql);
											while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

												$num=$stmt->rowCount();

											}
											
											if ($num > 0) {
												echo "$num";
												# code...
											}
											else{
												echo "0";
											}

										?>
									</span>
								</a>
							</li>

							<li>
								<a href="view-pending-appointment.php"><i class="fa fa-bell"></i>
									<span class="badge badge-danger navbar-badge">
										
										<?php
										include"connection/connection.php";

											$sql = "SELECT * FROM `appointment` WHERE STATUS='Decline' ";
											$stmt = $conn->query($sql);
											while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

												$num=$stmt->rowCount();

											}
											
											if ($num > 0) {
												echo "$num";
												# code...
											}
											else{
												echo "0";
											}

										?>

									</span>
								</a>
							</li>

						<?php
					}

					else if ($_SESSION["role"] == 'Doctor'){
						?>
							<li>
								<a href="view-pending-appointment.php"><i class="fa fa-bell"></i>
									<span class="badge badge-warning navbar-badge">
										
										<?php
										include"connection/connection.php";

											$sql = "SELECT * FROM `appointment` WHERE STATUS='pending' ";
											$stmt = $conn->query($sql);
											while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

												$num=$stmt->rowCount();

											}
											
											if ($num > 0) {
												echo "$num";
												# code...
											}
											else{
												echo "0";
											}

										?>

									</span>
								</a>
							</li>	
						<?php
					}

					else{
						echo "sorry invalid user";
					}
				}
			?>
		</ul>
	</div>

</div>