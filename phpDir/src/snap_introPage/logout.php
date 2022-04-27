<?php
session_start();
session_unset();
session_destroy();
// redirect to home.php after logout
header("location: home.php");
exit();
