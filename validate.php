<?php
  
    session_start();

    $valid_username = "Haresh";
    $valid_password = "12345";

    $username = $_REQUEST['username'];
    // Put the name in the session variable
    $_SESSION['username'] = $username;
    $password = $_REQUEST['password'];  

    if ($valid_username == $username && $valid_password == $password) {
        header('Location:/') ;     
    } else {
        if (!isset($_SESSION['failed_attempts'])){ 
   $_SESSION['failed_attempts'] = 1;
   } else {
     $_SESSION['failed_attempts']=$_SESSION['failed_attempts'] + 1;     
   }   
      echo "This is unsuccessful login attempt number: ".$_SESSION['failed_attempts'];
      
 }
   
?>



