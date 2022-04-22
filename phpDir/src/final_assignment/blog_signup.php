<?php 
  include_once 'blog_header.php';
?>
<section>
<h2>Sign up</h2>
<form action="includes/blog_signup.inc.php" method="post">
   <input type="text" placeholder="full name" name="name">
   <input type="text" placeholder="email" name="email">
   <input type="text" placeholder="user name" name="uid">
   <input type="text" placeholder="password" name="pwd">
   <input type="text" placeholder="repeat password" name="pwdrepeat">
   <input type="submit" value="sign up" name="submit">
</form>
<?php
   if(isset($_GET['error'])) {
    if($_GET['error'] == "emptyinput") {
      echo "<p>Fill in all fields!</p>";
    } else if($_GET['error'] == "invaliduid") {
      echo "<p>Choose a proper username!</p>";
    } else if($_GET['error'] == "invalidemail") {
      echo "<p>Choose a proper email!</p>";
    } else if($_GET['error'] == "passwordsdontmatch") {
      echo "<p>Passwords do not match!</p>";
    } else if($_GET['error'] == "stmtfailed") {
      echo "<p>Something went wrong, try again!</p>";
    } else if($_GET['error'] == "usernametaken") {
      echo "<p>Username already taken!</p>";
    }else if($_GET['error'] == "none") {
      echo "<p>Signed up successfully!</p>";
    }
  }
?>
</section>
<?php 
include_once 'blog_footer.php';