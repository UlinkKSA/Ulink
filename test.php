

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ULINK</title>
  <meta name="keywords" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
  <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
  
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/flat-icon/flaticon.css">
  <link rel="stylesheet" href="temp/styles/styles.css">
</head>
<body>
  <div class="main-wrapper">
    <header class="header header--bg" id="home-section">
      <div class="container">
        <nav class="navbar">
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
              <li><a href="#home-section">HOME</a></li>
              <li><a href="#">SERVICES</a></li>
              <li><a href="#">VENUES</a></li> 
              <li><a href="#">SPONSORS</a></li> 
              <?php
session_start();
if (empty($_SESSION['login_user'])) {
  echo"<li><a href='login.php'>LOGIN</a></li>";
  echo"<li><a href='redirection.html'>SIGN UP</a></li>";
}else {
  echo"<li><a href='logout.php'>LOGOUT</a></li>";
}

?>
            </ul>
          </div>
        </nav>
    </div>
    </header>
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





