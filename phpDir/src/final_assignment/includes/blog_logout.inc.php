<?php
// need to start a session before we can delete a session 
session_start();
session_unset();
session_destroy();
header("location: ../blog_index.php");
exit();
