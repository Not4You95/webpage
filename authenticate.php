<?php

include('../config/config.php');
//session_start();


echo "Hello world!<br />";
echo $_POST;
echo "<br />";
foreach ($_POST as $missing) {

    echo "$missing<br />";
}
if(isset($_POST['username'], $_POST['password'])){

    echo "submit<br />";
    if(empty($_POST['username'])){
        exit('Please fill the username field!');
    }

    if(empty($_POST['password'])){
        exit('Please fill and password field!');
    }

    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('Could not connect to MySQL: ' .
    mysqli_connect_error());

    echo "database <br />";
    if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
        
        echo "------<br />";
        // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        // Store the result so we can check if the account exists in the database.
        $stmt->store_result();
    
    
        $stmt->close();
    }else{
        echo "no prep <br />";
    }


    echo 'The end!<br />';


}else{
    echo "No post!<br />";
}


?>