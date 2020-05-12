<?php

include('../config/config.php');
session_start();


echo "Hello world!<br />";
echo $_POST;
echo "<br />";
foreach ($_POST as $missing) {

    echo "$missing<br />";
}
if (isset($_POST['username'], $_POST['password'])) {

    echo "submit<br />";
    if (empty($_POST['username'])) {
        exit('Please fill the username field!');
    }

    if (empty($_POST['password'])) {
        exit('Please fill and password field!');
    }

    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('Could not connect to MySQL: ' .
        mysqli_connect_error());

    echo "database <br />";


    $query = 'SELECT id, password FROM accounts WHERE username = ?';

    $stmt = mysqli_prepare($dbc, $query);

    mysqli_stmt_bind_param($stmt, "s", $_POST['username']);
    mysqli_stmt_execute($stmt);
    //$stmt->store_result();

    $affected_rows = mysqli_stmt_affected_rows($stmt);

    if ($affected_rows == 1) {

        echo 'Pass';

        $stmt->bind_result($id, $password);
        $stmt->fetch();

        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['password'], $password)) {
            // Verification success! User has loggedin!
            // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            echo 'Welcome ' . $_SESSION['name'] . '!';
        } else {
            echo 'Incorrect password!';
        }
    } else {

        echo 'Wrong username <br />';
    }

    mysqli_stmt_close($stmt);

    mysqli_close($dbc);
    /*if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
        
        echo "------<br />";
        // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        // Store the result so we can check if the account exists in the database.
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	if (password_verify($_POST['password'], $password)) {
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
		echo 'Welcome ' . $_SESSION['name'] . '!';
	} else {
		echo 'Incorrect password!';
	}
} else {
	echo 'Incorrect username!';
}
    
    
        $stmt->close();
    }else{
        echo "no prep <br />";
    }*/




    echo 'The end!<br />';
} else {
    echo "No post!<br />";
}

?>
