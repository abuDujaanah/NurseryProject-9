<?php
// check_user_role.php

function checkUserRole($user_id, $role_name) {
    // Unganisha na database
    $conn = new mysqli('localhost', 'root', '', 'nursery_school');

    // Angalia connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT r.role_name FROM roles r 
            JOIN user_roles ur ON r.id = ur.role_id 
            WHERE ur.user_id = '$user_id' AND r.role_name = '$role_name'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }

    // $conn->close();-=
}
?>
