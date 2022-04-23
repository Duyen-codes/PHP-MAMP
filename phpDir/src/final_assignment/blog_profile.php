<?php
// include header file
include_once 'blog_header.php';
?>
<?php 
 // check if user is logged in 
  if(isset($_SESSION["useruid"])) {
      echo "<h3>Hello " . $_SESSION['useruid'] . "." . " Welcome to your profile page!" . "</h3>";
      echo "<p>Today is " . date("l") . " ".  date("d/m/Y") . ".</p>";
  }
?>