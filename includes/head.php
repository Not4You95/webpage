<?php


// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}


session_start(); 
  
// To check if session is started. 
if(isset($_SESSION["user"]))  
{ 
    if(time()-$_SESSION["login_time_stamp"] >600)   
    { 
        session_unset(); 
        session_destroy(); 
        header('Location: index.html'); 
    } 
} 
else
{ 
    header('Location: home.html'); 
} 


?>

<!DOCTYPE html>
<html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Not4You admin page</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">

    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="../../../assets/vendors/icheck/skins/all.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../../assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="https://not4you.se/home.php">
                    <img src="../../../assets/images/logo.svg" alt="logo" /> </a>
                <a class="navbar-brand brand-logo-mini" href="https://not4you.se/home.php">
                    <img src="../../../assets/images/logo-mini.svg" alt="logo" /> </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown language-dropdown">
                        <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <div class="d-inline-flex mr-0 mr-md-3">
                                <div class="flag-icon-holder">
                                    <i class="flag-icon flag-icon-se"></i>
                                </div>
                            </div>
                            <span class="profile-text font-weight-medium d-none d-md-block">Blidö</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                            <a class="dropdown-item">
                                <div class="flag-icon-holder">
                                    <i class="flag-icon"></i>
                                </div>Blidö
                            </a>

                            <a class="dropdown-item">
                                <div class="flag-icon-holder">
                                    <i class="flag-icon "></i>
                                </div>Smultron
                            </a>

                        </div>
                    </li>
                </ul>
                <form class="ml-auto search-form d-none d-md-block" action="#">
                    <div class="form-group">
                        <input type="search" class="form-control" placeholder="Search Here">
                    </div>
                </form>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">


                        <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="count bg-success">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">


                        <?php
                            include('includes/bel-nof.php');
                            ?>


                        </div>
                    </li>
                    <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <img class="img-xs rounded-circle" src="../../../assets/images/faces-clipart/pic-4.jpg" alt="Profile image"> </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">

                        <?php
                            include('includes/userDropDown.php');
                            ?>

                           
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">

                    <?php
                    include('includes/side-nav.php');
                    ?>


                </ul>
            </nav>