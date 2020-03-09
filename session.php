<?php
error_reporting(E_ERROR);
$connection = mysqli_connect('localhost:3306', 'khalidAdmin', 'pPcLuyepp9q7mPpZ', 'U-LINK');
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
?>