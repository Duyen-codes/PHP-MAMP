<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">
  <aside class="col-xs-4">
    <?php Navigation(); ?>
  </aside>
  <!--SIDEBAR-->
  <article class="main-content col-xs-8">
    <?php
		/*  Step 1: Use the Make a class called Dog
		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color
		Step 4: Make a method named ShowAll that echos all the properties
		Step 5: Instantiate the class / create object and call it pitbull
    Step 6: Call the method ShowAll
	*/
    class Dog {
      // property
      public $name, $eye_colors, $nose, $fur_color;
      // method
      public function show_all() {
        // pseudo variable $this is the value of the calling object
        echo $this -> name; 
        echo "<br />";
        echo $this -> eye_colors;
        echo "<br />";
        echo $this -> nose;
        echo "<br />";
        echo $this -> fur_color;
      }
    }
      // Create an instance of the class (new object)
    $pitbull = new Dog();
    $pitbull -> name = 'Lulu';
    $pitbull -> eye_colors = 'Brown';
    $pitbull -> nose = true;
    $pitbull -> fur_color = 'White';
    echo $pitbull -> show_all();
  
		?>
  </article>

  <!--MAIN CONTENT-->

  <?php include "includes/footer.php"; ?>