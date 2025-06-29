<?php
session_start();
include 'dbconnection.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: SignIn.php");
    exit;
}

if (isset($_GET['id'])) {
    $user_id = $_SESSION['user_id'];
    $product_id = intval($_GET['id']);

    // Get full product details
    $productQuery = "SELECT * FROM products WHERE id = $product_id";
    $productResult = mysqli_query($conn, $productQuery);
    $product = mysqli_fetch_assoc($productResult);

    if (!$product) {
        echo "Invalid product.";
        exit;
    }

    $product_name = mysqli_real_escape_string($conn, $product['productName']);
    $product_price = $product['productPrice'];
    $product_image = mysqli_real_escape_string($conn, $product['productImage']);
    $product_size = '15 ml'; // Default size; can be passed via GET/POST if dynamic

    // Check if already in cart
    $checkQuery = "SELECT * FROM cart_items WHERE user_id = $user_id AND product_id = $product_id AND product_size = '$product_size'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        mysqli_query($conn, "UPDATE cart_items SET quantity = quantity + 1 WHERE user_id = $user_id AND product_id = $product_id AND product_size = '$product_size'");
    } else {
        mysqli_query($conn, "INSERT INTO cart_items (product_id, product_name, product_price, product_image, product_size, quantity, user_id, created_at, updated_at)
            VALUES ($product_id, '$product_name', $product_price, '$product_image', '$product_size', 1, $user_id, NOW(), NOW())");
    }

    header("Location: cart.php");
    exit;
}
?>
