<?php 
  include_once 'blog_header.php';
?>
    <section>
      <?php 
        if(isset($_SESSION["useruid"])) {
          // check if user is logged in 
            echo "<h3>Hello " . $_SESSION['useruid'] . "." . " Welcome back!" . "</h3>"; 
        }
      ?>
    </section>
<?php 
include_once 'blog_footer.php';
