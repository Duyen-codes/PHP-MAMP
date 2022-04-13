<?php
/* Write your code here */
?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php
    /* Write your code here */
    $price = 1.99;
    $packs = 10;
    $total_price = 0;
   for ($i = 0; $i < $packs; $i++) {
    $total_price += $price;
   }
   echo "The total price of 10 packs is: " . $total_price;
    ?>
  </p>
</body>

</html>