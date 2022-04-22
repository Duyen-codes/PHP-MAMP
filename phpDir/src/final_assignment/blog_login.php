<?php 
    include_once 'blog_header.php'
?>
<section>
<h2>Login</h2>
<form method="POST" action="includes/blog_login.inc.php">
   <input type="text" name="uid" placeholder="Username/email"><br>
    <input type="password" name="pwd" placeholder="password"><br>
  <input type="submit" value="Log In">
</form>
<?php
   if(isset($_GET['error'])) {
    if($_GET['error'] === "emptyinput") {
      echo "<p>Fill in all fields!</p>";
    } else if($_GET['error'] === "wronglogin") {
      echo "<p>Incorrect login information</p>";
    }
  }
?>
</section>
<?php 
include_once 'blog_footer.php';
