<?php include 'header.php' ?>
<?php
if (isset($_POST['submit'])) {
    $username = $_POST['uid'];
    $pwd = $_POST['pwd'];
    require_once 'db.php';

    // SQL statement requesting data from 'snapUser' table
    $query = "SELECT * FROM snapUser where userUid='$username' or userEmail='$username'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('Login failed');
        exit();
    }

    // Assign data returned to $row variable 
    $row = mysqli_fetch_assoc($result);

    // compare hashed password from 'snapUser' table with $pwd user enter to form using password_verify
    $pwdHashed = $row['userPwd'];
    $checkPwd = password_verify($pwd, $row['userPwd']);
    if ($checkPwd == true) {
        $_SESSION["user_Uid"] = $row['userUid'];
        header("location: account.php");
    }
}
?>
<section>
    <h2>Please login</h2>
    <form method="post" action="login.php" class="login_form">
        <div>
            <input type="text" name="uid" placeholder="username/email...">
        </div>
        <div>
            <input type="text" name="pwd" placeholder="password...">
        </div>
        <input type="submit" value="LOG IN" name="submit">
    </form>
</section>
<?php include 'footer.php' ?>