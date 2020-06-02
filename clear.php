<?php
require_once("includes/config.php");

$sql = "DELETE FROM `clicks`";
mysqli_query($conn, $sql);

header('Location: index.php');
die;
