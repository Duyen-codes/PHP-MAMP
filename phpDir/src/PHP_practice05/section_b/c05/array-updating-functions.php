
<?php include 'includes/header.php'; ?>

<h1>Order</h1>


<?php
// Write your code here

$ordered_items = ['banana', 'orange', 'grapes', 'pear'];

$order = ['notebook', 'pencil', 'eraser',];
// Add item to start of array
array_unshift($ordered_items, 'kiwi');
print_r($ordered_items);
echo "<br>";

// Delete the last item from array

array_pop($ordered_items);
print_r($ordered_items);

// Convert to string
implode(", ", $ordered_items);
?>

<h1>Convert to string</h1>

<?php 
echo (implode(", ", $ordered_items));
?>

<h1>Loop through keys and values of associative array:</h1>
<?php 

$array_assoc = array('Bus' => 2, "Bike" => 5, "Car" => 9);
foreach($array_assoc as $key => $val) {
    echo "Key is: " . $key . "," . "Value is: ".$val;
    echo "<br>";
}
echo "<h1>Print array_assoc:</h1>"; 
 print_r($array_assoc);


?>


<?php include 'includes/footer.php'; ?>