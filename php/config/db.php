<?php

$host = "localhost";
$username = "root";
$password = "Root@123";
$database = "bloghub";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>