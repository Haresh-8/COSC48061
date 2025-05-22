<?php
session_start();
// Check if the user is authenticated
// If NOT, redirect to the login page using the header() function
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== 1) {
header("Location: /login.php");
exit();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Hareshkumar Patel</title>
  </head>

  <body>

    <h1>Assignment 1</h1>

    <p>Welcome, <?=$_SESSION['username'] ?></p>
    <p>Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</p>
    <p>Today's date is: <?= date("l, F j, Y") ?></p>
    
  
  </body>

  <footer> 
    <p><a href="/logout.php">Click here to LogOut </a></p>
  </footer>
</html>