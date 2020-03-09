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
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/flat-icon/flaticon.css">
  <link rel="stylesheet" href="temp/styles/styles.css">
  <style>
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
  <div data-aos="fade-up">
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

  <div class="main-wrapper" style="margin-top: 5%;">
    <div class="container" style="width: 50%; height: 20%;">
      <div id="headerContent">
        <video autoplay="true" muted style="opacity: 50%;" id="intro">
            <source src="assets/int.mp4" type="video/mp4">
        </video>
    </div>
    </div> 

    <script>
      var vid = document.getElementById("intro");
vid.playbackRate = 0.5;
    </script>
    </div>
    <div data-aos="fade-up">
    <section class="about" style="background-color :rgba(255, 145, 76, 0.8); border-radius: 30px;">
      <div class="container">
        <div class="page-section">
          <div class="text-center">
            <h2 class="page-section__title">ABOUT ULINK</h2>
            <p class="page-section__paragraph">Digital platform linking business event creators with a sponsorship opportunity</p>
          </div>
          <div class="row gutters-50">
            <div class="about--narrow">
              <div class="col-md-6">
                <img class="img-responsive" src="assets/images/about-pic.png" alt="">
              </div>
              <div class="col-md-6 about__extra-padding">
                <h3 class="about__content-title">The story behind the brand</h3>
                  <p class="about__content-paragraph"> ULINK started after noticing a pain point in the linking process with sponsors and events more than 100+ days it usually takes to make a decision in sponsoring an event or evaluating an opportunity.  So we decided to make it our MISSION to create a digital process to eliminate this pain for both the property owner and the sponsor by presenting a solution…</p>      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
  <!--    <div class="container">
        <section class="project">
          <div class="page-section">
            <div class="text-center">
              <h2 class="page-section__title">FEATURED PROJECT</h2>
              <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
            <div class="row gutters-50">
              <div class="col-md-4">
                <div class="thumbnail">
                  <a href="assets/images/featured-project-pic1.png" target="_blank">
                    <img class="img-responsive" src="assets/images/featured-project-pic1.png" alt="">
                    <div class="caption">
                      <h4 class="project__title">DESIGN</h4>
                      <p class="project__paragraph">Lorem ipsum dolor sit amet </p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                  <a href="assets/images/featured-project-pic2.png" target="_blank">
                    <img class="img-responsive" src="assets/images/featured-project-pic2.png" alt="">
                    <div class="caption">
                      <h4 class="project__title">DESIGN</h4>
                      <p class="project__paragraph">Lorem ipsum dolor sit amet </p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                  <a href="assets/images/featured-project-pic3.png" target="_blank">
                    <img class="img-responsive" src="assets/images/featured-project-pic3.png" alt="">
                    <div class="caption">
                      <h4 class="project__title">DESIGN</h4>
                      <p class="project__paragraph">Lorem ipsum dolor sit amet </p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="row gutters-50">
              <div class="col-md-4">
                <div class="thumbnail">
                  <a href="assets/images/featured-project-pic4.png" target="_blank">
                    <img class="img-responsive" src="assets/images/featured-project-pic4.png" alt="">
                    <div class="caption">
                      <h4 class="project__title">DESIGN</h4>
                      <p class="project__paragraph">Lorem ipsum dolor sit amet </p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                  <a href="assets/images/featured-project-pic5.png" target="_blank">
                    <img class="img-responsive" src="assets/images/featured-project-pic5.png" alt="">
                    <div class="caption">
                      <h4 class="project__title">DESIGN</h4>
                      <p class="project__paragraph">Lorem ipsum dolor sit amet </p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                  <a href="assets/images/featured-project-pic6.png" target="_blank">
                    <img class="img-responsive" src="assets/images/featured-project-pic6.png" alt="">
                    <div class="caption">
                      <h4 class="project__title">DESIGN</h4>
                      <p class="project__paragraph">Lorem ipsum dolor sit amet </p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      -->
