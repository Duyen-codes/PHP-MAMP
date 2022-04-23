<?php 
include("DBConnect.php");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
// echo 'testing PHP api';
//  phpinfo();
// Instantiate database object
$objectDB = new DBConnect;
$conn = $objectDB->connect();
// var_dump($conn);
// print_r($_POST);
// print_r(file_get_contents('php://input'));
$user = file_get_contents('php://input');
$method = $_SERVER['REQUEST_METHOD'];
switch($method) {
    case 'POST':
        // get posted data
        $user = json_decode(file_get_contents('php://input'));
        // query to insert record
        $sql = "INSERT INTO users(id, name, email, mobile, created_at, updated_at) values (null, :name, :email, :mobile, :created_at, :updated_at)";
        // prepare query statement
        $stmt = $conn->prepare($sql);
        $created_at = date('Y-m-d');
        $updated_at = date('Y-m-d');
        // bind values, set property values
        $stmt->bindParam(':name', $user->name);
        $stmt->bindParam(':email', $user->email);
        $stmt->bindParam(':mobile', $user->mobile);
        $stmt->bindParam(':created_at', $created_at);
        $stmt->bindParam(':updated_at', $updated_at);
        // execute query
        if($stmt->execute()) {
            // tell the user
            $response = ['status'=> 1, 'message'=> 'Record created successfully.'];
        } else {
            // if unable to create record, tell the user
            $response = ['status'=> 0, 'message'=> 'Failed to create record.'];
        }
        // show response in json format
        echo json_encode($response);
        break;
        case 'GET':
            // select all query
            $sql = "SELECT * from users";
            // prepare query statement
            $stmt = $conn->prepare($sql);
            // execute query
            $stmt->execute();
            // get retrieved row
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // show users in json format
            echo json_encode($users);
            break;
}
