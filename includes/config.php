<?php
$host = "db_host";
$user = "db_user";
$password = "db_password";
$database = "db_database";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
