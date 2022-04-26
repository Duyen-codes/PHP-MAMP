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
        // var_dump($_SESSION);
        header("location: account.php");
    }
}
