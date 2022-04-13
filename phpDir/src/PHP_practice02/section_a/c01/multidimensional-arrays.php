<?php

/* 
  Write you php code here

   */
  $offers = [['name' => 'Salmiakki', 'price' => 1300, 'stock' => 300], 
  ['name' => 'Toffee', 'price' => 450, 'stock' => 50],
['name' => 'Mints', 'price' => 3.5, 'stock' => 90]
];
?>

<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Offers</h2>
<p><?php echo $offers[0]['name']; ?> - $<?php echo $offers[0]['price'];?></p>
<p><?php echo $offers[1]['name']; ?> - $<?php echo $offers[1]['price'];?></p>
<p><?php echo $offers[2]['name']; ?> - $<?php echo $offers[2]['price'];?></p>
</body>

</html>