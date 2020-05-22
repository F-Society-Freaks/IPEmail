<?php
require_once "includes/config.php";

header('Content-Type: image/gif');
readfile('tracking.gif');

$ip = $_SERVER['REMOTE_ADDR'];

if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip2 = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip2 = "Not found";
}

if (isset($_SERVER['HTTP_USER_AGENT'])) {
    $ug = $_SERVER['HTTP_USER_AGENT'];
} else {
    $ug = "Not found";
}

$sql = "INSERT INTO `clicks`(`ip`, `ip2`, `ug`) VALUES ('" . $ip . "', '" . $ip2 . "', '" . $ug . "')";
mysqli_query($conn, $sql);
