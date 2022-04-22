<?php 
$servername = 'db';
$dbname = 'finalAssignmentApp';
$username = 'root';
$password = 'lionPass';
// Create connection to the server 
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
} 
echo "Connected to MySQL server successfully";