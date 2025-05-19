<?php

    $valid_username = "haresh";
    $valid_password = "12345";

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];  

    if ($valid_username == $username && $valid_password == $password) {
        echo "Login Successful";      
    } else {
        echo "Login Failed";    
    }

?>



