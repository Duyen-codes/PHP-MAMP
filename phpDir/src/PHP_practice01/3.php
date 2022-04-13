<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases
 */

 
$favcolor = 'red';
switch($favcolor) {
	case "red":
	echo "Your favorite color is red!";
	break;
	case 'blue':
		echo 'Your favorite color is blue!';
		break;
		case 'green':
			echo 'green!';
			break;
			case 'pink':
				echo 'pink';
				break;
				default:
				echo 'Your favorite color is something else.';
}
	
?>

<?php 
	$a = 50;
	$b = 10;
	if($a < $b) {
		echo 'PHP';
	} elseif ($a == $b) {
		echo 'a == b';
	} else {
		echo 'I love PHP';
	}
?>

<?php 
// For loop displays 10 numbers
?>

<?php 
for ($x = 0; $x <= 10; $x++) {
	echo "The number is: $x <br>";
	echo date(DATE_RFC2822);
}
?>



</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>