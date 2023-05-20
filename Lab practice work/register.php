<?php
// Include the database connection file
require_once 'db_connection.php';

// Retrieve form data
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];

// Create a table in the database to store the form data
$sql = "CREATE TABLE IF NOT EXISTS students (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    gender VARCHAR(10) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    // Insert form data into the table
    $insert_sql = "INSERT INTO students (full_name, email, gender) VALUES ('$full_name', '$email', '$gender')";

    if ($conn->query($insert_sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . $conn->error;
    }
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
