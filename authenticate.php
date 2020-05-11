<?php
include('../config/config.php');
session_start();


echo 'Hello world!';

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if (!isset($_POST['username'], $_POST['password'])) {
    // Could not get the data that should have been sent.
    exit('Please fill both the username and password fields!');
}


// Try and connect using the info above.
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('Could not connect to MySQL: ' .
    mysqli_connect_error());



?>
