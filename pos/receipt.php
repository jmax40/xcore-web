<?php
// Include TCPDF library
require_once 'TCPDF-main/tcpdf.php';


session_start(); // Start the session
include('../session.php');


// Assuming you have already connected to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sms";

// Function to validate the input format of the ID
function validateID($id) {
    // Validate the ID to ensure it consists of alphanumeric characters only
    if(!preg_match('/^[a-zA-Z0-9]+$/', $id)) {
        return false; // Invalid input format
    }
    return true; // Valid input format
}

// Check if ID is provided in the GET request
if(isset($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $id = $_GET['id'];


// Set the timezone to UTC
date_default_timezone_set('UTC');
// Get the current date and time in UTC
$date = date("m-j-Y");
$time = date("H:i"); // Use 24-hour format for time

// Add 8 hours to adjust to UTC+08
$time = date("g:i A", strtotime($time) + 17 * 3600);






    // Validate the ID format
    if(!validateID($id)) {
        die("Invalid input format for ID."); // Exit script if input format is invalid
    }

    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Query to select data from your database table based on the ID
    $query = "SELECT productname, qty, total FROM purchaseitem WHERE invoiceid = ? ";

    // Prepare the query
    $stmt = $connection->prepare($query);

    // Bind the ID parameter
    $stmt->bind_param("s", $id);

    // Execute the query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Initialize items variable to store HTML for items
    $items = '';

    // Loop through the results and append HTML for each item
    while ($row = $result->fetch_assoc()) {
        // Access each row's data
        $description = $row['productname'];
        $quantity = $row['qty'];
        $total = $row['total'];
        $space = " ";

        // Append HTML for the item
        $items .= "<div style=\"display: flex; justify-content: space-between;\">
                        <span style=\"flex-grow: 2;\">$quantity *&nbsp; $description</span> <br>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"flex-grow: 1; margin-right: auto;\"> Php$total</span>
                    </div>";
    }

    // Free the result set
    $result->free_result();

    // Close the statement
    $stmt->close();

    // Close the database connection
    $connection->close();

    // Create HTML content
    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>X-CORE Receipt</title>
        <style>
            /* Your CSS styles here */

            body {
                font-family: Courier, monospace; /* Use Courier font family */
                font-size: 1em; /* Set font size relative to the default font size */
            }

            .thankyou {
                text-align: center; /* Center-align the text */
            }
        </style>
    </head>
    <body>

       <img src="../img/xcore.png" alt="Image Description" style="width: 600px; height: auto;">
       <div class="container2">
           TRANS.CODE:  '.$id.' <br>
           POS CASHER: '.$fullname.'   <br>
           DATE/TIME: '.$date.' '.$time.' <hr>
        Qty | Description | Total <hr>
       </div>




       '.$items.'

       <hr>
       <div class="container" style="text-align: right;">
           Amount:100.00 &nbsp;&nbsp;<br>
           Tax:1.00 &nbsp;&nbsp;<br>
           Discount:2.00 &nbsp;&nbsp;<br>
           No. Items:1 &nbsp;&nbsp;<br>
           
       </div>
 <hr>
       <br>

       <div class="thankyou">
           Thank you, Come Again !!!
       </div>
    </body>
    </html>';

    // Initialize TCPDF
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // Set document information
    $pdf->SetCreator('Parcon Hospital');
    $pdf->SetAuthor('Parcon Hospital');
    $pdf->SetTitle('X-CORE Receipt');
    $pdf->SetSubject('Medical Certification');
    $pdf->SetKeywords('Medical, Certification');

    // Set margins
    $pdf->SetMargins(5, 5, 5); // Adjust margins as needed
    $pdf->SetAutoPageBreak(true, 10); // Adjust as needed

    // Add a page with customized dimensions
    $pdf->AddPage('P', array(150,  80)); // Adjust width and height as needed

    // Set font and font size for the content
    $pdf->SetFont('helvetica', '', 10); // Adjust font and size as needed

    // Write HTML content
    $pdf->writeHTML($html, true, false, true, false, '');

    // Output the generated PDF to the browser (inline display)
    $pdf->Output('X-CORE_Receipt.pdf', 'I');
} else {
    echo "ID parameter is missing.";
}
?>
