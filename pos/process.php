<?php
require '../connection.php';




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch search term from the GET request
$searchTerm = $_GET['search'];

// Prepare SQL statement (Replace 'your_table_name' with your actual table name and 'your_search_column' with the column you want to search)
$sql = "SELECT `itemcode`, `productname`, `quantity`, `sellingprice` 
        FROM `product` 
        WHERE `itemcode` LIKE '%$searchTerm%' OR `productname` LIKE '%$searchTerm%'";


// Execute SQL statement
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Store results in an array
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = array(
            $row['itemcode'], 
            $row['productname'], // Replace 'column1', 'column2', etc., with your actual column names
            $row['quantity'],
            $row['sellingprice']
            // Add more columns as needed
        );
    }
    // Output data in JSON format
    echo json_encode($data);
} else {
    echo "0 results";
}

// Close database connection
$conn->close();
?>
