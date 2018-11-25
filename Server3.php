<?php

if (isset($_POST['sumbit'])) {
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
    } else {
     $SELECT = "SELECT email From admin Where email = ? Limit 1";
     $INSERT = "INSERT Into admin (name, phno, email, username, password, ques, ans) values(?, ?, ?, ?, ?, ?, ?)";
     
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
      header('location: adminL.php');
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
}

?>