<?php
session_start();

$bank = "";
$holder    = "";
$card = "";
$sCode    = "";
$eDate = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'tourism');
	
	if (isset($_POST['pay'])) {
		$bank = mysqli_real_escape_string($db, $_POST['bank']);
		$holder = mysqli_real_escape_string($db, $_POST['holder']);
		$card = mysqli_real_escape_string($db, $_POST['card']);
		$sCode = mysqli_real_escape_string($db, $_POST['sCode']);
		$eDate = mysqli_real_escape_string($db, $_POST['eDate']);

		if (empty($bank)) {
			array_push($errors, "Bank Name is required");
		}
		if (empty($holder)) {
			array_push($errors, "Card Holder Name is required");
		}
		if (empty($card)) {
			array_push($errors, "Card No is required");
		}
		if (empty($sCode)) {
			array_push($errors, "Security Code/CVV No is required");
		}
		if (empty($eDate)) {
			array_push($errors, "Expired Date is required");
		}

		if (count($errors) == 0) {
			$query = "SELECT * FROM payment WHERE bank='$bank' AND holder='$holder' AND card='$card' AND sCode='$sCode' AND eDate='$eDate'";
				$results = mysqli_query($db, $query);
                
                if (mysqli_num_rows($results) == 1) {
				echo "<script type='text/javascript'>alert('Transaction Successfully ! A receipt has been sent to your email !')</script>";
			}else {
				array_push($errors, "Error !");
			}
        }
	}
?>