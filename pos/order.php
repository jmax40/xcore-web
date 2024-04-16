<?php
// Your database connection configuration
require '../connection.php'; // Assuming this file contains $servername, $username, $password, and $dbname


session_start(); // Start the session
include('../session.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind SQL statement with a parameter
$sql = "UPDATE purchaseitem SET status = 'DONED' WHERE status = 'IN' AND casher =  ? ";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $fullname); // Assuming $fullname is the user input

// Execute the statement
if ($stmt->execute()) {
    echo "Table updated successfully";
} else {
    echo "Error updating table: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
