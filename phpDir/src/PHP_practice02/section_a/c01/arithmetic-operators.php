<?php

/* 
  Write you php code here

   */

  $item = 3;
  $cost = 5;
  $subtotal = $item * $cost;
  $tax = $subtotal / 100 * 20;
  $total = $subtotal + $tax;
?>
<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p>Total Amount: <?php echo $total_amount ?></p>
  <p>Amount with tax: <?php echo $subtotal?></p>
  <p>Items: <?= $item ?></p>
  <p>Cost per pack: $<?= $cost ?></p>
  <p>Subtotal: $<?= $subtotal ?></p>
  <p>Tax: $<?= $tax ?></p>
  <p>Total: $<?= $total ?></p>
</body>

</html>