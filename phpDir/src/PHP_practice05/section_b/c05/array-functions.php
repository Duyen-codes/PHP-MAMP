
<?php include 'includes/header.php'; ?>

<h1>Best Sellers</h1>

<?php
// Create array of greetings, then get random value:

$greetings = ['Chao', 'Moi', 'Hello', 'Bonjour', 'Hi'];
// array_rand() Pick one or more random keys out of an array
$greeting_key = array_rand($greetings);
$greeting = $greetings[$greeting_key] . "<br>";
echo 'greeting_key: ' . $greeting_key; 
$random_greeting = $greetings[rand(0,4)];

echo 'Greeting expression: ', $random_greeting . "<br>";


// Step 2: array of best sellers, count items, list top items

$best_sellers = ['Shirt', 'Pants', 'Jeans', 'Dress', 'Skirt'];

$bestsellers = ['ink', 'pencil', 'notebook'];

// print out the length of array
$arr_length = count($greetings);
echo "the length of the array: " .$arr_length;
$bestsellers_count = count($bestsellers) . "<br>";
$bestsellers_text = implode(',', $bestsellers) . "<br>";
echo 'bestseller_text: ' . $bestsellers_text;

// Step 3: array holding 1 customer details e.g fname, lname, email 
$customer_details = ['fname' => 'Chris', 'lname' => 'Laurence', 'email' => 'example@gmail.com'];

$customer = ['firstname' => 'James', 'lastname' => 'Bond', 'email' => 'jamesbond@007.com']; 

if(array_key_exists('firstname', $customer)) {
    $greeting .= $customer['firstname'];
}

// Step 4: if we have a customer fname, add it to greeting. Hint: array_key_exists()
if (array_key_exists('fname', $customer_details)) {
    echo $random_greeting . ' ' .$customer_details['fname'] . "<br>";
 
}



// for loop print out item in array
for ($x = 0; $x < count($best_sellers); $x++) {
    echo $best_sellers[$x];
    echo "<br>";
}

// get the first 3 items of array

$i = 0;
foreach($best_sellers as $el) {
    if($i >= 3) break;
    $i++;
    echo "foreach " .$el ."<br>";
}

for($i = 0; $i < 3; $i++) {
    echo "for loop " . $best_sellers[$i] . "<br />";
}



?>

<h1>Best sellers</h1>
<p><?= $greeting ?></p>


<?php include 'includes/footer.php'; ?>