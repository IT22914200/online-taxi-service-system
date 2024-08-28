<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["driverUserName"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $emptyInput = emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat);
    $invalidUid = invalidUid($username);
    $invalidEmail = invalidEmail($email);
    $pwdMatch = pwdMathch($pwd , $pwdRepeat);
    $DriverUidExists = DriverUidExists($conn, $username , $email);

    if ($emptyInput !== false) {
        header("Location:../driverSignup.php?error=emptyinput");
        exit();
    }
    if ($invalidUid !== false) {
        header("Location:../driverSignup.php?error=invaliduid");
        exit();
    }
    if ($invalidEmail !== false) {
        header("Location:../driverSignup.php?error=invalidemail");
        exit();
    }
    if ($pwdMatch !== false) {
        header("Location:../driverSignup.php?error=passwordsdontmatch");
        exit();
    }
    if ($DriverUidExists !== false) {
        header("Location:../driverSignup.php?error=usernametaken");
        exit();
    }

    createDriver($conn, $name, $email, $username, $pwd);
    
} 
else {
    header('Location:../driverLogin.php');
    exit();
}
