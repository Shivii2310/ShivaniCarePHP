<?php
include 'dbconnection.php';

if (!isset($_GET['id'])) {
    die("Product ID not provided.");
}

$id = $_GET['id'];

// Optionally delete image from folder too
$result = mysqli_query($conn, "SELECT productImage FROM products WHERE id = $id");
$row = mysqli_fetch_assoc($result);
if ($row && file_exists($row['productImage'])) {
    unlink($row['productImage']);
}

$sql = "DELETE FROM products WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    header("Location: product_list.php");
    exit;
} else {
    echo "Error deleting product: " . mysqli_error($conn);
}
