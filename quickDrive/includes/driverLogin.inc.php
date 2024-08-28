<?php
if (isset($_POST["submit"])) {
    $username = $_POST["driverUsername"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header('Location: driverLogin.php?error=emptyinput');
        exit();
    }

    loginDriver($conn, $username, $pwd);
} 
else {
    header('Location:../driverLogin.php');
    exit();
}
