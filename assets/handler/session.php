<?php
if (!isset($_SESSION['id']) && !isset($_SESSION['name'])) {
    header("Location: ../index.php");
    exit();
}
