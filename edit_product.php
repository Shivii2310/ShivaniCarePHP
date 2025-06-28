<?php
include 'dbconnection.php';

if (!isset($_GET['id'])) {
    die("Product ID not provided.");
}

$id = $_GET['id'];
$errors = [];
$success = "";

// Fetch existing product
$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result);

if (!$product) {
    die("Product not found.");
}

// Handle update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['productName'];
    $desc = $_POST['productDescription'];
    $price = $_POST['productPrice'];
    $category = $_POST['productCategory'];

    // Image upload (optional)
    if (!empty($_FILES['productImage']['name'])) {
        $image = $_FILES['productImage'];
        $imageName = time() . '_' . basename($image['name']);
        $targetPath = "uploads/" . $imageName;

        if (move_uploaded_file($image['tmp_name'], $targetPath)) {
            $updateImage = ", productImage = '$targetPath'";
        } else {
            $errors[] = "Image upload failed.";
        }
    } else {
        $updateImage = ""; // No update if no new image
    }

    if (empty($errors)) {
        $sql = "UPDATE products SET 
            productName = '$name',
            productDescription = '$desc',
            productPrice = '$price',
            productCategory = '$category'
            $updateImage
            WHERE id = $id";

        if (mysqli_query($conn, $sql)) {
            $success = "Product updated successfully!";
            header("Location: product_list.php");
            exit;
        } else {
            $errors[] = "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container">
        <h2>Edit Product</h2>

        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <?= implode('<br>', $errors) ?>
            </div>
        <?php endif; ?>

        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Product Name</label>
                <input type="text" name="productName" class="form-control" value="<?= htmlspecialchars($product['productName']) ?>" required>
            </div>
            <div class="mb-3">
                <label>Description</label>
                <textarea name="productDescription" class="form-control" required><?= htmlspecialchars($product['productDescription']) ?></textarea>
            </div>
            <div class="mb-3">
                <label>Price</label>
                <input type="number" step="0.01" name="productPrice" class="form-control" value="<?= $product['productPrice'] ?>" required>
            </div>
            <div class="mb-3">
            <label for="productCategory" class="form-label">Product Category</label>
            <select class="form-select" id="productCategory" name="productCategory" required style="width:50%">
              <option value="" disabled selected>Select a category</option>
              <option value="newarrivals" <?= (($_POST['productCategory'] ?? '') == 'newarrivals') ? 'selected' : '' ?>>New Arrivals</option>
              <option value="Makeup" <?= (($_POST['productCategory'] ?? '') == 'Makeup') ? 'selected' : '' ?>>Makeup</option>
              <option value="Skincare" <?= (($_POST['productCategory'] ?? '') == 'Skincare') ? 'selected' : '' ?>>Skincare</option>
              <option value="Haircare" <?= (($_POST['productCategory'] ?? '') == 'Haircare') ? 'selected' : '' ?>>Haircare</option>
              <option value="Fragrance" <?= (($_POST['productCategory'] ?? '') == 'Fragrance') ? 'selected' : '' ?>>Fragrance</option>
            </select>
          </div>
            <div class="mb-3">
                <label>Change Image (optional)</label>
                <input type="file" name="productImage" class="form-control">
            </div>
            <?php if (!empty($product['productImage'])): ?>
                <img src="<?= $product['productImage'] ?>" width="100">
            <?php endif; ?>
            <br><br>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="product_list.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
