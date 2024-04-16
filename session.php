<?php
include('../connection.php');
// Check if the session variable is set
if (isset($_SESSION['id'])) {
    // Get the user's ID from the session
    $userId = $_SESSION['id'];

    // Query to fetch user details based on ID
    $query = "SELECT fname, mname, lname FROM outaccount WHERE id='$userId'";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        // Concatenate the first name, middle name, and last name
        $fullname = $row['fname'] . " " . $row['mname'] . " " . $row['lname'];
        // Display the full name
    } else {
        // User not found, handle accordingly
        echo "User not found.";
    }
} else {
    // Session ID not set, handle accordingly
    echo "Session ID not set. Please log in first.";
}
?>