<?php
// Define your database connection credentials
require '../connection.php';

// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the data sent via AJAX or form submission
    $itemcode = isset($_POST["itemcode"]) ? $_POST["itemcode"] : "";
    $productname = isset($_POST["productname"]) ? $_POST["productname"] : "";
    $price = isset($_POST["price"]) ? $_POST["price"] : "";
    $quantity = isset($_POST["quantity"]) ? $_POST["quantity"] : "";
    $total = isset($_POST["total"]) ? $_POST["total"] : "";
    $customer = isset($_POST["customer"]) ? $_POST["customer"] : "";
    $invoiceid = isset($_POST["trans"]) ? $_POST["trans"] : "";
    $casher = isset($_POST["casher"]) ? $_POST["casher"] : "";
  
    // Assign default values to additional variables
    
  $date = date("d-m-Y");
$month = date("m-Y");
$year = date("Y");

    $type = "RETAIL";
    $time = date("H:i:s");
    $status = "IN";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO purchaseitem (itemcode, productname, price, qty, total, customer, date, month, year, type, casher, time, invoiceid, status) VALUES ('$itemcode', '$productname', '$price', '$quantity', '$total', '$customer', '$date','$month','$year', '$type', '$casher', '$time', '$invoiceid', '$status')";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        // Insertion successful
        $response = array("success" => true, "message" => "Data inserted into the database.");

        // Prepare SQL statement to update the quantity in the database
        $update_sql = "UPDATE product SET quantity = quantity - '$quantity' WHERE itemcode = '$itemcode'";

        // Execute the update SQL statement
        if ($conn->query($update_sql) === TRUE) {
            // Update successful
            $response['message'] .= " Quantity updated successfully.";
        } else {
            // Update failed
            $response = array("success" => false, "message" => "Error updating quantity: " . $conn->error);
        }
    } else {
        // Insertion failed
        $response = array("success" => false, "message" => "Error: " . $conn->error);
    }

    // Close database connection
    $conn->close();

    // Send the response back to the client-side JavaScript
    echo json_encode($response);
    exit; // Terminate the script after sending the response
} else {
    // If the request is not a POST request, return an error
    echo json_encode(array("success" => false, "message" => "Error: Only POST requests are allowed."));
    exit;
}
?>
