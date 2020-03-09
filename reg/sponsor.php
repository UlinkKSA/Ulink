<?php
include('PhpDatabaseInsertS.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration</title>
	<link rel="icon" type="image/svg" href="../assets/images/pageIcon.png"/>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
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
<nav class="navbar" style="background-color: rgba(255, 145, 76, 0.8);border-bottom-right-radius: 20px;border-bottom-left-radius: 20px">
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
	<li><a href="../index.php" >HOME</a></li>
    </ul>
  </div>
</nav>
			
			  
			
			  <script src="assets/jquery/jquery-3.2.1.min.js"></script>
			  <script src="assets/bootstrap/js/bootstrap.min.js"></script>


	<div class="container-contact100">
		<div class="wrap-contact100" style="background-color: rgba(255, 145, 76, 0.8)">
			<form class="contact100-form validate-form" method="POST">
				<span class="contact100-form-title">
					Hello Sponsor!
				</span>

				<div class="wrap-input100 validate-input" data-validate="Firstname is required">
					<span class="label-input100">Firstname</span>
					<input class="input100" type="text" name="fname" placeholder="Enter your firstname" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Lastname is required">
					<span class="label-input100">Lastname</span>
					<input class="input100" type="text" name="lname" placeholder="Enter your lastname" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Enter your email addess" required>
					<span class="focus-input100"></span>
				</div>

				<div class="form-group">
				<span class="label-input100">Phone Number</span>
				<br>
				<input type="hidden" id="phone2" name="phone"/>
				<input type="tel" class="form-control"id="phone" name="phone" id="phone" required>
				<script src="intlTelInput.js"></script>

				<script>
				  var input = document.querySelector("#phone");
				  window.intlTelInput(input);
				</script>
			  </div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Password</span>
					<input class="input100" type="password" name="password" placeholder="Enter your password" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character">
					<span class="focus-input100"></span>
				</div>
			
				<div class="wrap-input100 validate-input" data-validate="Company's name is required">
					<span class="label-input100">Company's Name</span>
					<input class="input100" type="text" name="cname" placeholder="Enter your Company's Name" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Industry</span>
					<div>
						<select class="selection-2" name="industry" required>
					<option value="Choose">Choose</option>
					<option value="Technology">Technology</option>
					<option value="Business">Business</option>
					<option value="Photography">Photography</option>
					<option value="Automobile">Automobile</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Targeted Audience</span>
					<div>
						<select class="selection-2" name="TA" required>
							<option value="Choose">Choose</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Both">Both</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Sponsorship Type</span>
					<div>
						<select class="selection-2" name="spt" required>
					<option value="Choose">Choose</option>
					<option value="fin">Financial</option>
					<option value="ser">Services (inkind)</option>
					<option value="medi">Media</option>
					<option value="speak">Speakers</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Briefly Describe your Company</span>
					<textarea class="input100" name="message" placeholder="Your description here..." required></textarea>
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
