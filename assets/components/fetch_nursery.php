

<div class="container mt-5">
    <div class="row">
        <?php
        require_once('../assets/handler/connection.php');

        // Fetch nursery data
        $query = "SELECT * FROM nursery";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '
                <div class="col-md-4 mb-4">
                    <div class="card shadow text-center" id="nursery">
                        <img src="../assets/uploads/' . htmlspecialchars($row['img']) . '" class="card-img-top" alt="Nursery Image">
                        <div class="card-body">
                            <h5 class="card-title">' . htmlspecialchars($row['nursery_name']) . '</h5>
                            <p class="card-text">
                                <strong>Address:</strong> ' . htmlspecialchars($row['address']) . '<br>
                                <strong>Contact Information:</strong> ' . htmlspecialchars($row['contact_information']) . '
                            </p>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#AAA_' . htmlspecialchars($row['nursery_id']) . '">BOOK</a>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <form class="user" action="../assets/handler/viewbooking.php" method="POST">
                    <div class="modal fade" id="AAA_' . htmlspecialchars($row['nursery_id']) . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">BOOK ' . htmlspecialchars($row['nursery_name']) . '</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" readonly class="form-control form-control-user" id="name" name="fullName" value="' . htmlspecialchars($_SESSION['name']) . '" placeholder="NAME" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user" id="phone" name="phoneNumber" placeholder="PHONE" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control form-control-user" id="nursery_id" value="' . htmlspecialchars($row['nursery_id']) . '" name="nursery_id" required>
                                                </div>
                                            </div>
                        
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user" id="paid" name="paid" value=" PAY TIGO PESA 0629763287" disabled required>
                                                </div>
                                            </div>
 

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control form-control-user" id="user_id" value="' . htmlspecialchars($_SESSION['id']) . '" name="user_id" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary bg-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="register" class="btn btn-primary">BOOK HERE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>';
            }
        } else {
            echo "No nurseries found.";
        }

        $conn->close();
        ?>
    </div>
</div>
