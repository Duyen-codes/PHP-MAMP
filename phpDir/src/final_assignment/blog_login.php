<?php 
    include_once 'blog_header.php'
?>
<section>
<div class="text-center mb-4">
        <h2>Please Log in</h2>
      </div>
<form class="form-signin" action="includes/blog_login.inc.php" method="post">
    
      <div class="form-label-group">
        <input type="text" id="uid" class="form-control" placeholder="Username/Email address" name="uid">
        <label for="uid">Username/ Email Address</label>
      </div>
      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pwd">
        <label for="inputPassword">Password</label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Log in</button>
    </form> 
<?php
   if(isset($_GET["error"])) {
    if($_GET["error"] === "emptyinput") {
      echo "<p>Fill in all fields!</p>";
    } else if($_GET["error"] === "wronglogin") {
      echo "<p>Incorrect login information</p>";
    }
  }
?>
</section>
<?php 
include_once 'blog_footer.php';
