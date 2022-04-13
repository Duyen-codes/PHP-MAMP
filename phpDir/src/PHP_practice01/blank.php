<?php include "db.php"; 

 //Read the data from db
$query = "SELECT * FROM Users";
$result = mysqli_query($connection, $query);

if(!$result) {
    die('Query insertion failed');
} 

if(isset($_POST['submit'])) {
        $user = $_POST['name'];
        $pass = $_POST['password'];
        $id = $_POST['id'];

        // $query = "UPDATE Users SET ";
        // $query .= "username  = '$user', ";
        // $query .= "username = '$pass' ";
        // $query .= "WHERE id = $id";

        $query ="DELETE FROM Users ";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connection, $query);
        if(!$result) {
        die('Query insertion failed');
} 
    }

?>


<form action="blank.php" method="post">
    <label for="name">Username</label>
    <input type="text" id="name" name="name">
    <label for="password">Password</label>
    <input type="text" id="password" name="password">
    <select name="id" id="">
        <?php 
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            echo "<option value=$id>$id</option>";
        }
        ?>
       
    </select>
    <input type="submit" name="submit" value="update">
</form>
