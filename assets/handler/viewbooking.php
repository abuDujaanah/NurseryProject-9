<?php
session_start();
require_once('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Retrieve and sanitize input data
    $nursery_id = $_POST['nursery_id'] ?? null;
    $user_id = $_SESSION['id'] ?? null;
    $name = $_POST['fullName'] ?? null;
    $date = date('Y-m-d'); // Set current date in 'YYYY-MM-DD' format
    $status = "pending";
    $phone = $_POST['phoneNumber'] ?? null;

    // Validate input data
    if ($nursery_id && $user_id && $name && $date && $status && $phone) {
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO booking (nursery_id, user_id, name, date, status, phone) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("iissss", $nursery_id, $user_id, $name, $date, $status, $phone);

        // Execute SQL statement
        if ($stmt->execute()) {
            echo "New record created successfully";
            header("Location: ../../Pages/view-nursery.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "All fields are required.";
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