<!--events : AI Challenge Vibes Office -  - StartUP Mindset Badir Workspace-->

      <section class="service">
        <div class="container">
          <div class="page-section text-center">
            <h2 class="page-section__title">SERVICES OFFER</h2>
           <!-- <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> -->
            <div class="row gutters-40">
              <div class="col-md-4">
                <div class="column">
                  <div class="card">
                    <i class="material-icons">local_atm</i>
                  <h4 class="service__title">Sponsors</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="column">
                  <div class="card">
                    <i class="material-icons">place</i>
                  <h4 class="service__title">Venues</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="column">
                  <div class="card">
                    <i class="material-icons">local_activity</i>
                  <h4 class="service__title">Services</h4>
                  </div>
                </div>
              </div>
            </div>
      </section>
  
      
      
      <div class="container">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>

                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/WP_vM301VZA?autoplay=0" frameborder="0" allowfullscreen="" id="video"  allowscriptaccess="always"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

 <div data-aos="fade-up">
      <section class="about" style="background-color :rgba(255, 145, 76, 0.8); margin-bottom: 5%; border-radius: 20px;">
        <div class="container">
          <div class="page-section">
            <div class="text-center">
              <h2 class="page-section__title">OUR LATEST LINKS</h2>
              <div class="row gutters-40">
                <div class="col-md-4">
                  <div class="column">
                    <div class="card2">
                    <h4 class="service__title" style="margin-bottom: 5%;">Event Name</h4>
                   <img src="assets/images/pageIcon.png">
                    <h4 class="service__title" style="margin-top: 5%;">Sponsor Name</h4>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="column">
                    <div class="card2">
                    <h4 class="service__title" style="margin-bottom: 5%;">Event Name</h4>
                   <img src="assets/images/pageIcon.png">
                    <h4 class="service__title" style="margin-top: 5%;">Sponsor Name</h4>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="column">
                    <div class="card2">
                    <h4 class="service__title" style="margin-bottom: 5%;">Event Name</h4>
                   <img src="assets/images/pageIcon.png">
                    <h4 class="service__title" style="margin-top: 5%;">Sponsor Name</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </section>
      </div>

      <!--
      <section class="video-section video-section--bg">
        <div class="container">
          <div class="page-section page-section--large text-center">
            <button class="video-section__icon" data-toggle="modal" data-target="#myModal"><img src="assets/images/video-icon.png" alt=""></button>
          </div>
        </div>
      </section>
                  
   
      <div class="container">
        <section class="price">
          <div class="page-section page-section--small text-center">
            <h2 class="page-section__title">OUR PRICING</h2>
            <p class="page-section__paragraph">We're building an awesome plans</p>
            <div class="price__panel-wrapper">
              <div class="row gutters-50">
                <div class="col-md-4">
                  <div class="panel text-center">
                    <div class="panel-heading">
                      <h4 class="price__title">Linker</h4>
                      <h1 class="price__ammount"><span class="price__ammount--number">No Payment Required</span></h1>
                    </div>
                    <div class="panel-body">
                      <h4 class="price_title"><b>Pre Event</b></h4>
                      <p>Overall commission 20%</p>
                      <p>Event proposal</p>
                      <p>Only one active event</p>
                      <p>No demographic</p>
                      <p>Marketing limited to website only</p>
                      <p>No sponsorship packages</p>
                      <p>Limited tags (only one)</p>
                      <p>Limited venue support</p>
                      <p>ULINK logo in the event with percentage (20%)</p>
                    </div>
                    <div>
                      <a class="panel__button" href="#">GET THIS PLAN</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="panel text-center">
                    <div class="panel-heading">
                      <h4 class="price__title">Pro Linker</h4>
                      <h1 class="price__ammount">&#36; <span class="price__ammount--number">249</span> &#47;Year</h1>
                    </div>
                    <div class="panel-body">
                      <h4 class="price_title"><b>Pre Event</b></h4>
                      <p>Overall commission 10%</p>
                      <p>Five active event</p>
                      <p>Limited demographic</p>
                      <p>Marketing limited to online marketing</p>
                      <p>Sponsorship packages</p>
                      <p>Limited tags (five tags)</p>
                      <p>Venue suggestions</p>
                      <p>ULINK logo in the event (lower overall commission 5%)</p>
                      <h4 class="price_title"><b>During Event</b></h4>
                      <p>Provide Services (Commission for each Service)</p>
                    </div>
                    <div>
                      <a class="panel__button" href="#">GET THIS PLAN</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="panel text-center">
                    <div class="panel-heading">
                      <h4 class="price__title">Expert Linker</h4>
                      <h1 class="price__ammount">&#36; <span class="price__ammount--number">459</span> &#47;Year</h1>
                    </div>
                    <div class="panel-body">
                      <h4 class="price_title"><b>Pre Event</b></h4>
                      <p>Overall commission 5%</p>
                      <p>Unlimited active event</p>
                      <p>Full demographic access</p>
                      <p>Full marketing access</p>
                      <p>Sponsorship packages</p>
                      <p>Unlimited tags</p>
                      <p>Venue suggestions & priority </p>
                      <p>ULINK logo in the event (lower overall commission 2.5%) </p>
                      <h4 class="price_title"><b>During Event</b></h4>
                      <p>Provide Services (Commission for each Service)</p>
                      <h4 class="price_title"><b>Post Event</b></h4>
                      <p>Analytics and statistical reports</p>
                    </div>
                    <div>
                      <a class="panel__button" href="#">GET THIS PLAN</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
                  -->
      
     <!-- <section class="overview overview--bg">
        <div class="container">
          <div class="page-section">
            <div class="overview__wrapper text-center">
              <ul>
                <li>
                  <h1 class="overview__number">550</h1>
                  <p class="overview__title">CUP OF COFFEE</p>
                </li>
                <li>
                  <h1 class="overview__number">800</h1>
                  <p class="overview__title">PROJECT DONE</p>
                </li>
                <li>
                  <h1 class="overview__number">400</h1>
                  <p class="overview__title">HAPPY CLIENT</p>
                </li>
                <li>
                  <h1 class="overview__number">3550</h1>
                  <p class="overview__title">AWARDS WIN</p>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </section> -->
    
      
    
  </div>  


  <div class="mt-5 pt-5 pb-5 footer" style="border-top-right-radius: 20px;border-top-left-radius: 20px">
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

  <script>
    window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
    $(document).ready(function() {

      var $videoSrc = $("#video").attr("src");

      $('#myModal').on('hide.bs.modal', function (e) {
        $("#video").attr('src',$videoSrc); 
      });
      



    }
    
    );
  </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
 <script src="aos.js"></script> 
  <script type="text/javascript">
    AOS.init(
      {
        Offset : 200 ,
      Duration : 1500,
    }
    );
  </script>
</body>
</html>





