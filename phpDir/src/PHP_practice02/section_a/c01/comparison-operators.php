<?php

/* 
  Write you php code here

   */
  $_wanted = 10;
  $_stock = 20;
  $can_buy = $_wanted <= $_stock;
 
?>
<!DOCTYPE html>
<html>

<head>
  <title>Comparison Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <?= $can_buy;
  ?>
</body>

</html>