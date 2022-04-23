<?php
// need to start a session before we can delete a session 
session_start();
session_unset();
session_destroy();
// redirect to blog_index.php page
header("location: ../blog_index.php");
exit();