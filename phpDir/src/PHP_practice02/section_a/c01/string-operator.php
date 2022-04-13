<?php

/* 
  Write you php code here

   */
  $greeting = 'Thank you';
  $customer_name = 'Mr.James';


?>
<!DOCTYPE html>
<html>

<head>
  <title>String Operator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <p><?php echo $customer_name . " 's " . " Order " . "<br>" . $greeting . " " .$customer_name;?></p>
</body>

</html>