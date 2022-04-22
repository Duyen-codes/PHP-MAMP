<?php include 'includes/header.php' ?>
<?php
/* Write your code here 
Overall idea here is to use query string to select content

Step 1: Store the value of city in some variable, 
what happens let us say if a key called "city" and its value is not null
Hint: try using nullishing coalescing operator

Step 2: You can check the condition with an if statement. If the value
is a string that is not empty, the PHP interpreter treats that value as true
and runs the code block

Step 3: Store the value of address of the branch in the city 
that was named in the query string

Step 4:  If the value in the city is a blank string it should display
"Please select a city"
*/
$addresses = ["Helsinki" => "Helsinki: Kaivokatu 1, 00100 Helsinki",
            "London" => "London: 48 Store Street’, WC1E, 7BS",
            "Sydney" => "Sydney: 1243 7th Street, 10212",
];

$city_name = $_POST['city'] ?? '';
    if (array_key_exists($city_name, $addresses)) {
        echo $addresses[$city_name];
    } else {
        echo 'Please select a city';
    }
?>

<form action="get-2.php" method="post">
    <input type="text" name="city">
    <input type="submit" name="submit" value="search">
</form>



<?php include 'includes/footer.php' ?>