<?php
		$db = mysqli_connect('localhost','root','','tourism');
		require 'item.php';
			
		mysqli_query($db, 'INSERT INTO booking(`name`, `dateCreation`, `status`, `username`)
                    VALUES ("New Order", "'.date("Y-m-d").'", 0, "amuse")');
        $bookingid = mysqli_insert_id($db);
        
        $booking = unserialize(serialize($_SESSION['booking']));
        for($i=0; $i<count($booking); $i++){
		mysqli_query($db, 'INSERT INTO bookingdetail(`packageid`, `bookingid`, `price`, `quantity`)
                    VALUES ('.$booking[$i]->id.', '.$bookingid.', '.$booking[$i]->price.', '.$booking[$i]->quantity.')');
        }
        
        unset($_SESSION['booking']);
    ?>