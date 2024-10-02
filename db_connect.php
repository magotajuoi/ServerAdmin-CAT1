<?php
// db_connect.php
$servername = "localhost"; // Database server
$username = "root"; // Database username
$password = "12345"; // Database password
$dbname = "CAT1"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

