<?php
$servername = "localhost";
$username = "u656401271_user";
$password = "password";
$dbname =   "u656401271_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>