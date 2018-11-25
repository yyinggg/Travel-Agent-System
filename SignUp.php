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
	height: auto;
	width: 960px;
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
	margin-right: auto;
	margin-left: auto;
	text-align: left;
	font-family: "Times New Roman", Times, serif;
	font-size: 14pt;
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
<center><h1>REGISTRATION</h1></center>
<p>&nbsp;&nbsp;&nbsp;	Please fill in your personal information below</p>

<center><form action="SignUp_success.php" method="POST">
  <table>
	<tr>
    <td><br></td>
    <td><br></td>
   </tr>
   <tr>
    <td>Name* :</td>
    <td><input type="text" name="name" size="80" required></td>
   </tr>
   <tr>
    <td><br></td>
    <td><br></td>
   </tr>
   <tr>
    <td>Contact Number* :</td>
    <td><input type="text" name="phno" size="80" required></td>
   </tr>
   <tr>
    <td><br></td>
    <td><br></td>
   </tr>
   <tr>
    <td>Email* :</td>
    <td><input type="email" name="email" size="80" required></td>
   </tr>
   <tr>
    <td><br></td>
    <td><br></td>
   </tr>
   <tr>
    <td>Username* :</td>
    <td><input type="text" name="username" size="80" required></td>
   </tr>
   <tr>
    <td><br></td>
    <td><br></td>
   </tr>
   <tr>
    <td>Password* :</td>
    <td><input type="password" name="password" size="80" required></td>
   </tr>
   <tr>
    <td><br></td>
    <td><br></td>
   </tr>
   <tr>
    <td>Security Question* :</td>
    <td>
     <select name="ques" required>
      <option selected hidden value="">--Select a Question--</option>
      <option value="movie">What is your favourite movie?</option>
      <option value="sport">What is your favourite sport?</option>
      <option value="school">What is your name of your primary school?</option>
      <option value="food">What is your favourite food?</option>
     </select>
    </td>
   </tr>
   <tr>
    <td><br></td>
    <td><br></td>
   </tr>
   <tr>
    <td>Answer* :</td>
    <td><input type="text" name="ans" size="80" required></td>
   </tr>
   <tr>
    <td><br></td>
    <td><br></td>
   </tr>
   <tr>
    <td></td>
	<td><center><input type="submit" value="Register" name="sumbit"></center></td>
   </tr>
  </table>
 </form></center>
<br>
</div>

<div id="footer"><img src="footer.jpg" width="960" height="50" /> </div>
</body>
</html>
