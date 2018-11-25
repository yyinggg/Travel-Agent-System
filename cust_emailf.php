<?php

    function email_exists($email, $db){
        $row = mysqli_query($db, "SELECT id FROM userdetails WHERE email='$email'");
        {
        if(mysqli_num_rows($row) == 1){
            return true;
        }
        else{
        return false;
        }
        }
    }

?>