<?php
// $color = $_COOKIE['color'] ?? null;
$options = ['light', 'dark'];
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $color = $_POST['color'];
  $expiration_date = time() + (60 * 60);
  setcookie('color', $color, time() + 60*60);
  $scheme = (in_array($color, $options)) ? $color : 'dark';
}

// $cookie_name = 'color';
// $expiration_date = time() + (60 * 60);

// if(isset($_POST['submit'])) {
//   if(!empty($_POST['color'])) {
//     $selected_color = $_POST['color'];
//     if(!isset($_COOKIE[$cookie_name])) {
//       setcookie($cookie_name, $selected_color, $expiration_date);
//     }
//     setcookie($cookie_name, $selected_color, $expiration_date);
//   } else {
//     echo 'Please select the value';
//   }
// }
/*
Step 1: Store the value sent for a cookie for color
(or null if it was not sent)

Step 2: Create an array to hold permitted options e.g. light, dark
Step 3: Check if the form has been submitted. You may use $_SERVER['REQUEST_METHOD]
Step 4: Now use setcookie() function to set a cookie on color variable. Its value is the option
that user selected from the select box. It also:
  - expires in one hour
  - is sent to all pages of the site
  - Gets sent via HTTP or HTTPS
  - is hidden from JavaScript

if($_SERVER['REQUEST_METHOD'] == 'POST') {

} 
Step 5: You may now use ternary to check if the value in color is in the options array. 
If it is, the value should be saved to some other variable and it not, store the value of 'dark'.
*/
?>
<?php include 'includes/header-style-switcher.php'; ?>
<form method="POST" action="cookie-preferences.php">
  Select color scheme:
  <select name="color">
    <option value=""></option>
    <option value="dark">Dark</option>
    <option value="light">Light</option>
  </select><br>
  <input type="submit" value="Save" name="submit">
</form>
<?php include 'includes/footer.php'; ?>