<?php
session_start();

if (isset($_POST['submit'])) {
    require_once('connection.php');

    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }

    $nursery_name = $_POST['nursery_name'];
    $contact_information = $_POST['contact_information'];
    $address = $_POST['address'];
    $staff_id = $_POST['staff_id'];

 
    if (isset($_FILES['nursery_img']) && $_FILES['nursery_img']['error'] == 0) {
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["nursery_img"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $imgName = basename($_FILES["nursery_img"]["name"]);

 
        $allowed_types = ['jpg', 'jpeg', 'png'];
        if (in_array($imageFileType, $allowed_types)) {
            if (move_uploaded_file($_FILES["nursery_img"]["tmp_name"], $target_file)) {
                $nursery_img = $imgName;
            } else {
                echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
                exit();
            }
        } else {
            echo "<script>alert('Sorry, only JPG, JPEG, & PNG files are allowed.');</script>";
            exit();
        }
    } else {
        echo "<script>alert('File upload error or no file uploaded.');</script>";
        exit();
    }


    $stmt = $conn->prepare("INSERT INTO `nursery` (`nursery_name`, `address`, `contact_information`, `img`, `staff_id`) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $nursery_name, $address, $contact_information, $nursery_img, $staff_id);


    if ($stmt->execute()) {
        header("Location: ../../Pages/view-nursery.php");
        exit();
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
        error_log($stmt->error);
    }


    $stmt->close();

  
    $conn->close();
}
?>
