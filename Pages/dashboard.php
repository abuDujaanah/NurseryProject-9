<?php include '../assets/components/header.php';
include '../assets/components/sidebar.php';

require_once '../assets/handler/connection.php';

// Fetch total schools
$sql_schools = "SELECT COUNT(*) as total_schools FROM nursery";
$result_schools = $conn->query($sql_schools);
$total_schools = $result_schools->fetch_assoc()['total_schools'];

// Fetch total parents
$sql_parents = "SELECT COUNT(*) as total_parents FROM user WHERE role = 2";
$result_parents = $conn->query($sql_parents);
$total_parents = $result_parents->fetch_assoc()['total_parents'];

// Fetch total orders
$sql_orders = "SELECT COUNT(*) as total_orders FROM booking";
$result_orders = $conn->query($sql_orders);
$total_orders = $result_orders->fetch_assoc()['total_orders'];

// Fetch accepted orders
$sql_accepted = "SELECT COUNT(*) as accepted_orders FROM booking WHERE status = 1";
$result_accepted = $conn->query($sql_accepted);
$accepted_orders = $result_accepted->fetch_assoc()['accepted_orders'];

// Fetch rejected orders
$sql_rejected = "SELECT COUNT(*) as rejected_orders FROM booking WHERE status = 0";
$result_rejected = $conn->query($sql_rejected);
$rejected_orders = $result_rejected->fetch_assoc()['rejected_orders'];

// Funga connection
$conn->close();
?>




<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-blue"><b>Dashboard</b></h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#generatereport"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                All Schools</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_schools; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Available Parents</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_parents; ?></div>
                        </div>
                        <div class="col-auto">
                           <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">All Orders
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $total_orders; ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="abdy">
        <h3> <b>NURSERY SCHOOL</b<h3>

                <h5 style="color :black;text-align:center;">
                    Nursery school finding systems are mechanisms designed to help parents or guardians find suitable nursery schools for their children. These systems can be online platforms, apps, or informational resources that provide detailed information about different nursery schools, including their locations, facilities, curriculum, teaching staff, fees, admission process, and reviews from other parents.
                </h5>
                <h5 style="color :black;text-align:center;">
                    Nursery school finding system is a web application system that helps the parents or customers to interact within a system on getting services for making online application for applying and understand all process to get the service according to the problem.
                </h5>

                <div class="row">
                    <div class="col-md-4">
                        <img src="../assets/img/nursery 1.jpg" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="../assets/img/nursery2.jpg" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="../assets/img/nursery3.jpg" alt="">
                    </div>
                </div>
    </div>

    <!-- Content Row -->




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<div class="modal fade" id="generatereport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
        <table>
                    <h1>Nursery School Report</h1>
                        
                        <tr>
                            <td>School Registered</td>
                            <td><?php echo $total_schools; ?></td>
                       </tr>
                        <tr>
                            <td>Available Parents</td>
                            <td><?php echo $total_parents; ?></td>
                        </tr>
                        <tr>
                            <td>All Orders</td>
                            <td><?php echo $total_orders; ?></td>
                        </tr>
                        <tr>
                            <td>Accepted Orders</td>
                            <td><?php echo $accepted_orders; ?></td>
                        </tr>
                        <tr>
                            <td>Rejected Orders</td>
                            <td><?php echo $rejected_orders; ?></td>
                        </tr>
                    </table>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary bg-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php include '../assets/components/footer.php';
?>