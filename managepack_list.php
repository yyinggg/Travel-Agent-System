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
	text-decoration: none;
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
    <table width="962" border="1">
      <tr>
        <td width="185"><a href="index.php">HOME</a></td>
        <td width="185"><a href="">MANAGE PACKAGE</a></td>
        <td width="185"><a href="">CUSTOMER DETAILS</a></td>
        <td width="364"><a href="">FEEDBACK</a></td>
      </tr>
    </table>
  </div>
  <div id="choose">
  <td height="202" colspan="5" align="center" valign="top" bordercolor="#000000" bgcolor="#e6ffff">
    <br>
		<button class="btn" type="submit" name="sumbit"><a href="adminV.php"><b>View Package</b></a></button>&nbsp;&nbsp;&nbsp;&nbsp;
		<button class="btn" type="submit" name="sumbit"><a href="adminA.php"><b>Add Package</b></a></button>&nbsp;&nbsp;&nbsp;&nbsp;
		<button class="btn" type="submit" name="sumbit"><a href="adminE.php"><b>Edit Package</b></a></button>&nbsp;&nbsp;&nbsp;&nbsp;
		<button class="btn" type="submit" name="sumbit"><a href="adminD.php"><b>Delete Package</b></a></button>
	
	<h1><font size=+3 face="Comic Sans MS"font><strong>Package List</strong></font>	</h1>
	<table border="10" cellpadding="10" width="85%">
	  <?php
            
			$db = mysqli_connect('localhost','root','','tourism');
  			
			$SQLcommand = "SELECT * FROM package";
		  
			$result = mysqli_query($db, $SQLcommand);
			
			print "<td>No.</td>";
			print "<td>Country</td>";
			print "<td>Duration</td>";
			print "<td>Title</td>";
			print "<td>Price</td>";
			print "</tr>";
		  
			  while($row = mysqli_fetch_array($result))
			  {
				  print "<td> $row[No] </td>";
				  print "<td> $row[country] </td>";
				  print "<td> $row[duration] </td>";
				  print "<td> $row[title] </td>";
				  print "<td> $row[price] </td>";
				  
				  print "<td><a href=adminD_P.php?id=".$row['No'].";>[Delete]</a></td>";
				  
				print "</tr>";			  
			  }
		  print "</table>";
		  mysqli_close($db);
		?>
	    
      </p></td>
  </tr>
</table>
<font color="#FFFFFF"></font> 
</div>
  
    <div id="footer"><img src="footer.jpg" width="960" height="50" /> </div>
</div>
</body>
</html>
