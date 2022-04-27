<?php include_once 'header.php'; ?>
<?php
// check if user is logged in 
if (isset($_SESSION["user_Uid"])) {
    echo "<h3>Hello " . $_SESSION['user_Uid'] . "." . " Welcome to your profile page!" . "</h3>";
    echo "<p>Today is " . date("l") . " " .  date("d/m/Y") . ".</p>";
}
?>
<?php include 'footer.php' ?>