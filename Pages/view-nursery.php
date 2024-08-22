<?php include '../assets/components/header.php';
include '../assets/components/sidebar.php'
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Available Nursery Schools</h6>

    </div>
    <div class="row mt-3 ml-2">
        <?php include '../assets/components/fetch_nursery.php'; ?>
    </div>
</div>









<style>
    .nursery-cards-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    #nursery {
        width: 300px;
    }

    .nursery-card h3 {
        margin-top: 0;
    }

    .btn {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #45a049;
    }
</style>
<?php include '../assets/components/footer.php'; ?>