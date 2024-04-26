<?php
if (!isset($_SESSION['id'])) {
    // Handle as needed, for example, display an error message
    echo "Error: User is not logged in.";
    // You can also choose to redirect the user to the login page if needed
    // header('Location: index.php');
    exit();
}

// Assign the id from session to a variable
$id = $_SESSION['id'];

include('../connection.php');

// Initialize $fullname variable
$fullname = '';

// Check if $id is set before using it in the query
if(isset($id)) {
    // Retrieve user details based on id
    $query = "SELECT fname, mname, lname FROM outaccount WHERE id = $id";
    $result = mysqli_query($conn, $query);

    // Check if query was successful
    if ($result) {
        // Fetch the row
        $row = mysqli_fetch_assoc($result);   

        // Check if a row is found
        if ($row) {
            // Assign fname, mname, and lname to $fullname
            $fullname = $row['fname'] . " " . $row['mname'] . " " . $row['lname'];
        }

        // Free result set
        mysqli_free_result($result);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Error: Session variable 'id' is not set.";
}

// Close connection
mysqli_close($conn);
?>