<?php
include('PhpDatabaseInsertV.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create An Event</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/flat-icon/flaticon.css">
	<link rel="stylesheet" href="../temp/styles/styles.css">
	<link rel="stylesheet" href="css/intlTelInput.css">
<!--===============================================================================================-->
<style>
	a{
		color:white;
	}
	</style>
</head>
<body>
<nav class="navbar" style="background-color: rgba(255, 145, 76, 0.5);">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span> 
    </button>
    <a class="navbar-brand" href="#"><img src="../assets/images/ULINK white logo png.png" width="110" height="25"></a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav pull-right">
      <li><a href="#home-section" >HOME</a></li>
      <li><a href="#">SERVICES</a></li>
      <li><a href="#">VENUES</a></li> 
      <li><a href="#">SPONSORS</a></li>
      <?php
if (empty($_SESSION['login_user'])) {
echo'<li><a href="#" data-toggle="modal" data-target="#modalRegisterForm">LOGIN</a></li>';
echo"<li><a href='reg/reg.php'>SIGN UP</a></li>";
}else {
echo"<li><a href='logout.php'>LOGOUT</a></li>";
}
?>
    </ul>
  </div>
</nav>	
			  <script src="assets/jquery/jquery-3.2.1.min.js"></script>
			  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST">
				<span class="contact100-form-title">
					Let's Create Your Event!
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Event Name</span>
					<input class="input100" type="text" name="fname" placeholder="Enter your firstname">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Event Date</span>
					<input class="input100" type="date">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Event Type</span>
					<div>
						<select class="" name="vtype">
					<option value="Choose">Choose</option>
					<option value="Outdoor Event">Outdoor Event</option>
					<option value="Indoor Event">Indoor Event</option>
					<option value="Workshop">Workshop</option>
					<option value="Conference">Conference</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Where It Will Take Place ?</span>
					<div>
						<select class="selection-2" name="vtype">
					<option value="Choose">Choose</option>
					<option value="Jeddah">Jeddah</option>
					<option value="Riyadh">Riyadh</option>
					<option value="Dammam">Dammam</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Targeted Audience</span>
					<div>
						<select class="selection-2" name="TA">
							<option value="Choose">Choose</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Both">Both</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Expected Attendees</span>
					<input class="input100" type="text" name="lname" placeholder="Enter your lastname">
					<span class="focus-input100"></span>
				</div>

			
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Venue's Name</span>
					<input class="input100" type="text" name="vname" placeholder="Enter your Company's Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Types of events you host</span>
					<div>
						<select class="selection-2" name="vtype">
					<option value="Choose">Choose</option>
					<option value="Technology">Technology</option>
					<option value="Business">Business</option>
					<option value="Photography">Photography</option>
					<option value="Automobile">Automobile</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Briefly Describe Your Event</span>
					<textarea class="input100" name="bio" placeholder="Your description here..."></textarea>
					<span class="focus-input100"></span>
				</div>
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit" name="reg_user">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>




	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
