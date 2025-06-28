<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'dbconnection.php';

$success = "";
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['productName']);
    $description = trim($_POST['productDescription']);
    $price = $_POST['productPrice'];
    $category = $_POST['productCategory'];

    // Validation
    if (empty($name) || empty($description) || empty($price) || empty($category)) {
        $errors[] = "Please fill all fields.";
    }

    // Image upload
    if (!empty($_FILES['productImage']['name'])) {
        $image = $_FILES['productImage'];
        $imageName = basename($image['name']);
        $targetDir = "uploads/";
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        $targetPath = $targetDir . time() . '_' . $imageName;
        $imageType = strtolower(pathinfo($targetPath, PATHINFO_EXTENSION));
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array($imageType, $allowedTypes)) {
            $errors[] = "Only JPG, JPEG, PNG, GIF files are allowed.";
        } else {
            if (!move_uploaded_file($image['tmp_name'], $targetPath)) {
                $errors[] = "Failed to upload image.";
            }
        }
    } else {
        $errors[] = "Image is required.";
    }

    // Insert into database
    if (empty($errors)) {
        $sql = "INSERT INTO products (productName, productDescription, productPrice, productCategory, productImage, created_at, updated_at)
                VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssdss", $name, $description, $price, $category, $targetPath);

        if (mysqli_stmt_execute($stmt)) {
            $success = "Product added successfully!";
            $_POST = [];
        } else {
            $errors[] = "Database error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Add Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-12 col-md-3 col-lg-2 bg-light vh-100 d-flex flex-column p-3">
      <button class="btn btn-info d-md-none mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-expanded="false" aria-controls="sidebarMenu">
        Toggle Menu
      </button>
      <div class="collapse d-md-block bg-light" id="sidebarMenu">
        <h4 class="mb-4">Menu</h4>
        <ul class="nav flex-column">
          <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="user_list.php">User List</a></li>
          <li class="nav-item"><a class="nav-link active" href="add_products.php">Product Entry</a></li>
          <li class="nav-item"><a class="nav-link" href="product_list.php">Product List</a></li>
          <li class="nav-item d-block d-sm-block d-md-none mt-5">
            <a class="nav-link btn btn-danger text-white" href="logout.php">Exit</a>
          </li>
          <li class="nav-item d-none d-md-block position-fixed bottom-0 mb-5">
            <a class="nav-link btn btn-danger text-white" href="logout.php">Exit</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Main Content -->
    <div class="col-12 col-md-9 col-lg-10">
      <div class="container mt-5">
        <h2 class="text-center mb-4">New Product Entry</h2>

        <!-- Success Message -->
        <?php if (!empty($success)): ?>
          <div class="alert alert-success"><?= $success ?></div>
        <?php endif; ?>

        <!-- Error Messages -->
        <?php if (!empty($errors)): ?>
          <div class="alert alert-danger">
            <?php foreach ($errors as $err): ?>
              <p><?= $err ?></p>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <form action="add_products.php" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="productName" name="productName" value="<?= $_POST['productName'] ?? '' ?>" required>
          </div>

          <div class="mb-3">
            <label for="productDescription" class="form-label">Product Description</label>
            <textarea class="form-control" id="productDescription" name="productDescription" rows="4" required><?= $_POST['productDescription'] ?? '' ?></textarea>
          </div>

          <div class="mb-3">
            <label for="productPrice" class="form-label">Product Price</label>
            <input type="number" class="form-control" id="productPrice" name="productPrice" step="0.01" value="<?= $_POST['productPrice'] ?? '' ?>" required>
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
            <label for="productImage" class="form-label">Product Image</label>
            <input type="file" class="form-control" id="productImage" name="productImage" accept="image/*" required>
          </div>

          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Add Product</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
