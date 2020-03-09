<!DOCTYPE html>
<html lang="en">
<head>
	<title>Choose A Role</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/svg" href="../assets/images/pageIcon.png"/>
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
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
				Hello New Linker !
				</span>
				<div class="wrap-input100 input100-select">
					<span class="label-input100">Choose Your Role</span>
					<div>
						<select class="selection-2" name="Role" onChange="window.location.href=this.value">
					<option value="Choose" selected="selected">Choose</option>
					<option value="eventC.php">Event Creator</option>
					<option value="sponsor.php">Sponsor</option>
					<option value="serviceP.php">Service Provider</option>
					<option value="venueO.php">Venue Owner</option>
						</select>
					</div>
					<span class="focus-input100"></span>
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
