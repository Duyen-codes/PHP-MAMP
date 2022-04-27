<?php session_start() ?>
<?php
if (isset($_POST['submit'])) {
    $username = $_POST['uid'];
    $pwd = $_POST['pwd'];
    require_once 'db.php';
    $query = "SELECT * FROM snapUser where userUid='$username'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('Login failed');
        exit();
    }
    $row = mysqli_fetch_assoc($result);
    $pwdHashed = $row['userPwd'];
    $checkPwd = password_verify($pwd, $row['userPwd']);
    if ($checkPwd == true) {
        $_SESSION["user_Uid"] = $row['userUid'];
        header("location: account.php");
    }
}
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