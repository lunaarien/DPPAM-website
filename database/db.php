<?php
$host = "localhost";
$username = "root"; // Change if using another username
$password = ""; // Change if password is set
$database = "dppam"; // Change to your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
