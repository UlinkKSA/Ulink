<?php
error_reporting(E_ERROR);
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: reg/confirmsignout.php"); // Redirecting To Home Page
}
?>