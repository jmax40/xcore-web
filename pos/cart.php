







<?php
// Establish database connection
require '../connection.php';

session_start(); // Start the session
include('../session.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Fetch data from the database for the specific ID
$sql = "SELECT itemcode, productname, qty, price, total FROM purchaseitem WHERE status = 'IN' AND casher = '$fullname' ORDER BY ID DESC LIMIT 15 ";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    // Loop through each row
    while ($row = $result->fetch_assoc()) {
        // Store fetched data in $data array
        $data[] = $row;
    }
}

// Close database connection
$conn->close();

// Output data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
