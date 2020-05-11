<?php
include('../config/config.php');
session_start();


echo 'Hello world!';

if(isset($_POST['submit']){

    if ( !isset($_POST['username'], $_POST['password']) ) {
        // Could not get the data that should have been sent.
        exit('Please fill both the username and password fields!');
    }


}


?>