<?php include('server5.php') ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback | AMUSE TRAVEL AGENCY</title>
<style type="text/css">
	body{
	background-image: url(b4.jpg);
	background-repeat: no-repeat;
	background-size: cover;
}
#title {
	background-color: #FF9;
	height: 100px;
	width: 960px;
	font-size: 16px;
	color: #000;
	font-family: "Times New Roman", Times, serif;
}
#intro1 {
	background-color: #FFC;
	width: 960px;
	margin-right: auto;
	margin-left: auto;
	font-family: "Times New Roman", Times, serif;
}
#intro1  img {
	height: 200px;
	width: 300px;
	margin-right: 20px;
	margin-left: 20px;
	border: 3px solid #000;
	font-family: Tahoma, Geneva, sans-serif;
	padding-top: 0px;
	padding-right: 10px;
	padding-bottom: 0px;
	padding-left: 10px;
}
#wrapper #intro1 {
	width: 960px;
	padding: 0px;
}
#wrapper #intro1 {
}
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
	text-align: left;
}
#nav {
	background-color: #FC6;
	height: 50px;
	width: 960px;
}
#wrapper {
	width: 960px;
	margin-right: auto;
	margin-left: auto;
}
#nav {
	background-color: #CCF;
	width: 960px;
}
#heading1 {
	background-color: #FFF;
	background-image: none;
	height: 500px;
	width: 960px;
}
#head1 {
	height: 100px;
	width: 960px;
	background-color: #FFC;
}
body p {
}
body p {
}
#nav {
	background-color: #FC9;
	height: 50px;
	width: 960px;
	margin-top: auto;
}
#main {
	background-color: #FF9;
	width: 960px;
	height: 50px;
}
#flash {
	height: 250px;
	width: 960px;
	background-color: #FFF;
}
#nav table tr td {
	text-align: center;
	vertical-align: middle;
	height: 32px;
	width: 182px;
	border-top-color: #000;
	border-right-color: #000;
	border-bottom-color: #000;
	border-left-color: #000;
}
#nav table tr td {
	font-weight: bold;
}
#nav table tr td a {
	font-size: 1.15em;
}
#nav table tr td a:hover {
	font-size: 1.3em;
	color: #FFF;
	background-color: #66F;
}
#wrapper #choose {
	background-color: #FF9;
	width: 960px;
	height: 500px;
}
#choose img {
	height: 200px;
	width: 300px;
	margin-right: 70px;
	margin-left: 70px;
	margin-bottom: 30px;
	border: 2px solid #000;
}
#wrapper #header {
	height: 40px;
	width: 960px;
	background-color: #FF9;
	font-family: Verdana, Geneva, sans-serif;
	font-style: normal;
	font-weight: bolder;
	text-transform: uppercase;
	color: #03C;
	vertical-align: middle;
	text-align: center;
	font-size: 24px;
	margin-bottom: 0px;
}
body p {
	width: 960px;
	margin-right: auto;
	margin-left: auto;
}
#wrapper #intro1 p1 {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
#wrapper #intro1 {
	font-family: Verdana, Geneva, sans-serif;
}
#wrapper #intro1 {
	font-family: "Comic Sans MS", cursive;
	text-align: justify;
}
#wrapper #intro1 p1 {
	font-family: "Comic Sans MS", cursive;
}
#wrapper #intro1 {
	text-align: left;
}
#wrapper #intro1 p1 {
	text-align: justify;
}#content {
	background-color: #FF9;
	width: 960px;
}

</style>
</head>

<body background="b.jpg">
<div id="wrapper">
<form method="post" action="index.php">
<table width="1467" border="0">
  <tr>
  
    <td width="500"><img src="HEADER1.jpg" width="500" height="100" /> 
	
    <td width="957"><p>Username :
      <input name="username" type="text" id="text" size="20" maxlength="50" />
    </p>
      <p>Password :
        <input name="password" type="password" size="20" maxlength="16" />
        <button type="submit" name="login"><b>Login</b></button>
      </p>
       <p><a href="cust_forgotpass.php">Forget Password</a>&nbsp;&nbsp;<a href="SignUp.php">Do not have account?</a></p></td></tr>
	
</table></form>

  <div id="nav">
    <table width="960" border="1">
      <tr>
        <td width="185"><a href="index.php">HOME</a></td>
        <td width="188"><a href="betravelpack.php">TRAVEL PACKAGES</a></td>
        <td width="182"><a href="aboutus.php">ABOUT US</a></td>
        <td width="185"><a href="contactus.php">CONTACT US</a></td>
        <td width="186"><a href="b4feedback.php">FEEDBACK</a></td>
      </tr>
    </table>
  </div>
  
 <div id="content">
  <h1>Feedback</h1>
  <center><form method="post" action="cust_feedback.php">
	<h2><b><label>Title :</label></b></h2>
	<input type="text" name="title" size="120"><br><br>
	<h2><b><label>Feedback :</label></b></h2>
	<textarea name="description" cols="109" rows="15">
	Enter some text...
	</textarea>
	<br>
	<br><input name="submit" type="submit" id="submit" value="Submit">

</form>
</center>
<br></div>
 
    <div id="footer"><img src="footer.jpg" width="960" height="50" /> </div>
</div>

<?php
		if(isset($_POST["submit"]))
			{
				$title= $_POST['title'];
				$description= $_POST['description'];
				
				$db = mysqli_connect('localhost','root','','tourism');
  			
				$SQLcommand = "INSERT INTO feedback(`title`, `description`)
											VALUES ('$title','$description')";
										
				$result = mysqli_query($db, $SQLcommand);
			
				mysqli_close($db);
				
				echo "<script type='text/javascript'>alert('Sent Successfully !')</script>";
			}
?>

</body>
</html>
