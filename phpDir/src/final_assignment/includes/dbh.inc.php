<?php 
$servername = 'db';
$dbname = 'finalAssignmentApp';
$dbUsername = 'root';
$password = 'lionPass';
// Create connection to the server 
$conn = mysqli_connect($servername, $dbUsername, $password, $dbname);
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

