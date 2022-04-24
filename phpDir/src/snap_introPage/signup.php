<?php include 'header.php' ?>
<section class="signup_section">
<h2>
    Please sign up
</h2>
<form action="signup.php" method="post" class="signup_form">
    <div><input type="text" name="firstname" placeholder="First name..."></div>
    <div><input type="text" name="lastname" placeholder="Last name..."></div>
    <div><input type="text" name="email" placeholder="Email..."></div>
    <div><input type="text" name="pwd" placeholder="Password..."></div>
    <div><input type="text" name="pwdRepeat" placeholder="Repeat your password..."></div>
    <input type="submit" name="signup" value="Sign up">
</form>
</section>
<?php include 'footer.php' ?>
