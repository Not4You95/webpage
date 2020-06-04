<?php
session_start();
$username = $password = "";
$username_err = $password_err = "";
$username = $_POST["username"];




if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    if (time() - $_SESSION["login_time_stamp"] > 600) {
        header("location: logout.php");
    }
    header("location: home.php");
    exit;
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="text/loginStyle.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class = "container-scoller">

    <div class="login">
        <h1>Login</h1>
        <form action="https://not4you.se/authenticate.php" method="post">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <input type="submit" name="submit" value="Login">

        </form>
    </div>

    </div>


    

</body>

</html>