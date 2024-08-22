<?php
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Unganisha na database
    $conn = new mysqli('localhost', 'root', '', 'nursery_school');

    // Angalia connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Set session variables
            $_SESSION['username'] = $row['username'];
            $_SESSION['user_id'] = $row['id'];
            header("Location: dashboard.php");
            exit;
        } else {
            echo "Invalid password";
        }
    } else {
        echo "No user found";
    }

    $conn->close();
}
?>
