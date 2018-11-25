<?php
session_start();

$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'tourism');


	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

			$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: admin_home.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		
	}
?>