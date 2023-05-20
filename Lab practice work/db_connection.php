<?php
$servername = "localhost";
$username = "root";
$password = "y2MbpkT[)ZQPej[T~";
$dbname = "students";

// Create a new MySQL database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
