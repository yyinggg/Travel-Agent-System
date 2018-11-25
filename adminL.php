<?php include('Server2.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
	body {
	background-image: url(b1.jpg);
	background-repeat: no-repeat;
	background-size: cover;
}
form, .content {
  width: 50%;
  margin: 0px auto;
  padding: 20px;
  border: 3px solid #000000;
  background: rgba(255,255,255,.8);
  border-radius: 0px 0px 10px 10px;
}
</style>
</head>
<body>
		<br><br><br>
		<div class="header">
  	<h2>Login</h2>
		</div>
		<form method="post" action="adminL.php">
  	<?php include('Error.php'); ?>
  	<div class="input-group">
  		<b><label>Username</label></b>
  		<input type="text" name="username" required>
  	</div>
  	<div class="input-group">
  		<b><label>Password</label></b>
  		<input type="password" name="password" required>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user"><b>Login</b></button><br>
  	</div>
  	<p>
  		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Not yet a member? <a href="adminR.php">Sign up</a><br><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Forget Password? <a href="forgotpass.php">Click Here</a><br><br>
  	</p>
  </form><br><br>
		
</body>
</html>