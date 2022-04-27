<?php
include 'includes/sessions.php';
session_unset();
session_destroy();
// // redirect to home.php after logout
// header("location: home.php");
// exit();
$_SESSION = [];
// Call logout() to terminate session
header('Location: home.php');         // Redirect to home page