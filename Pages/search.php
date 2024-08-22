<?php
// search.php

// Include your database connection
include '../config/db_connect.php';

// Get the search query from the form
$searchQuery = $_GET['query'];

// Determine the referring page
$referer = $_SERVER['HTTP_REFERER'];

// Check if the request came from the view-nursery page
if (strpos($referer, 'view-nursery.php') !== false) {
    header("Location: view-nursery.php?query=" . urlencode($searchQuery));
    exit();
} elseif (strpos($referer, 'dashboard.php') !== false) {
    header("Location: dashboard.php?query=" . urlencode($searchQuery));
    exit();
}
?>
