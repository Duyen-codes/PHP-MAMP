<?php
/* Write your code here 
Overall idea here is to validate query string data. 
It builds on top of previous ones and uses validation 
to check if the query string holds a valid location.

Step 1: If the query string contains a city, it should be stored in some variable
 and if not, that variable should hold a blank string. 

Step 2: Use array function e.g. array_key_exits() to check if the value in variable 
is a key in the defined list of cities array. If it is, some variable should hold a 
value of true. If not, that variable will hold a value of false. 

Step 3: Check the validity with if condition. The address for city is collected from list of arrays you define
and if any of the cities are valid, and if those cities are not defined, you can ask users to "Please select a city"

*/
$cities = ["Helsinki" => "Helsinki: Kaivokatu 1, 00100 Helsinki",
            "London" => "London: 48 Store Street’, WC1E, 7BS",
            "Sydney" => "Sydney: 1243 7th Street, 10212",
];

$city = $_POST['city'] ?? '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo $city;
    if(array_key_exists($city, $cities)) {
        echo $cities[$city];
    } else {
        header("Location: page-not-found.php");
        echo 'something';
       
    }
}


?>
<?php include 'includes/header.php' ?>

<form action="get-3.php" method="post">
    <input type="text" name="city">
    <input type="submit" name="submit" value="submit query">
</form>

<?php include 'includes/footer.php' ?>