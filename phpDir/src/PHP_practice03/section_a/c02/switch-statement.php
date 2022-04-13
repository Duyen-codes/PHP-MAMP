<?php
/* Write your code here */
?>
<!DOCTYPE html>
<html>

<head>
  <title>switch Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <?php
  /* Write your code here */
  $day = date('D');
  switch($day) {
    case 'Mon':
      echo "get 20% off chocolates on Monday";
      break;

      case 'Tue':
      echo "get 20% off mints on Tuesday";
      break;

      default:
      echo 'Buy three packs, get one free';
  }
  ?>
</body>

</html>