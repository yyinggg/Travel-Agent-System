<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>AMUSE TRAVEL AGENCY</title>

<style type="text/css">
	body{
	background-image: url(b4.jpg);
	background-repeat: no-repeat;
	background-size: cover;
}
#header {
	background-color: #FFF;
	width: 580px;
	height: 100px;
	text-align: center;
	vertical-align: middle;
	margin-right: auto;
	margin-left: auto;
}
#nav table tr td a:hover {
	color: #FFF;
	background-color: #66F;
	font-size: 1.3em;
	margin: auto;
	vertical-align: middle;
}
#heading1 {
}
#wrapper {
	width: 960px;
	margin-right: auto;
	margin-left: auto;
}
#heading1 {
	height: 100px;
	width: 960px;
	margin: auto;
	background-color: #CF9;
	border-top-color: #000;
	border-right-color: #000;
	border-bottom-color: #000;
	border-left-color: #000;
	font-weight: bold;
}
#footer {
	margin-right: auto;
	margin-left: auto;
}
#wrapp {
}
#heading1 {
	width: 960px;
	text-align: center;
	font-family: "Times New Roman", Times, serif;
	font-size: 20pt;
	padding-top: 50px;
}
#nav {
	height: 50px;
	width: 960px;
	background-color: #FC9;
	font-family: Verdana, Geneva, sans-serif;
	font-weight: bold;
	font-size: 1.15em;
	text-align: center;
	vertical-align: middle;
	margin-top: auto;
}
#nav table tr td a {
}
#nav table {
	text-align: center;
}
#heading1 label p1 {
	font-family: "Times New Roman", Times, serif;
}
#heading1 table {
	text-align: justify;
}
#footer {
	margin-right: auto;
	margin-left: auto;
	width: 960px;
}
#heading1 p2 {
	font-size: 14pt;
	font-style: italic;
}
#heading1 p3 {
	font-size: 14pt;
	font-style: italic;
}
#heading1 h1 {
	color: #C00;
	font-style: italic;
}
#wrapper #header {
	width: 960px;
	margin-right: auto;
	margin-left: auto;
}
</style>

</head>

<body>
<div id="wrapper">
  <div id="header"><img src="Originals/HEADER.jpg" width="960" height="100" /></div>
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
</div>

<div id="heading1">

<?php

$name = $_POST['name'];
$phno = $_POST['phno'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$ques = $_POST['ques'];
$ans = $_POST['ans'];

if (!empty($name) || !empty($phno) || !empty($email) || !empty($username) || !empty($password) || !empty($ques) || !empty($ans)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "tourism";
		
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
		else {
     $SELECT = "SELECT * FROM userdetails WHERE email= ? OR username= ? LIMIT 1";
     $INSERT = "INSERT Into userdetails (name, phno, email, username, password, ques, ans) values(?, ?, ?, ?, ?, ?, ?)";
     
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssssss", $name, $phno, $email, $username, $password, $ques, $ans);
      $stmt->execute();
      header('location: index.php');
     } else {
      echo "Someone already register using this email !";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required !";
 die();
}
?>

</div>

<div id="footer"><img src="footer.jpg" width="960" height="50" /> </div>
</body>
</html>


