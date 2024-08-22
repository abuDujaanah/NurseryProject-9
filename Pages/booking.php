<?php include '../assets/components/header.php';
include '../assets/components/sidebar.php'
    ?>



<body class="bg-gradient-primary">
    <!-- Begin Page Content -->
    <div class="container">
        <h1>All Bookings</h1>

        <!-- Users Table -->
        <?php include '../assets/handler/fetch_booking.php'; ?>
    </div>




    <?php include '../assets/components/footer.php'; ?>