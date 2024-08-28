<?php
function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat) ) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMathch($pwd , $pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username , $email) {
    $sql = "SELECT * FROM  registered_user WHERE userUid = ? OR eMail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        return false;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO  registered_user(firstName, eMail, userUId, password) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../login.php?error=none");
    exit();
}

// function createUser($conn, $name, $dob, $username, $pwd) {
//     $sql = "INSERT INTO  registered_user(firstName, dateOfBirth, userUId, password) VALUES (?,?,?,?);";
//     $stmt = mysqli_stmt_init($conn);
//     if (!mysqli_stmt_prepare($stmt, $sql)) {
//         header("Location:../signup.php?error=stmtfailed");
//         exit();
//     }
//     $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
//     mysqli_stmt_bind_param($stmt, "ssss", $name, $dob, $username, $hashedPwd);
//     mysqli_stmt_execute($stmt);
//     mysqli_stmt_close($stmt);
//     header("Location:../login.php?error=none");
//     exit();
// }

function emptyInputLogin($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn,$username, $pwd) {
    $uidExists = uidExists($conn, $username , $username);
    if ($uidExists === false) {
        header("location:../signup.php?error=wronglogin1");
        exit();
    }
    $pwdHashed = $uidExists["password"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header('Location:../signup.php?error=wronglogin2');
        exit();
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["uid"];
        $_SESSION["useruid"] = $uidExists["userUid"];
        $_SESSION["username"] = $uidExists["firstName"];
        header("Location: ../index.php");
        exit();
    }

}

// driver----

function loginDriver($conn,$username, $pwd) {
    $DriverUidExists = DriverUidExists($conn, $username , $username);
    if ($DriverUidExists === false) {
        header("location:../driverSignup.php?error=wronglogin3");
        exit();
    }
    $pwdHashed = $DriverUidExists["password"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header('Location:../driverSignup.php?error=wronglogin4');
        exit();
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $DriverUidExists["driverUid"];
        $_SESSION["useruid"] = $DriverUidExists["firstName"];
        $_SESSION["drivername"] = $DriverUidExists["driverUserName"];
        header("Location: ../index.php");
        exit();
    }

}

function DriverUidExists($conn, $username , $email) {
    $sql = "SELECT * FROM  registered_Driver WHERE driverUserName = ? OR eMail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../driverSignup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        return false;
    }

    mysqli_stmt_close($stmt);
}

function createDriver($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO  registered_driver(firstName, eMail, driverUserName, password) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../driverSignup.php?error=stmtfailed");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../driverLogin.php?error=none");
    exit();
}


























