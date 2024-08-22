<?php

require_once('connection.php');

$user_id = $_SESSION['id'];


$query = "SELECT * FROM booking, nursery, user WHERE nursery.nursery_id = booking.nursery_id and user.user_id = booking.user_id and booking.user_id = $user_id";
$result = $conn->query($query);

if ($result->num_rows > 0) {

    echo '
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Person Name</th>
                <th>Nursery Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Date</th>
                <th>Status</th>
                

            </tr>
        </thead>
        <tbody>';


    while ($row = $result->fetch_assoc()) {
        $status_text = $row['status'] > 0 ? 'PAID' : 'NOT PAID';
        $status_color = $row['status'] > 0 ? 'green' : 'orange';
        echo '
        <tr>
            <td>' . htmlspecialchars($row['name']) . '</td>
            <td>' . htmlspecialchars($row['nursery_name']) . '</td>
            <td>' . htmlspecialchars($row['address']) . '</td>
            <td>' . htmlspecialchars($row['phone']) . '</td>
            <td>' . htmlspecialchars($row['date']) . '</td>
            <td style="color: ' . htmlspecialchars($status_color) . ';">' . htmlspecialchars($status_text) . '</td>
        </tr>';
    }
    


    echo '
        </tbody>
    </table>';
} else {
    echo '<div class="alert alert-info" role="alert">No bookings found.</div>';
}

$conn->close();
?>
