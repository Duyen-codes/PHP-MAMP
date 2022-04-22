<?php 
session_start();
// Cookie 
   $name = "name";
    $value = "value";
    $expiration = time() + (60 * 60 * 24 * 7); 
    setcookie($name, $value, $expiration);
    
    // Session 
  $_SESSION['greeting'] = 'Hello PHP';
  echo $_SESSION['greeting'];
  $_SESSION['favcolor'] = 'green';
  $_SESSION['favanimal'] = 'lion';
  echo "Session variables are set.";
?>

<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">
  <aside class="col-xs-4">
    <?php Navigation(); ?>
  </aside>
  <!--SIDEBAR-->
  <article class="main-content col-xs-8">
    <?php

		/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it
		Step 2 - Set a cookie that expires in one week
		Step 3 - Start a session and set it to value, any value you want.
	*/

		?>

  <!-- <a href="9.php?username=James">Click here</a> -->
  <a href="9.php?source=1234">CLICK HERE</a>

  <?php   
    // $user_name = $_GET['username'] ?? 'Click link at top of page';
    // echo $user_name;
    if(isset($_GET['source'])) {
      echo $_GET['source'];
    }
  ?>




  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>