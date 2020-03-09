<?php
session_start();  
include('loginScript.php');
?>
<!doctype html>
<html lang="en">
<head>
    <!--===============================================================================================-->
    <link rel="icon" type="image/svg" href="assets/images/pageIcon.png"/>
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="reg/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="reg/vendor/animate/animate.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="reg/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="reg/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="reg/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="reg/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="reg/css/util.css">
      <link rel="stylesheet" type="text/css" href="reg/css/main.css">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/flat-icon/flaticon.css">
      <link rel="stylesheet" href="temp/styles/styles.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ULINK</title>
  <meta name="keywords" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
  <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
  
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/flat-icon/flaticon.css">
  <link rel="stylesheet" href="temp/styles/styles.css">
  <style>

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Create four equal columns that floats next to eachother */
.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

/* Hide the slides by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Caption text */
.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

img.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

  .footer{
  background:  rgba(255, 145, 76, 0.8);
  color:white;
}

  a{
    color:white;
  }
/* Float four columns side by side */

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  border-radius: 15px;
  padding: 16px;
  margin-left: 10px;
  margin-right: 10px;
  text-align: center;
  background-color: #f1f1f1;
  margin-bottom: 30px;
  margin-top: 30px;
  background-color: white;
  transition: 0.3s;
  -webkit-transform: scale(1.0);
  -ms-transform: scale(1.0);
  transform: scale(1.0);
}

.card:hover {
  background-color: rgba(255, 145, 76, 0.8);
  transition: 0.3s;
  -webkit-transform: scale(1.2);
  -ms-transform: scale(1.2);
  transform: scale(1.2);
}
.card2 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  border-radius: 15px;
  padding: 16px;
  margin-left: 10px;
  margin-right: 10px;
  text-align: center;
  background-color: #f1f1f1;
  margin-bottom: 30px;
  margin-top: 30px;
  background-color: white;
  transition: 0.3s;
  -webkit-transform: scale(1.0);
  -ms-transform: scale(1.0);
  transform: scale(1.0);
}

.card2:hover {
  transition: 0.3s;
  -webkit-transform: scale(1.2);
  -ms-transform: scale(1.2);
  transform: scale(1.2);
}
video {
  width: 100%;
  height: auto;
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
    <a class="navbar-brand" href="index.php"><img src="assets/images/ULINK white logo png.png" width="110" height="25"></a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav pull-right">
      <li><a href="index.php" >HOME</a></li>
      <li><a href="AboutUS.php" >ABOUT US</a></li>
      <?php
if (empty($_SESSION['login_user'])) {
echo'<li><a href="login.php">LOGIN</a></li>';
echo"<li><a href='reg/redirect.php'>SIGN UP</a></li>";
}else {
  $servername="localhost";
  $dusername="khalidAdmin";
  $dpassword="pPcLuyepp9q7mPpZ";
  $dbname="ULINK";
  $username = $_SESSION['login_user'];
  // Establishing Connection with Server by passing server_name, user_id and password as a parameter
  $connection=mysqli_connect($servername,$dusername,$dpassword,$dbname);
  // SQL query to fetch information of registerd users and finds user match.
  $query = mysqli_query($connection,"select * from users WHERE email = '$username'");
  $rows = mysqli_num_rows($query);
  while ($row = mysqli_fetch_assoc($query)) {
    $cname = $row["userType"];
    if(strcmp($cname,'	
    Event creator')==0){
    echo '<li><a href"reg/ce.php">CREATE AN EVENT</a></li>';
    break;}
 }
echo"<li><a href='gallery/Services.php'>SERVICES</a></li>
<li><a href='gallery/Venues.php'>VENUES</a></li> 
<li><a href='gallery/SponsorG.php'>SPONSORS</a></li>
<li><a href='logout.php'>LOGOUT</a></li>";
}
?>

    </ul>
  </div>
</nav>
  <div class="main-wrapper" style="margin-top: 10%;">

    
    <section class="about" style="background-color :rgba(255, 145, 76, 0.8); border-radius: 30px;">
      <div class="container">
        <div class="page-section">
          <div class="text-center">
            <h2 class="page-section__title">Venue's Profile</h2>
            <br>
          </div>
          <div class="row gutters-50">
            <div class="about--narrow">
              <div class="col-md-6">
                <!-- Images used to open the lightbox -->

  <div class="column">
    <img src="assets/images/مسرعة-بادر.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
  </div>
<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="assets/images/Screen Shot 2020-02-27 at 2.13.40 PM.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="assets/images/Screen Shot 2020-02-27 at 2.13.54 PM.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="assets/images/Screen Shot 2020-02-27 at 2.14.01 PM.png" style="width:100%">
    </div>

  

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->
  

  </div>
</div>
              </div>
              <script>
                // Open the Modal
                function openModal() {
                  document.getElementById("myModal").style.display = "block";
                }
                
                // Close the Modal
                function closeModal() {
                  document.getElementById("myModal").style.display = "none";
                }
                
                var slideIndex = 1;
                showSlides(slideIndex);
                
                // Next/previous controls
                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }
                
                // Thumbnail image controls
                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }
                
                function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("demo");
                  var captionText = document.getElementById("caption");
                  if (n > slides.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";
                  dots[slideIndex-1].className += " active";
                  captionText.innerHTML = dots[slideIndex-1].alt;
                }
                </script>
              <div class="col-md-6 about__extra-padding">
                  <p class="about__content-paragraph">Venue Name : Badir</p>
                  <p class="about__content-paragraph">Venue Type : Workspace</p> 
                  <p class="about__content-paragraph">Venue Capacity : Small</p> 
                  <button class="button">Link me with this event</button>
                </div>
              </div>
            </div>
            
          </div>
          
        </div>
        
      </section>
    
      
    
  </div>  


  <div class="mt-5 pt-5 pb-5 footer" style="border-top-right-radius: 20px;border-top-left-radius: 20px; margin-top: 10%;">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-xs-12 about-company">
          <h4 class="mt-lg-0 mt-sm-3">Social Media Accounts :</h4>
          <p class="pr-5 text-white-50"><img src="assets/images/snapchat.svg" width="25" height="25"> <img src="assets/images/twitternew.svg" width="25" height="25"> <img src="assets/images/instagram.svg" width="25" height="25"> @Ulink0 </p>
        </div>
        <div class="col-lg-3 col-xs-12 links">
  </div>
        <div class="col-lg-4 col-xs-12 location">
          <h4 class="mt-lg-0 mt-sm-4">Location :</h4>
          <p>Jeddah, Badir</p>
          <!--
          <p class="mb-0"><i class="fa fa-phone mr-3"></i>(541) 754-3010</p>
          <p><i class="fa fa-envelope-o mr-3"></i>info@hsdf.com</p>-->
        </div>
      </div>
    </div>
    </div>

  

  <script src="assets/jquery/jquery-3.2.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>





