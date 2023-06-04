<?php
$Page="logout";
include ("inc/head.php");
session_start();

// Clears all session variables
$_SESSION = array();

// end session
session_destroy();

// Redirect user to exit page
header("Location: login.php");
exit();