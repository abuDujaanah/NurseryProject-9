<?php
require_once('connection.php');


if (isset($_GET['id'])) {
    
    $user_id = intval($_GET['id']); 

    if ($user_id > 0) {
        
        $stmt = $conn->prepare("DELETE FROM user WHERE user_id = ?");
        $stmt->bind_param("i", $user_id);

        
        if ($stmt->execute()) {
            
            header("Location: ../../Pages/user_manage.php?status=success");
            exit();
        } else {
            
            header("Location: ../../Pages/user_manage.php?status=error");
        }

        
        $stmt->close();
    } else {
        header("Location: ../../Pages/user_manage.php?status=invalid");

    }
} else {
    header("Location: ../../Pages/user_manage.php?status=");
    exit();
}


$conn->close();
?>