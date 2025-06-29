<?php
session_start();
include 'dbconnection.php';

// Calculate cart count
$cartCount = 0;
if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    $cartQuery = "SELECT SUM(quantity) AS total FROM cart_items WHERE user_id = $userId";
    $cartResult = mysqli_query($conn, $cartQuery);
    $cartData = mysqli_fetch_assoc($cartResult);
    $cartCount = $cartData['total'] ?? 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="styles/index.css">
  <title>Shivani's Care</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
</head>

<body>

<!-- Navbar -->
<nav class="navbar position-sticky z-3 top-0 navbar-expand-lg bg-white border-bottom py-3">
  <div class="container">
    <!-- Brand -->
    <a class="navbar-brand fw-bold pink-text" href="index.php">
      <img src="images/logo.png" alt="Shivani's Care" class="d-inline-block align-text-top" height="auto" width="70">
    </a>

    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Main Nav + Right Section -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- Left Nav Items -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="makeup.php">Makeup</a></li>
        <li class="nav-item"><a class="nav-link" href="skin.php">Skincare</a></li>
        <li class="nav-item"><a class="nav-link" href="hair.php">Haircare</a></li>
        <li class="nav-item"><a class="nav-link" href="fragrance.php">Fragrance</a></li>
        <li class="nav-item"><a class="nav-link" href="brands.php">Brands</a></li>
        <li class="nav-item"><a class="nav-link" href="newarrivals.php">New Arrivals</a></li>
      </ul>

      <!-- Right Section - Search and User -->
      <div class="right-section d-flex align-items-center">
        <!-- Search Input -->
        <input class="form-control form-control-sm rounded-pill search-input me-3" type="search"
          placeholder="Find your perfect product..." />

        <!-- Auth + Cart -->
        <div class="d-flex align-items-center">
          <?php if (isset($_SESSION['user_id'])): ?>
            <a class="nav-link text-dark fw-semibold m-2" href="#">
              Welcome, <?= htmlspecialchars($_SESSION['username']) ?>
            </a>
            <a class="nav-link text-danger fw-bold me-3" href="logout.php">Sign Out</a>
          <?php else: ?>
            <a href="SignIn.php"><button class="btn btn-outline-dark btn-sm me-3">Sign In</button></a>
          <?php endif; ?>

          <!-- Cart Icon with Count -->
          <a href="cart.php" class="position-relative">
            <i class="bi bi-bag fs-5 text-black"></i>
            <?php if ($cartCount > 0): ?>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-black">
                <?= $cartCount ?>
              </span>
            <?php endif; ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
