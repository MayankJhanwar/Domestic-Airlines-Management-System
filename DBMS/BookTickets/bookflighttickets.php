<!DOCTYPE html>
<html lang="en">
<head>
	<title>Book Flight Tickets | DAMS-RDBMS Project</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../subtheme1/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../subtheme1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../subtheme1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../subtheme1/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../subtheme1/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../subtheme1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../subtheme1/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../subtheme1/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../subtheme1/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../subtheme1/css/util.css">
	<link rel="stylesheet" type="text/css" href="../subtheme1/css/main.css">
<!--===============================================================================================-->
    <style>
    a { color: #FFFFFF; font-weight: bold; } /* CSS link color */
    </style>

</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('../subtheme1/images/bookingflighttickets.png');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action="ticketsbooked.php" method=POST>
				<span class="login100-form-title p-b-37">
					Almost there!<br><h5>Some more Details</h5>
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Flight Number">
					<input class="input100" type="text" name="flightno" placeholder="Enter Flight Number*">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Renter your PassengerID">
					<input class="input100" type="text" name="PassengerID" placeholder="Renter your Passenger ID*">
					<span class="focus-input100"></span>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Please confirm your TRIP details
					</span>
				</div>
			
				<div class="text-center">
					<a href="#" class="txt2 hov1">
						From*
					</a>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Source">
					<input class="input100" type="text" name="from" placeholder="">
					<span class="focus-input100"></span>
				</div>

				<div class="text-center">
					<a href="#" class="txt2 hov1">
						To*
					</a>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Destination">
					<input class="input100" type="text" name="to" placeholder="">
					<span class="focus-input100"></span>
				</div>

				<div class="text-center">
					<a href="#" class="txt2 hov1">
						Departure Date*
					</a>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Date">
					<input class="input100" type="text" name="date" placeholder="">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Book TICKETS!
					</button>
				</div>

				<div class="text-center">
				   	<a href="choosingflights.php" class="txt2 hov1">
						<br>Want to change Something!
					</a>
				</div>


				<div class="text-center">
				   	<a href="../index.html" class="txt2 hov1">
						<br>Back to HOME-Click HERE
					</a>
				</div>

			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../subtheme1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../subtheme1/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../subtheme1/vendor/bootstrap/js/popper.js"></script>
	<script src="../subtheme1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../subtheme1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../subtheme1/vendor/daterangepicker/moment.min.js"></script>
	<script src="../subtheme1/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../subtheme1/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../subtheme1/js/main.js"></script>

</body>
</html>