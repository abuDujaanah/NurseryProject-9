<div class="col-md-6">
    <div class="form-group">
        <select id="staff" name="staff_id" class="form-control">
            <option value="">----Select Staff----</option>
            <?php

            require_once ('../assets/handler/connection.php');
            // Fetch staff data
            $query = "SELECT staff_id, name FROM staff";
            $result = $conn->query($query);
            if ($result->num_rows > 0) {
                $options = '';
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row['staff_id'] . '">' . $row['name'] . '</option>';
                }
            } else {
                $options = '<option value="">No staff available</option>';
            }
            $conn->close();
            ?>
        </select>
    </div>
</div>