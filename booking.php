<!DOCTYPE html>
	<?php
            session_start();
			$db = mysqli_connect('localhost','root','','tourism');
  			require 'item.php';
			
			if(isset($_GET['id']) && !isset($_POST['update'])){
				$SQLcommand = "SELECT * FROM package where id=".$_GET['id'];
			$result = mysqli_query($db, $SQLcommand);
			$package = mysqli_fetch_object($result);
				$item = new Item();
				$item->id = $package->id;
				$item->country = $package->country;
				$item->duration = $package->duration;
				$item->title = $package->title;
				$item->price = $package->price;
				$item->date = $package->date;
				$item->quantity = 1;
				$index = -1;
				if(isset($_SESSION['booking'])){
				$booking = unserialize(serialize($_SESSION['booking']));
				for($i=0; $i<count($booking); $i++)
					if($booking[$i]->id == $_GET['id']){
						$index = $i;
						break;
					}
				}
				if($index==-1){
					$_SESSION['booking'][] = $item;
				}
				else{
					$booking[$index]->quantity++;
					$_SESSION['booking']= $booking;
					}
				
			}
			if(isset($_GET['index']) && !isset($_POST['update'])){
				$booking = unserialize(serialize($_SESSION['booking']));
				unset($booking[$_GET['index']]);
				$booking = array_values($booking);
				$_SESSION['booking'] = $booking;
			}
			 if(isset($_POST['update'])){
				$arrQuantity = $_POST['quantity'];
				
				$valid = 1;
				for($i=0; $i<count($arrQuantity); $i++)
					if(!is_numeric($arrQuantity[$i]) || $arrQuantity[$i] < 1){
						$valid = 0;
						break;
					}
				if($valid==1){
				$booking = unserialize(serialize($_SESSION['booking']));
				for($i=0; $i<count($booking); $i++){
					$booking[$i]->quantity = $arrQuantity[$i];
				}
				$_SESSION['booking'] = $booking;
			 }else{
				$error = 'Quantity is InValid';
			 }
		 }
			?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JAPAN | AMUSE TRAVEL AGENCY</title>
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
	font-size: 12px;
	font-family: Tahoma, Geneva, sans-serif;
}
#wrapper #intro1 p1 {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
#wrapper #intro1 {
	font-family: Verdana, Geneva, sans-serif;
}
#selection {
	background-color: #FF9;
	width: 960px;
	border-bottom-style: dotted;
	border-bottom-width: 0;
	border-top-width: 0;
	border-right-width: 0;
	border-left-width: 0;
	border-top-style: dotted;
	border-right-style: none;
	border-left-style: none;
	border-top-color: #000;
	border-bottom-color: #000;
}
#wrapper #selection table tr td img {
	margin-right: 30px;
	margin-left: 30px;
	border-top-width: 3px;
	border-right-width: 3px;
	border-bottom-width: 3px;
	border-left-width: 3px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	height: 200px;
	width: 300px;
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
}
#wrapper #intro1 h1 {
	font-family: Verdana, Geneva, sans-serif;
}
#wrapper #selection table {
	text-align: left;
}
#pack1 {
	background-color: #FF9;
	width: 960px;
	margin-right: auto;
	margin-left: auto;
	font-size: 15px;
}
#wrapper #pack1 table tr td #form {
	font-size: 10pt;
}
#wrapper #pack1 table tr td #form #jumpMenu {
	font-size: 12pt;
}
#wrapper #pack1 table tr td #form label {
	font-size: 12pt;
	font-weight: bold;
}
#wrapper #pack1 table tr td #jumpMenu {
	font-weight: bold;
}
#wrapper #pack1 table tr td #jumpMenu {
	font-size: 12px;
}
#wrapper #pack1 table tr td label {
	font-weight: bold;
	font-size: 12pt;
}
#wrapper #pack1 p strong {
	font-size: 14px;
	font-weight: bold;
	color: #000;
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
    <table width="960" border="0">
<tr>
        <td width="185"><a href="cust_Homepage.php">HOME</a></td>
        <td width="188"><a href="cust_travelpack.php">TRAVEL PACKAGES</a></td>
        <td width="182"><a href="cust_aboutus.php">ABOUT US</a></td>
        <td width="185"><a href="cust_contactus.php">CONTACT US</a></td>
        <td width="186"><a href="cust_feedback.php">FEEDBACK</a>
      </tr>
    </table>
  </div>


  <div id="pack1">

    <table width="960" border="0">
  <tr>
    <h1><font size=+4 face="Comic Sans MS"><strong><center>Booking List</center></strong></font></h1>
	  <p>
			&nbsp;&nbsp;<?php echo isset($error) ? $error : ''; ?>
			<form method="post">
			<table border="10" cellpadding="10" width="900" align="center">
			<tr>
			<td>No.</td>
			<td>Country</td>
			<td>Duration</td>
			<td>Title</td>
			<td>Price</td>
            <td>Date</td>
			<td>Quantity <input type="image" src="Originals/save.png" name="update"></td>
				<input type="hidden" name="update">
			<td>Sub Total</td>
			</tr>
		  
		<?php
		$booking = unserialize(serialize($_SESSION['booking']));
		$s = 0;
		$index = 0;
		for($i=0; $i<count($booking); $i++){
			$s += $booking[$i]->price * $booking[$i]->quantity;
		?>
		<tr>
			<td><?php echo $booking[$i]->id; ?></td>
			<td><?php echo $booking[$i]->country; ?></td>
			<td><?php echo $booking[$i]->duration; ?></td>
			<td><?php echo $booking[$i]->title; ?></td>
			<td><?php echo $booking[$i]->price; ?></td>
			<td><?php echo $booking[$i]->date; ?></td>
			<td><input type="text" value="<?php echo $booking[$i]->quantity; ?>" style="width: 50px;" name="quantity[]"></td>
			<td><?php echo $booking[$i]->price * $booking[$i]->quantity; ?></td>
			<td><a href="booking.php?index=<?php echo $index; ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
		</tr>
		<?php 
			$index++;			
		} ?>
		<td colspan="7" align="right">Sum</td>
		<td align="left"><?php echo $s; ?></td>
		<input type="hidden" name="sum" value="<?php echo $s; ?>">
</table></form></table>
<br><br>
<h1>&nbsp;&nbsp;</h1>
<h1><a href="package_L.php">Back</a> | <a href="online_payment.php">Checkout</a></h1>
  
<br>
<br>

  </div>
    <div id="footer"><img src="footer.jpg" width="960" height="50" /> </div>

</body>
</html>

