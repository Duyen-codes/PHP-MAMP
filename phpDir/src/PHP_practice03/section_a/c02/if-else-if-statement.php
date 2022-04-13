<?php
/* Write your code here */
?>
<!DOCTYPE html>
<html>

<head>
  <title>if else if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <?php
  /* Write your code here */
  $is_in_stock = true;
  if ($is_in_stock) {
    echo 'In Stock';
  } elseif (!$is_in_stock) {
    echo 'Sold Out';
  }

  $message = $is_in_stock ? 'In Stock' : 'Sold Out';
  echo $message;
  ?>
</body>

</html>