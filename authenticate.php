<?php
include('../config/config.php');
//session_start();


echo 'Hello world!/>';

if(isset($_POST['submit'])){

    echo 'submit/>';
    if(empty($_POST['username'])){
        exit('Please fill the username field!');
    }

    if(empty($_POST['username'])){
        exit('Please fill and password field!');
    }

    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('Could not connect to MySQL: ' .
    mysqli_connect_error());

    if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
        // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        // Store the result so we can check if the account exists in the database.
        $stmt->store_result();
    
    
        $stmt->close();
    }


    echo 'The end!';


}


?>