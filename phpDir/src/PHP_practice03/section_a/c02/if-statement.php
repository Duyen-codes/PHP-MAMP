<?php
/* Write your code here */
?>
<!DOCTYPE html>
<html>

<head>
  <title>if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<h1>The Candy Store</h1>
<?php
/* Write your code here */
$name = 'James';

if(!empty($name)) {
  echo "Hello " . $name . "<br>";
} 

$is_in_stock = true;

$message = $is_in_stock ? 'Sold Out' : 'In Stock';
echo $message;
?>
</body>

</html>