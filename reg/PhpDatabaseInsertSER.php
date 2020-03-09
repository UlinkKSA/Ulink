<?php

// initializing variables
$username = "";
$email    = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'qqxzw2w4uaar', 'Ulink_2020', 'U-LINK');
//$target = "images/".basename($_FILES['image']['name']);

if (isset($_POST['reg_user'])) {
  $firstname = mysqli_real_escape_string($db, $_POST['fname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $password = mysqli_real_escape_string($db, base64_encode($_POST['password']));
  $cname = mysqli_real_escape_string($db, $_POST['cname']);
  $stype = mysqli_real_escape_string($db, $_POST['stype']);
  $bio = mysqli_real_escape_string($db, $_POST['bio']);

  if (count($errors) == 0) {
  	$query = "INSERT INTO users (userType,email, password) 
  			  VALUES('Service Provider','$email','$password')";
    mysqli_query($db, $query); // Initializing Session
   }
   if(count($errors) == 0){
    $query = mysqli_query($db,"select * from users WHERE email = '$email'");
    $result = mysqli_fetch_assoc($query);
    $userID = $result['userID'];
    $query = "INSERT INTO servicep (userID , firstname, lastname,phone , cname, stype , bio) 
    VALUES('$userID','$firstname','$lastname','$phone','$cname', '$stype', '$bio')";
    mysqli_query($db, $query);
    header('Location: ../index.php');
   }
					
  }

