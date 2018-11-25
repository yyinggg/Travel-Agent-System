<html>
<head>
  <title>Register</title>
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
	<br><br>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="adminR_P.php">
      <div class="input-group">
  	  <b><label>Name</label></b>
  	  <input type="text" name="name" required>
  	</div>
    <div class="input-group">
  	  <b><label>Contact Number</label></b>
  	  <input type="text" name="phno" required>
  	</div>
    <div class="input-group">
  	  <b><label>Email</label></b>
  	  <input type="email" name="email" required>
  	</div>
  	<div class="input-group">
  	  <b><label>Username</label></b>
  	  <input type="text" name="username" required>
  	</div>
  	<div class="input-group">
  	  <b><label>Password</label></b>
  	  <input type="password" name="password" required>
  	</div>
    <div class="input-group">
  	  <b><label>Security Question</label></b>
      <select name="ques" required>
      <option selected hidden value="">--Select a Question--</option>
      <option value="movie">What is your favourite movie?</option>
      <option value="sport">What is your favourite sport?</option>
      <option value="school">What is your name of your primary school?</option>
      <option value="food">What is your favourite food?</option>
     </select>
  	</div>
    <div class="input-group">
  	  <b><label>Your Answer</label></b>
  	  <input type="text" name="ans" required>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="sumbit"><b>Register</b></button><br>
  	</div>
  	<p>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  		Already a member? <a href="adminL.php">Sign in</a><br><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Forgot Password? <a href="forgotpass.php">Click Here</a><br><br>
  	</p>
  </form><br><br>
</body>
</html>