<?php include('server.php') ?>
<?php include('bookingD.php') ?>
	
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AMUSE TRAVEL AGENCY</title>
<style type="text/css">
	body{
	background-image: url(b4.jpg);
	background-repeat: no-repeat;
	background-size: cover;
}
#title {
	background-color: #FF9;
	height: 90px;
	width: auto;
	font-size: 16px;
	color: #000;
	font-family: Georgia, "Times New Roman", Times, serif;
}
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
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
	text-decoration: none;
}
#wrapper #choose {
	background-color: #FF9;
	width: 960px;
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
	font-family: Tahoma, Geneva, sans-serif;
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
#wrapper #choose h {
	font-size: 18pt;
	font-weight: bold;
}
#wrapper #choose p {
	font-family: Tahoma, Geneva, sans-serif;
}
#wrapper #choose p strong {
	font-family: Tahoma, Geneva, sans-serif;
}
.input-group {
  margin: 20px 50px 20px 50px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 95%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  float: right;
  padding: 10px;
  font-size: 120%;
  font-family: Times New Roman;
  color: white;
  background: #000000;
  border: none;
  border-radius: 10px;
}
.error {
  width: 60%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
</style>
</head>

<body>
<div id="wrapper">
<table width="1467" border="0">
  <tr>
  
    <td width="500"><img src="HEADER1.jpg" width="500" height="100" /></td>
 
 
    <td width="957"><p><label for="textfield5">
       Hi, Welcome back !
        &nbsp; <a href="index.php" onClick="Logout()">(logout)</a>
        <script> 
		function Logout()
		{
		  alert("You have been successfully logged out!"); 
				return 'index.php';
		}
        </script><br />
            </label></p></td>

</table>
  
  <div id="nav">
    <table width="962" border="1">
      <tr>
        <td width="185"><a href="cust_Homepage.php">HOME</a></td>
        <td width="188"><a href="cust_travelpack.php">TRAVEL PACKAGES</a></td>
        <td width="182"><a href="cust_aboutus.php">ABOUT US</a></td>
        <td width="185"><a href="cust_contactus.php">CONTACT US</a></td>
        <td width="186"><a href="cust_feedback.php">FEEDBACK</a>
      </tr>
    </table>
  </div>
  <div id="choose">
<h1><center>Payment</center></h1>
<p>
	<center>Thank you for buying. You are allow to choose manual bank-in OR straight online bank-in to us.</center><br>
	<div style="margin: auto; width:880px; padding:5px; height:auto; border:5px solid #6666FF;">
        <h1 align="center"><font face="Comic Sans MS" color="Red">Manual Bank-In</font></h1>
        <h2><font face="Comic Sans MS">1. Bank in for your payment (within 3 days after checkout).<br>
  <strong>12345-123-123455
    <br>AMUSE TRAVEL AGENT
    <br>
    HONG LEONG BANK</strong></font></h2>
        <h2><font face="Comic Sans MS">2. Capture your resit after make payment and together with the booking details. 
		<br><br>Send through to our email. 
  <br><strong>Email :amusetravel@gmail.com</strong></font></h2>
    </div><br>
	
	<div style="margin: auto; width:880px; padding:5px; height:auto; border:5px solid #6666FF;">
        <h1 align="center"><font face="Comic Sans MS" color="Red">Online Bank-In</font></h1>
        <form method="post" action="online_payment.php">
			<?php include('Error.php'); ?>
			<div class="input-group">
  		<b><label>Bank Name :</label></b>
  		<SELECT name="bank">
				<OPTION> --Select--
        <OPTION> Hong Leong Bank
		<OPTION> CIMB Bank
		<OPTION> Public Bank
		<OPTION> Maybank Bank
		<OPTION> Bank Rakyat
		<OPTION> Bank Islam
      </SELECT>
  	</div>
  	<div class="input-group">
  		<b><label>Card Holder Name :</label></b>
  		<input type="text" name="holder">
		</div>
		<div class="input-group">
  		<b><label>Card No :</label></b>
  		<input type="text" name="card">
  	</div>
		<div class="input-group">
  		<b><label>Security Code/CVV No :</label></b>
  		<input type="text" name="sCode">
  	</div>
		<div class="input-group">
  		<b><label>Expired Date (mm/yyyy) :</label></b>
  		<input type="text" name="eDate">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="pay"><b>Pay</b></button><br><br>
  	</div>
		</form>
    </div>
  
<br></div>
  
    <div id="footer"><img src="footer.jpg" width="960" height="50" /></div></div>
</body>
</html>
