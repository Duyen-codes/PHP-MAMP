<?php
/*
Overall idea here is to set cookies and count the number of pages a visitor has viewed.
Step 1: Create a counter to store number of pages vistor has viewed. Create a cookie to hold 
that counter variable. 
$counter = $_COOKIE['counter] ?? 0;

Step 2: Increment the value of counter, as the visitor has just viewed a page.

$counter = $counter + 1;
Step 3: Use a setcookie() function to tell the browser to create or update a cookie
and also store the value from the variable in that cookie.

setcookie('counter', $counter);
Step 4: A new variable should hold message saying the number of pages the visitor has viewed.
e.g. "Page views: "
*/
$count;
if(!isset($_COOKIE['count'])) {
    $message = "Welcome! This is the first time you have viewed this page";
    setcookie('count', 1);
} else {
    setcookie('count', ++$_COOKIE['count']);
    $message = "You have viewed this page " . $_COOKIE['count'] . " times";
}
?>
<?php include 'includes/header.php'; ?> 
<h1><?= $message ?></h1>
<p><a href="sessions.php"> Refresh this page </a> to see the page views increase </p>
<?php include 'includes/footer.php'; ?> 