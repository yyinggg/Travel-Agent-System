<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AMUSE TRAVEL AGENCY</title>
<style type="text/css">
	body {
	background-image: url(b3.jpg);
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
</style>
</head>

<body>
<div id="wrapper">
<table width="1467" border="0">
  <tr>
  
    <td width="500"><img src="HEADER1.jpg" width="500" height="100" /></td>
 
 
    <td width="957"><p><label for="textfield5">
       Hi, Welcome back !
        &nbsp; <a href="adminL.php" onClick="Logout()">(logout)</a>
        <script> 
		function Logout()
		{
		  alert("You have been successfully logged out!"); 
								return 'adminL.php';
		}
        </script><br />
            </label></p></td>

</table>



      
  <div id="nav">
    <table width="962" border="1">
      <tr>
         <td width="185"><a href="admin_home.php">HOME</a></td>
        <td width="185"><a href="admin_addpack.php">MANAGE PACKAGE</a></td>
        <td width="185"><a href="admin_customerdetail.php">CUSTOMER DETAILS</a></td>
        <td width="364"><a href="admin_feebacklist.php">FEEDBACK</a></td>
      </tr>
    </table>
  </div>
  <div id="choose">
  <td height="202" colspan="5" align="center" valign="top" bordercolor="#000000" bgcolor="#e6ffff">
    <p><center><br>
      <button class="btn" type="submit" name="sumbit">
      <a href="admin_viewpack.php"><b>View Package</b></a>
      </button>&nbsp;&nbsp;&nbsp;&nbsp;
      <button class="btn" type="submit" name="sumbit">
      <a href="admin_addpack.php"><b>Add Package</b></a>
      </button>&nbsp;&nbsp;&nbsp;&nbsp;
      <button class="btn" type="submit" name="sumbit">
      <a href="admin_manageEdit.php"><b>Edit Package</b></a>
      </button>&nbsp;&nbsp;&nbsp;&nbsp;
      <button class="btn" type="submit" name="sumbit">
      <a href="admin_deletepack.php"><b>Delete Package</b></a>
      </button>
      </center></p>
    <h1><center><font size=+3 face="Comic Sans MS"font><strong>Delete Successfully !</strong></font></center></h1>
	  <p>
        <?php
				
		$Nono = $_REQUEST['id'];
		
		$db = mysqli_connect('localhost','root','','tourism');
  		
		$SQLcommand = "DELETE FROM package WHERE `id`=".$Nono;
		
		$result = mysqli_query($db, $SQLcommand);

			mysqli_close($db);

      ?>
	    
      </p></td>
  </tr>
</table>
<font color="#FFFFFF"></font><br>
  </div>
  
    <div id="footer"><img src="footer.jpg" width="960" height="50" /></div>
</div>
</body>
</html>
