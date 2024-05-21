<?<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['message' => 'Connection failed: ' . $conn->connect_error]));
}

// Get POST data
$itemscode = $_POST['itemscode'];
$voidQuantity = $_POST['voidQuantity'];

// Sanitize inputs (assuming itemscode is alphanumeric)
$itemscode = mysqli_real_escape_string($conn, $itemscode);

// Validate inputs (assuming voidQuantity is a positive integer)
if (empty($itemscode) || !is_numeric($voidQuantity) || $voidQuantity < 1) {
    echo json_encode(['message' => 'Invalid item code or quantity.']);
    exit;
}

// Prepare and bind the statement
$stmt = $conn->prepare("UPDATE purchaseitem SET qty = qty - ? WHERE itemcode = ?");
$stmt->bind_param("is", $voidQuantity, $itemscode);

// Execute the statement
if ($stmt->execute()) {
    // Query executed successfully, include response data
    $data = [
        'message' => 'Items voided successfully.',
        'itemscode' => $itemscode,
        'voidQuantity' => $voidQuantity
    ];

    echo json_encode($data);
} else {
    echo json_encode(['message' => 'Error: ' . $conn->error]);
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
