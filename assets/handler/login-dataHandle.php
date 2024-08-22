<?php
session_start();

if (isset($_POST['login'])) {
    require_once('connection.php');

    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT user_id, full_name, role, password FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);

    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $full_name, $role, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $full_name;
            $_SESSION['role'] = $role;

            header("Location: ../../Pages/dashboard.php");
            exit();
        } else {
            echo "<script>alert('Invalid password.');</script>";
        }
    } else {
        echo "<script>alert('No user found with that email address.');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
