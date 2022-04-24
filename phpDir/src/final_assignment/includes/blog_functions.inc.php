<?php
// Check for empty inputs
function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    $result=null;
    if(empty($name) || empty($email)
    || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } else {
        $result = false;
    } return $result;
}
// Check for valid username
function inValidUid($username) {
    $result = null;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    } return $result;
}
// Email validation
function inValidEmail($email) {
    $result = null;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }return $result;
}
// Check password match
function pwdMatch($pwd, $pwdRepeat) {
    if ($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    } return $result;
}
// Check username unique
function uidExists($conn, $username, $email){
    $sql = "SELECT * from blogUsers where userUid = ? or userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../blog_signup.php?error=stmtfailed");
        exit();
    } 
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
// Create user
function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT into blogUsers (userName, userEmail, userUid, userPwd) values (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../blog_signup.php?error=stmtfailed");
        exit();
    } 
    // hashing password
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../blog_signup.php?error=none");
    exit();
}
// Login: Check for empty inputs 
function emptyInputLogin($username, $pwd) {
    $result=null;
    if(empty($username) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    } return $result;
}
function loginUser($conn, $username,$pwd) {
    $uidExists = uidExists($conn, $username, $username);
    if($uidExists == false) {
        header("location: ../blog_login.php?error=wronglogin");
        exit();
    }
    $pwdHashed = $uidExists["userPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);
    if($checkPwd == false) {
        header("location: ../blog_login.php?error=wronglogin");
    } else if ($checkPwd == true) {
        session_start();
        $_SESSION["userid"] = $uidExists["userId"];
        $_SESSION["useruid"] = $uidExists["userUid"];
        header("location: ../blog_index.php");
        exit();
    }
}