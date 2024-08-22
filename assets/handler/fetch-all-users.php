<?php

require_once ('connection.php');


$query = "SELECT user_id, full_name, date, street_name, phone, email FROM user WHERE role = 2";
$result = $conn->query($query);

if ($result->num_rows > 0) {

    echo '
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Street Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>';


    while ($row = $result->fetch_assoc()) {
        echo '
        <tr>
            <td>' . htmlspecialchars($row['full_name']) . '</td>
            <td>' . htmlspecialchars($row['date']) . '</td>
            <td>' . htmlspecialchars($row['street_name']) . '</td>
            <td>' . htmlspecialchars($row['phone']) . '</td>
            <td>' . htmlspecialchars($row['email']) . '</td>
            <td>
                <!--<button type="button" class="btn btn-primary btn-sm">Edit</button>-->
                <button type="button" class="btn btn-danger bg-danger btn-sm" data-toggle="modal" data-target="#modal_' . htmlspecialchars($row['user_id']) . '">Delete</button>
            </td>
        </tr>';


        echo '
        <div class="modal fade" id="modal_' . htmlspecialchars($row['user_id']) . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">DELETE USER</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            Are you sure you want to delete ' . htmlspecialchars($row['full_name']) . ' permanently?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary bg-secondary" data-dismiss="modal">No</button>
                        <a href="../assets/handler/delete-user.php?id=' . htmlspecialchars($row['user_id']) . '" class="btn btn-danger bg-danger">Yes</a>
                    </div>
                </div>
            </div>
        </div>';
    }


    echo '
        </tbody>
    </table>';
} else {
    echo '<div class="alert alert-info" role="alert">No users found.</div>';
}

$conn->close();
?>
