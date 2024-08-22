<?php
require_once('connection.php');

session_start();

if (isset($_GET['id'])) {
    $booking_id = intval($_GET['id']);

    if ($booking_id > 0) {
       
        $stmt = $conn->prepare("UPDATE booking SET status = 1 WHERE booking_id = ? AND status = 0");
        $stmt->bind_param("i", $booking_id);

        if ($stmt->execute()) {
           
            if ($stmt->affected_rows > 0) {
                
                header("Location: ../../Pages/booking.php?status=success");
                exit();
            } else {
                
                header("Location: ../../Pages/booking.php?status=notfound");
                exit();
            }
        } else {
            
            header("Location: ../../Pages/booking.php?status=error");
            
        }

        
        $stmt->close();
    } else {
        
        header("Location:  ../../Pages/booking.php?status=invalid");
        exit();
    }
} else {
    
    header("Location:  ../../Pages/booking.php?status=noid");
   
}

// Close the database connection
$conn->close();
?>
