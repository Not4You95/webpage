<?php
include('../config/config.php');
session_start();


echo 'Hello world!';

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}

echo 'Post \n';
echo'';
echo $_POST['username'];
echo'';
echo $_POST['password'];

// Try and connect using the info above.
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('Could not connect to MySQL: ' .
    mysqli_connect_error());

echo'';
echo 'Database \n';
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
echo'';
echo $_POST['username'];
echo'';
echo $_POST['password'];

if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
    echo '-----------------------';
    echo '';
    
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    echo '..................';
    echo '';
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();


    echo 'Allmost end!';
    echo '';
	$stmt->close();
}

echo '';
echo 'The End!';



?>