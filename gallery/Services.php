<?php
session_start();  
if (empty($_SESSION['login_user'])) {
  header("location: ../index.php"); }
?>
<!doctype html>
<html lang="en">
<head>
    
    <!--===============================================================================================-->
    <link rel="icon" type="image/svg" href="assets/images/iconheader.svg"/>
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="../reg/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="../reg/vendor/animate/animate.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="../reg/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="../reg/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="../reg/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="../reg/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="../reg/css/util.css">
      <link rel="stylesheet" type="text/css" href="../reg/css/main.css">
      <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets/flat-icon/flaticon.css">
      <link rel="stylesheet" href="../temp/styles/styles.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ULINK</title>
  <meta name="keywords" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
  <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
  
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/flat-icon/flaticon.css">
  <link rel="stylesheet" href="../temp/styles/styles.css">
  <link rel="stylesheet" href="animation.css">
  <style> 
  .footer{
  background:  rgba(255, 145, 76, 0.8);
  color:white;
}
  
  a{
    color:white;
  }
  
/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}
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
  text-align: center;
  background-color: #f1f1f1;
  margin-bottom: 30px;
  margin-top: 30px;
  background-color: rgba(255, 145, 76, 0.8);
  transition: 0.3s;
  -webkit-transform: scale(1.0);
  -ms-transform: scale(1.0);
  transform: scale(1.0);

}

.card:hover {
  background-color: white;
  transition: 0.3s;
  -webkit-transform: scale(1.2);
  -ms-transform: scale(1.2);
  transform: scale(1.2);
}
  </style>
</head>
<body>
<?php
session_start();
?>
<nav class="navbar" style="background-color: rgba(255, 145, 76, 0.8);border-bottom-right-radius: 20px;border-bottom-left-radius: 20px">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span> 
    </button>
    <a class="navbar-brand" href="#"><img src="assets/images/ULINK white logo png.png" width="110" height="25"></a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav pull-right">
      <li><a href="index.php" >HOME</a></li>
      <?php
if (empty($_SESSION['login_user'])) {

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
echo"<li><a href='gallery/Services.php'>SERVICES</a></li>
<li><a href='gallery/Venues.php'>VENUES</a></li> 
<li><a href='gallery/SponsorG.php'>SPONSORS</a></li>
<li><a href='logout.php'>LOGOUT</a></li>";
}
?>
    </ul>
  </div>
</nav>

  <div class="main-wrapper">
    <div class="container">
    <h2  style="text-align: center; color: white;">Sponsors</h2>
    <div class="grow">
      <?php
          //echo $username;
          $servername="localhost";
          $dusername="root";
          $dpassword="";
          $dbname="ulink";
          // Establishing Connection with Server by passing server_name, user_id and password as a parameter
          $connection=mysqli_connect($servername,$dusername,$dpassword,$dbname);
          // SQL query to fetch information of registerd users and finds user match.
          $query = mysqli_query($connection,"select * from serviceP");
          $rows = mysqli_num_rows($query);
          while ($row = mysqli_fetch_assoc($query)) {
            $cname = $row["cname"];
            $ctype = $row["stype"];
            echo '
              <div class="column">
                <div class="card">
                  <h3>'.$cname.'</h3>
                  <p><img src="../assets/images/ULINK white logo png.png" width="110" height="25"></p>
                  <p>'.$ctype.'</p>
                </div>
              </div>';
         }
          mysqli_close($connection); // Closing Connection
    
      ?>
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
</body>
</html>





