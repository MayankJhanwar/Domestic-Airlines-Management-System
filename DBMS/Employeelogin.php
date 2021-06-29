<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Window | DAMS-RDBMS Project</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="subtheme1/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="subtheme1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="subtheme1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="subtheme1/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="subtheme1/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="subtheme1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="subtheme1/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="subtheme1/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="subtheme1/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="subtheme1/css/util.css">
	<link rel="stylesheet" type="text/css" href="subtheme1/css/main.css">
<!--===============================================================================================-->
    <style>
    a { color: #FFFFFF; font-weight: bold; } /* CSS link color */
    </style>

</head>
<body>
	
    <?php

$servername='localhost';
$username='root';
$password='Mayankmaheshwari@1806';
$dbname = "DAMS";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
	 
	if(isset($_POST['userid'])){
	    
	    $userid=$_POST['userid'];
	    $username=$_POST['username'];
	    
	    $sql="select * from Employee where EmpID='".$userid."'AND Name='".$username."' limit 1";
	    
	    $result=mysqli_query($conn, $sql);
	    
	    if(mysqli_num_rows($result)==1){
	        
            echo "<script> window.location.assign('employeeservices.php'); </script>";
	        exit();
	    }
	    else{
	        echo " <h1>You Have Entered Incorrect Details</h1>";
	        exit();
	    }
	        
	}
     
    ?>
	
	<div class="container-login100" style="background-image: url('subtheme1/images/bg-011.png');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action="" method=POST>
				<span class="login100-form-title p-b-37">
					LOGIN Window<br><br><h5>Hola Employee!</h5>
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter your Unique EmployeeID">
					<input class="input100" type="text" name="userid" placeholder="EmployeeID*">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter Full Name">
					<input class="input100" type="text" name="username" placeholder="Enter Full Name*">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Log In
					</button>
				</div>

				<div class="text-center">
					<a href="forgotUserid.html" class="txt2 hov1">
						<br>Forgot EmployeeID
					</a>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						New Customer / Employee<br>Join to Our Services HERE<br> Sign up Below
					</span>
				</div>

				<div class="text-center">
					<a href="signup_welcome.html" class="txt2 hov1">
						Sign Up
					</a>
				    <br>
					<a href="index.html" class="txt2 hov1">
						Back to HOME - Click HERE
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="subtheme1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="subtheme1/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="subtheme1/vendor/bootstrap/js/popper.js"></script>
	<script src="subtheme1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="subtheme1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="subtheme1/vendor/daterangepicker/moment.min.js"></script>
	<script src="subtheme1/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="subtheme1/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="subtheme1/js/main.js"></script>

</body>
</html>