<?php
session_start();

if (isset($_POST['submit'])) {
    require_once('connection.php');

    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }

    $full_name = $_POST['full_name'];
    $street_name = $_POST['street_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO user (full_name, street_name, phone, email, role, password) VALUES (?, ?, ?, ?, ?, ?)");
    $role = 2;
    $stmt->bind_param("ssssis", $full_name, $street_name, $phone, $email, $role, $hashed_password);

    if ($stmt->execute()) {
        $_SESSION['name'] = $full_name;
        $_SESSION['role'] = $role;

        header("Location: ../../Pages/dashboard.php");
        exit();
    } else {
        echo "<script>alert('Error: ' . $stmt->error);</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
