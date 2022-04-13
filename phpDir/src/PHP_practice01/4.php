<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

 function addNumbers() {
	 $number1 = 1;
	 $number2 = 2;
	 $sum = $number1 + $number2;
	 echo $sum;
 }

 echo addNumbers() . "<br>";
 
	
 function multiplyNumber(int $a, int $b) {
	return $a * $b;
 }
 echo multiplyNumber(5, 2) . "<br>";

 function setHeight(int $minheight = 50) {
	 echo "The height is : $minheight <br>";
 }
setHeight();
 setHeight(350);

 function sum(int $x, int $y) {
	 $total = $x + $y;
	 return $total;
 }

 echo "The sum of 5 + 10 = " . sum(5, 10) . "<br>";
 echo "The sum of 7 + 3 = " . sum(7, 3) . "<br>";
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>