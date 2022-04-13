<!DOCTYPE html>
<html>
  <body>
    <form action="welcome.php" method="post">
      Name: <input type="text" name="name" /><br />
      E-mail: <input type="text" name="email" /><br />
      <input type="submit" />
    </form>
  </body>
</html>

<?php 
// PHP_SELF is a variable that returns the name and path of the current file (from the root folder)
  echo $_SERVER['PHP_SELF'];

  // A common use of PHP_SELF variable is in the action field of the <form> tag 

  // action field instructs where to submit the form data. 
?>