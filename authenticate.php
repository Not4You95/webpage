<?php


session_start();

// https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php
require_once "../config/config.php";
$username = $password = "";
$username_err = $password_err = "";
$username = $_POST["username"];


// To check if session is started. 


if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: home.php");
    exit;
}







if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "Post !<br />";

    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username";
    } else {
        $username = trim($_POST["username"]);
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter password";
    } else {
        $password = trim($_POST["password"]);
    }

    if (empty($username_err) && empty($password_err)) {
        echo "No empty user or pass!<br />";

        $sql = "SELECT id, username, password, email FROM accounts WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);
        }

        $param_username = $username;

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) == 1) {

                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $email);


                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($password, $hashed_password)) {
                        session_start();

                        // Store data in session variables
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["username"] = $username;
                        // Login time is stored in a session variable 
                        $_SESSION["user"] = $username;
                        $_SESSION["login_time_stamp"] = time();

                        // Redirect user to welcome page
                        header("location: home.php");
                    } else {
                        $password_err = "The password you entered was not valid.";
                        echo $password_err;
                    }
                }
            } else {
                $username_err = "No account found with that username.";
                echo $username_err;
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }

        mysqli_stmt_close($stmt);
    }
    // Close connection
    mysqli_close($link);
}
