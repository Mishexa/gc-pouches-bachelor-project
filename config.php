<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "gc pouches";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed");
}

?>