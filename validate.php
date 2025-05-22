<?php
  
    session_start();

    $valid_username = "Haresh";
    $valid_password = "12345";

    $username = $_REQUEST['username'];
    // Put the name in the session variable
    $_SESSION['username'] = $username;
    $password = $_REQUEST['password'];  

    if ($valid_username == $username && $valid_password == $password) {
        $_SESSION['authenticated'] = 1;
        header('Location:/index.php') ; 
        exit();
    } else {
        if (!isset($_SESSION['failed_attempts'])){ 
   $_SESSION['failed_attempts'] = 1;
   } else {
     $_SESSION['failed_attempts']=$_SESSION['failed_attempts'] + 1;     
   } 
      //header('Location:/login.php');
      echo "This is unsuccessful login attempt number:  ".$_SESSION['failed_attempts']."<br>";      
      echo "<a href='/login.php'>Try Again</a>";
      
 }
   
?>



