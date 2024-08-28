<?php
$serverName = "localhost";
$dbUsername = "OCTR123";
$dbPassword = "";
$dbName = "octr";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed : " .mysqli_connect_error());
}