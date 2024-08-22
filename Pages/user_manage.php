<?php include '../assets/components/header.php';
include '../assets/components/sidebar.php';


if (isset($_GET['status'])) {
  // Sanitize and validate the status
  $status = htmlspecialchars($_GET['status']); // Use htmlspecialchars to avoid XSS attacks

  // Display message based on the status
  if ($status === 'success') {
      echo '<div class="alert alert-success" role="alert">User deleted successfully.</div>';
  } elseif ($status === 'error') {
      echo '<div class="alert alert-danger" role="alert">Error deleting user.</div>';
  } elseif ($status === 'invalid') {
      echo '<div class="alert alert-warning" role="alert">Invalid user ID.</div>';
  } else {
      echo '<div class="alert alert-info" role="alert">Unknown status.</div>';
  }
}

  ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Management</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 950px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    table,
    th,
    td {
      border: 1px solid #ccc;
    }

    th,
    td {
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
      color: #333;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #e0e0e0;
      cursor: pointer;
    }

    .btn {
      display: inline-block;
      padding: 8px 16px;
      text-decoration: none;
      background-color: #007bff;
      color: #fff;
      border-radius: 4px;
    }

    .btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>

  <div class="container-fluid">
    <h1>All People Registed</h1>

<!-- Users Table -->
<?php include '../assets/handler/fetch-all-users.php'; ?>
  </div>

</body>

</html>



<?php include '../assets/components/footer.php'; ?>