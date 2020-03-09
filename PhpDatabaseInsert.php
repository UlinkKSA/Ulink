<?php


$errors = array(); 

$db = mysqli_connect('localhost', 'khalidAdmin', '', 'pPcLuyepp9q7mPpZ');

if (isset($_POST['reg_user'])) {
  $firstname = mysqli_real_escape_string($db, $_POST['fname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $cname = mysqli_real_escape_string($db, $_POST['cname']);
  $industry = mysqli_real_escape_string($db, $_POST['industry']);
  $TA = mysqli_real_escape_string($db, $_POST['TA']);
  $spt = mysqli_real_escape_string($db, $_POST['spt']);
  $message = mysqli_real_escape_string($db, $_POST['message']);

  if (count($errors) == 0) {
  	$query = "INSERT INTO sponsor (firstname, lastname, email ,phone , password , cname, industry, TA, spt, message) 
  			  VALUES('$firstname', '$lastname', '$email','$phone','$password','$cname', '$industry', '$TA','$spt','$message')";
    mysqli_query($db, $query); // Initializing Session
    header('Location: ../index.php');
					
  }
}
