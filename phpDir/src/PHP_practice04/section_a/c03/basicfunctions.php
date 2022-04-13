<?php

/**
 * Write your code here
 */



?>

<!DOCTYPE html>
<html>

<head>
  <title>Basic Functions</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Stock Control</h2>
  <table>
    <tr>
      <th>Product</th>
      <th>Stock</th>
      <th>Re-order</th>
      <th>Total value</th>
      <th>Tax due</th>
    </tr>

    <?php 
    $candies = [
      'toffee' => ['price' => 3, 'stock' => 12],
      'Mints' => ['price' => 2, 'stock' => 26],
      'Fudge' => ['price' => 4, 'stock' => 8],
      ];
      
      $tax = 20;
      function get_reorder_message(int $stock):string 
      {
        return ($stock < 10 ? 'Yes' : 'No');
      }
      
      function get_total_value(float $price, int $quantity): float
      {
        return $price * $quantity;
      }
      
      function get_tax_due(float $price, int $quantity, int $tax = 0): float
      {
        return ($price * $quantity) * ($tax / 100);
      }
      ?>


    <?php foreach($candies as $candy => $data) {  ?>
  <tr>
      <td><?= $candy ?></td>
      <td><?= $data['stock'] ?></td>
      <td><?= get_reorder_message($data['stock']) ?></td>
      <td><?= get_total_value($data['price'], $data['stock']) ?></td>
      <td><?= get_tax_due($data['price'], $data['stock'], $tax) ?></td>

  </tr>
  <?php } ?>

<?php 
// $stock = array("toffee"=>array("12", "4"), "chocolade"=>array("30", "5"), "candybar"=>array("50", "2"));

// foreach ($candies as $x => $v) {
//   echo
//   "<tr>
//   <td> $x </td>
//   <td>" .$stock[$x][0] ."</td>
//   <td>" .reorder($stock[$x][0]) . "</td>
//   <td>" .totalValue($stock[$x][0], $stock[$x][1]). "</td>
//   <td>" .totalTax($stock[$x][0], $stock[$x][1]). "</td>
//   </tr>";
//   };
?>
  </table>
</body>

</html>