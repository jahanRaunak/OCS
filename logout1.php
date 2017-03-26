<?php
session_start(); //Start the current session
unset($_SESSION['admin']);//Destroy it! So we are logged out now
header("location:admin_login.php?msg=Successfully Logged out"); // Move back to login.php with a logout message
?>