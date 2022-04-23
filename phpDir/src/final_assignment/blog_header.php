<?php
// On every single page inside the website we have a session started. 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>My Blog</title>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="blog_index.php">BLOG</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="blog_index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="blog_post.php">Find Blogs</a>
        </li>
       <li class="nav-item"> 
         <a class="nav-link active" href="blog_contact.php">Contact me</a>
        </li>
      </ul>
      <?php 
      // Check if user login or not 
      ?>
      <?php 
        if(isset($_SESSION["useruid"])) {
          // check if user is logged in 
            echo "<a href='blog_profile.php'>Profile page</a>";
            echo "<a href='includes/blog_logout.inc.php'>Log out</a>";
        } else {
          // if user is not logged in
          echo "<a href='blog_signup.php'>Sign up</a>";
          echo "<a href='blog_login.php'>Log in</a>";
        }
      ?>
    </div>
  </div>
</nav>
<main>