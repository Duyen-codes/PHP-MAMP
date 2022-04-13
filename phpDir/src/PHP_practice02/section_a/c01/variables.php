<?php

/* 
  Write you php code here
   */
    $name = 'Snickers';
    $price = 2.5;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Variables</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  
  <?php 
    echo "<h2> Candy's name is "  .$name . "</h2>";
    echo "<p>And its price is: " .$price ."</p>";
  ?>
  <h2>Welcome <?php echo $name; ?></h2>
  <p>The cost of your candy is <?php echo $price; ?> per pack. </p>
</body>

</html>