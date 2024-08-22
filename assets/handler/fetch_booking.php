<?php

require_once ('connection.php');


$query = "SELECT * FROM booking, nursery WHERE nursery.nursery_id = booking.nursery_id";
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
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>';

    
    while ($row = $result->fetch_assoc()) {
        $status_text = $row['status'] > 0 ? 'Accepted' : 'Pending';
        $status_color = $row['status'] > 0 ? 'green' : 'orange';
        echo ' 
        <tr>
            <td>' . htmlspecialchars($row['name']) . '</td>
            <td>' . htmlspecialchars($row['nursery_name']) . '</td>
            <td>' . htmlspecialchars($row['address']) . '</td>
            <td>' . htmlspecialchars($row['phone']) . '</td>
            <td>' . htmlspecialchars($row['date']) . '</td>
            <td style="color: ' . htmlspecialchars($status_color) . ';">' . htmlspecialchars($status_text) . '</td>
            <td><a href="../assets/handler/approve-booking.php?id=' . htmlspecialchars($row['booking_id']) . '" class="btn btn-primary">Approve</a></td>
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