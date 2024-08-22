<?php
include '../assets/components/header.php';
include '../assets/components/sidebar.php';
?>

<body class="bg-gradient-primary">
    <div class="container">
        <form class="user" action="../assets/handler/add_nursery.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nursery_name" name="nursery_name"
                            placeholder="NURSERY NAME" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="contact_information"
                            name="contact_information" placeholder="CONTACT INFORMATION" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="file" class="form-control form-control-user" id="nursery_img" name="nursery_img"
                            accept=".jpg,.png,.jpeg" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="address" name="address"
                            placeholder="ADDRESS" required>
                    </div>
                </div>

                <?php include '../assets/components/chooseStaff.php'; ?>
                <div class="col-md-6">
                <button type="submit" class="btn btn-primary btn-user btn-block" name="submit">Submit</button>
            </div>
            </div>

           
        </form>

    </div>

    <?php
    include '../assets/components/footer.php';
    ?>
    <style>
        
    </style>
</body>