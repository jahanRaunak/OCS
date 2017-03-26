<?php
session_start(); //Start the current session
unset($_SESSION['name']); //Destroy it! So we are logged out now
header("location:login2.php?msg=Successfully Logged out"); // Move back to login.php with a logout message
?>