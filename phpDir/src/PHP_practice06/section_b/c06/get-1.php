<?php
/* Write PHP code here */
$cities = ["Helsinki" => "Helsinki: Kaivokatu 1, 00100 Helsinki",
            "London" => "London: 48 Store Street’, WC1E, 7BS",
            "Sydney" => "Sydney: 1243 7th Street, 10212",
];

$city = isset($_GET['city']) ? $_GET['city']: "";
$address = isset($cities[$city]) ? $cities[$city] : "";
foreach($cities as $key=>$value) {
    echo "<a href='get-1.php?city=$key'>$key</a>";
}

?>
<?php include 'includes/header.php' ?>



<?php include 'includes/footer.php' ?>