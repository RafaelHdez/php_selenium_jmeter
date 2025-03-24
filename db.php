<?php

$host = "localhost";
$user = "admin";
$password = "admin1234";
$db = "simple-login";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}