<?php
session_start();
// Unset all of the session variables
$_SESSION = array();
session_unset();
session_destroy();
// Redirect to the login page:
header('Location: index.php');
exit;
?>