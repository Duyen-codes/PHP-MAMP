<?php
include_once 'header.php';
?>
<section>
    <?php
    if (isset($_SESSION["user_Uid"])) {
        // check if user is logged in 
        echo "<h3>Hello " . $_SESSION['user_Uid'] . "." . " Welcome back!" . "</h3>";
    }
    ?>
</section>
<section>
    <h2>We are coming soon. </h2>
    <form action="blog_index.php" method="post">
        <input type="text" placeholder="email" name="email">
        <input type="submit" name="submit" value="Submit">
    </form>
</section>
<?php include_once 'footer.php';
