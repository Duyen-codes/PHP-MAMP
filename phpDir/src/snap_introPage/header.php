<?php
// On every single page inside the website we have a session started. 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Snap PHP</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <nav>
        <a href="home.php">
          <img src="./images/logo.svg" alt="snap logo" />
        </a>
        <button class="mobile-nav-toggle" aria-expanded="false"></button>
        <!-- ul>(li>a)*5 -->
        <div class="primary-navigation" data-visible="false">
          <ul>
            <li><a href="home.php">Features</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="home.php">Career</a></li>
            <li><a href="home.php">About</a></li>
          </ul>
          <ul class="cta">
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
            <?php 
      // Check if user login or not 
      ?>
      <?php 
        // if(isset($_SESSION["userUid"])) {
        //   // check if user is logged in 
        //     echo "<a href='account.php'>Account page</a>";
        //     echo "<a href='logout.php'>Log out</a>";
        // } else {
        //   // if user is not logged in
        //   echo "<a href='signup.php'>Sign up</a>";
        //   echo "<a href='login.php'>Log in</a>";
        // }
      ?>
          </ul>
        </div>
      </nav>
    </header>