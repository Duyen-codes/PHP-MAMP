<?php 
   $host = 'db';
   $db_name = 'loginapp'; 
   $db_user = 'root';
   $db_pass = 'lionPass';


   // 2 ways 1.PDO and 2. MySQLI

   $connection = new mysqli($host, $db_user, $db_pass, $db_name);

   if($connection->connect_error) {
       die("Connection failed: $connection->connect_error");
   } 
//    else {
   //     echo "Connected to MySQL server success";
   // }

?>