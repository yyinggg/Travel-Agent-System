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
	height: 100px;
	width: 960px;
	font-size: 16px;
	color: #000;
	font-family: "Times New Roman", Times, serif;
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
    <table width="960" border="1">
      <tr>
		<td width="185"><a href="cust_Homepage.php">HOME</a></td>
        <td width="188"><a href="cust_travelpack.php">TRAVEL PACKAGES</a></td>
        <td width="182"><a href="cust_aboutus.php">ABOUT US</a></td>
        <td width="185"><a href="cust_contactus.php">CONTACT US</a></td>
        <td width="186"><a href="cust_feedback.php">FEEDBACK</a>
      </tr>
    </table>
  </div>
  <div id="flash"> <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="960" height="250">
      <param name="movie" value="Originals/Untitled-2.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="15.0.0.0" />
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="Originals/Untitled-2.swf" width="960" height="250">
        <!--<![endif]-->
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />
        <param name="swfversion" value="15.0.0.0" />
        <param name="expressinstall" value="Scripts/expressInstall.swf" />
        <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
        <div>
          <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
    </object></div>
  <div id="header">RECOMMEND COUNTRY</div>
  <div id="choose">
  <a href="cust_pack1.php">
  <img src="img/1608_special_TOTO_main.jpg" width="1000" height="600" />
  </a>
  <a href="cust_pack2.php">
  <img src="img/KoreaLanguages.jpeg" width="3200" height="2400" />
  </a>
  <a href="cust_pack3.php">
  <img src="img/hong-kong-nightlife.jpg.jpg" width="1600" height="900" />
  </a>
  <a href="cust_pack4.php">
  <img src="img/KL_BG2.jpg" width="1440" height="720" />
  </a> 
  </div>
  
    <div id="footer"><img src="footer.jpg" width="960" height="50" /> </div>
</div>
</body>
</html>
