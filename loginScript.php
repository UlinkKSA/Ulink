		<?php 
		error_reporting(E_ERROR);
		session_start(); // Starting Session
		$error=''; // Variable To Store Error Message
		if (isset($_POST['login_user'])) {
			if (empty($_POST['Email']) || empty($_POST['Password'])) {
				$error = "Username or Password is invalid";
			}	
			else
			{
				// Define $username and $password
				$username=$_POST['Email'];
				$password=base64_encode($_POST['Password']);
				//echo $username;
				$servername="localhost";
				$dusername="qqxzw2w4uaar";
				$dpassword="Ulink_2020";
				$dbname="U-LINK";
				// Establishing Connection with Server by passing server_name, user_id and password as a parameter
				$connection=mysqli_connect($servername,$dusername,$dpassword,$dbname);
				// SQL query to fetch information of registerd users and finds user match.
				$query = mysqli_query($connection,"select * from users WHERE email='$username' AND password='$password'");
				$rows = mysqli_num_rows($query);
				if ($rows == 1) {
					$_SESSION['login_user']=$username; // Initializing Session
					header("location: reg/confirmlog.php"); // Redirecting To Other Page
				} else {

					$error = "Username or Password is invalid";
					echo "<script type='text/javascript'>alert('$error');</script>";
				}
				mysqli_close($connection); // Closing Connection
			}
		}
		?>