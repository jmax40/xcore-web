<?php
$servername = "localhost"; // Your server name (localhost)
$username = "root"; // Default username for localhost
$password = ""; // Default password for localhost (usually empty)
$dbname = "sms"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
