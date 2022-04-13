<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	<?php 

/*  Step1: Use a pre-built math function here and echo it
	Step 2:  Use a pre-built string function here and echo it
	Step 3:  Use a pre-built Array function here and echo it
 */
function writeMsg() {
	echo 'Hello PHP';
}
writeMsg();

echo strlen('Hello PHP');

$cars = array('Volvo', 'BMW', 'Toyota');

echo "I like " . $cars[0] . ", " . $cars[1] . ", " . $cars[2] . "<br>";

echo "The result of abs (-7) is: " . (abs(-7)) . "<br>"; // abs() function returns an integer value, returns a float value
echo "Abs() function returns a float value if we pass a float value: " . (abs(-7.5)) ."<br>";

echo "ceil() function rounds fractions up. Ceil(3.3) is:  " . ceil((3.3)) . "<br>"; 
echo "ceil(-4.8) is: " . ceil(-4.8);
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>