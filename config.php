<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "real estate"; // Update the database name here

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
