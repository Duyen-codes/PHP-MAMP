<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];
    require_once 'dbh.inc.php';
    require_once 'blog_functions.inc.php';
    if(emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../blog_signup.php?error=emptyinput");
        exit();
    }
    if(inValidUid($username) !== false) {
        header("location: ../blog_signup.php?error=invaliduid");
        exit();
    }
    if(inValidEmail($email) !== false) {
        header("location: ../blog_signup.php?error=invalidemail");
        exit();
    }
    if(pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../blog_signup.php?error=passwordsdontmatch");
        exit();
    }
    if(uidExists($conn, $username, $email) !== false) {
        header("location: ../blog_signup.php?error=usernametaken");
        exit();
    }
    createUser($conn, $name, $email, $username, $pwd);
} else {
    header("location: ../blog_signup.php");
    exit();
}