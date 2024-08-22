<?php
// assign_role.php

if (isset($_POST['assign_role'])) {
    $user_id = $_POST['user_id'];
    $role_id = $_POST['role_id'];

    // Unganisha na database
    $conn = new mysqli('localhost', 'root', '', 'nursery_school');

    // Angalia connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO user_roles (user_id, role_id) VALUES ('$user_id', '$role_id')";

    if ($conn->query($sql) === TRUE) {
        echo "Role assigned successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
