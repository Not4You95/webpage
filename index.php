

<?php
$username = $password = "";
$username_err = $password_err = "";
$username = $_POST["username"];


// To check if session is started. 
if (isset($_SESSION["user"])) {
    if (time() - $_SESSION["login_time_stamp"] > 600) {
        session_unset();
        session_destroy();
        header('Location: index.php');
    }

    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        header("location: home.php");
        exit;
    }
} else {
    header('Location: index.php');
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="text/loginStyle.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="login">
        <h1>Login</h1>
        <form action="https://not4you.se/authenticate.php" method="post">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Username"
                id="username" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password"
                id="password" required>           
            <input type="submit" name = "submit" value="Login">
            
        </form>
    </div>

</body>

</html>