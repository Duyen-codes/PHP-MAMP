<?php
/* 
    Write your code here
     */
?>
<!DOCTYPE html>
<html>

<head>
  <title>foreach Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Price List</h2>
  <table>
    <tr>
      <th>Item</th>
      <th>Price</th>
    </tr>
    <?php
    /* 
    Write your code here
     */
    $candy_products = ["Toffee" => 2.99, 
                        "Mints" => 1.99,
                         "Fudge" => 3.49];
    
    foreach ($candy_products as $key => $value) {
      echo " $key costs $value<br>";
    }

    ?>
  </table>
</body>

</html>