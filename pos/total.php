<?php


require '../connection.php';


session_start(); // Start the session
include('../session.php');


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to calculate the sum of qty, price, and total where status is 'IN'
$sql = "SELECT SUM(qty) AS total_qty, SUM(price) AS total_price, SUM(total) AS total_amount FROM purchaseitem WHERE status = 'IN' AND casher = '$fullname'";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch the row as an associative array
    $row = $result->fetch_assoc();
    // Close the database connection
    $conn->close();
    // Output the data as JSON
    echo json_encode($row);
} else {
    // Close the database connection
    $conn->close();
    // Output an error message if the query fails
    echo json_encode(array('error' => 'Failed to retrieve data from the database'));
}
?>
