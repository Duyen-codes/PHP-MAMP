<?php

/* 
  Write you php code here
   */
  $nutrition = ['fat' => 10, 'sugar' => 30, 'salt' => 5,];

  $nutrition['fat'] = 35;
  $nutrition['fiber'] = 25;
?>

<!DOCTYPE html>
<html>

<head>
  <title>Updating Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <?php 
    foreach($nutrition as $x => $val) {
      echo "$x = $val<br>";
    }
  ?>
  <p>Fat: <?php echo $nutrition['fat'];?></p>
  <p>Fat: <?php echo $nutrition['sugar'];?></p>
  <p>Fat: <?php echo $nutrition['salt'];?></p>
  <p>Fat: <?php echo $nutrition['fiber'];?></p>
</body>

</html>