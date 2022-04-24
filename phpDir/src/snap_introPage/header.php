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
            <li><a href="home.php">Company</a></li>
            <li><a href="home.php">Career</a></li>
            <li><a href="home.php">About</a></li>
          </ul>
          <ul class="cta">
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
          </ul>
        </div>
      </nav>
    </header>