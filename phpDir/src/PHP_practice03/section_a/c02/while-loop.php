<?php
/* Write your code here */
?>
<!DOCTYPE html>
<html>

<head>
  <title>while Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php
    /* Write your code here */
    $sum = 0;
    $i = 0;
    $packs = 5;
    while ($i < $packs) {
      $sum += 1.99;
      $i++;
    }
    echo $sum;
    ?>
  </p>
</body>

</html>