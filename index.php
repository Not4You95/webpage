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
    <link href="text/loginStyle.css" rel="stylesheet" type="text/css">
    
  

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

    <div class="container h-80">
        <div class="row align-items-center h-100">
            <div class="col-3 mx-auto">
                <div class="text-center">
                    <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" />
                    <p id="profile-name" class="profile-name-card"></p>
                    <form class="form-signin"  action="https://not4you.se/authenticate.php" method="post">

                        <input type="username" name="username" id="username" class="form-control form-group" placeholder="username" required autofocus>
                        <input type="password" name="password" id="inputPassword" class="form-control form-group" placeholder="password" required autofocus>
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Enter</button>
                    </form><!-- /form -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<!-- <!DOCTYPE html>
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

</html>-->