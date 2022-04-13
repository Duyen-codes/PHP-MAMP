<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/

$db_servername = 'db';
$db_username = 'root';
$db_password = 'lionPass';
$db_name = 'employee'; 

$connection = new mysqli($db_servername, $db_username,  $db_password, $db_name,);

if ($connection->connect_error) {
	die("Connection failed: " . $connection->connect_error);
  } 
// Read data from database

$query = "SELECT * from Persons";
$result = mysqli_query($connection, $query);

if(!$result) {
	die("Query died");
}


?>





</article><!--MAIN CONTENT-->

<form action="7.php" method="post">
    <label for="firstname">first name</label>
    <input type="text" id="firstname" name="firstname">
    <label for="lastname">Last name</label>
    <input type="text" id="lastname" name="lastname">
	<label for="age">age</label>
	<input type="number" name="age">
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


<?php include "includes/footer.php"; ?>
