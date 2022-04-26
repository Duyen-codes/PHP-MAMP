<?php
include 'session.php';
?>
<?php include 'header.php' ?>
<section>
    <h2>Please login</h2>
    <form method="post" action="login.php" class="login_form">
        <div>
            <input type="text" name="uid" placeholder="username">
        </div>
        <div>
            <input type="text" name="pwd" placeholder="password...">
        </div>
        <input type="submit" value="LOG IN" name="submit">
    </form>
</section>

<?php include 'footer.php' ?>