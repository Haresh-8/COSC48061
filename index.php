<?php
session_start();
// Check if the user is authenticated
// If NOT, redirect to the login page using the header() function
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Hareshkumar Patel</title>
  </head>

  <body>

    <h1>Assignment 1</h1>

    <p>Welcome, <?=$_SESSION['username'] ?></p>
    
  
    

  </body>
</html>