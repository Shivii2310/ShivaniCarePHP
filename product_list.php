<?php
session_start();
include 'dbconnection.php';

// Fetch all products
$products = [];
$sql = "SELECT * FROM products ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Product List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-12 col-md-3 col-lg-2 bg-light vh-100 d-flex flex-column p-3">
      <button class="btn btn-info d-md-none mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
        Toggle Menu
      </button>
      <div class="collapse d-md-block bg-light" id="sidebarMenu">
        <h4 class="mb-4">Menu</h4>
        <ul class="nav flex-column">
          <li class="nav-item"><a class="nav-link active" href="dashboard.php">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="user_list.php">User List</a></li>
          <li class="nav-item"><a class="nav-link" href="add_products.php">Product Entry</a></li>
          <li class="nav-item"><a class="nav-link active" href="product_list.php">Product List</a></li>
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
    <div class="col-12 col-md-9 col-lg-10 p-4">
      <div class="d-flex justify-content-between flex-wrap align-items-center">
        <h2>Products</h2>
        <a href="add_products.php" class="btn btn-success">Add New Product</a>
      </div>

      <div class="table-responsive mt-4">
        <table class="table table-bordered">
          <thead class="table-dark">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Description</th>
              <th>Price (₹)</th>
              <th>Category</th>
              <th>Image</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($products)): ?>
              <?php foreach ($products as $product): ?>
                <tr>
                  <td><?= htmlspecialchars($product['id']) ?></td>
                  <td><?= htmlspecialchars($product['productName']) ?></td>
                  <td><?= htmlspecialchars($product['productDescription']) ?></td>
                  <td><?= number_format($product['productPrice'], 2) ?></td>
                  <td><?= htmlspecialchars($product['productCategory']) ?></td>
                  <td>
                    <?php if (!empty($product['productImage']) && file_exists($product['productImage'])): ?>
                      <img src="<?= $product['productImage'] ?>" alt="<?= $product['productName'] ?>" style="width: 80px;">
                    <?php else: ?>
                      <span>No Image</span>
                    <?php endif; ?>
                  </td>
                  <td>
                    <a href="edit_product.php?id=<?= $product['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="delete_product.php?id=<?= $product['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this product?')">Delete</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="7" class="text-center">No products found.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
