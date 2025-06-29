<?php
session_start();
include 'dbconnection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM products WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $product = mysqli_fetch_assoc($result);

    if (!$product) {
        echo "<script>alert('Product not found'); window.location.href='index.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('No product selected'); window.location.href='index.php';</script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($product['productName']) ?> - Shivani's Care</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="styles/product_details.css"/>
  <style>
  .product-image {
    border-radius: 10px;
    object-fit: cover;
    max-height: 400px;
  }

  .size-btn {
    border: 1px solid #ccc;
    padding: 5px 15px;
    border-radius: 20px;
    margin-right: 10px;
    background-color: white;
    color: gray;
    cursor: pointer;
  }

  .size-btn.active {
    border-color: #c3006f;
    background-color: #fce4ec;
    color: black; /* Text color becomes black on selection */
  }

  .btn-pink {
    background-color: #c3006f;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 30px;
  }
</style>

</head>
<body>

<?php include 'Navbar.php'; ?>

<!-- Product Details -->
<div class="container py-5">
  <div class="card product-card">
    <div class="row g-4 align-items-center h-100">
      <!-- Image Section -->
      <div class="col-md-5 text-center">
        <img src="uploads/<?= htmlspecialchars(basename($product['productImage'])) ?>" 
             alt="<?= htmlspecialchars($product['productName']) ?>" 
             class="product-image w-75 rounded">
      </div>

      <!-- Info Section -->
      <div class="col-md-7">
        <div class="product-info">
          <h5><strong><?= htmlspecialchars($product['productName']) ?></strong></h5>
          <p class="mb-2"><?= htmlspecialchars($product['productDescription']) ?></p>
          <h6 class="mb-2"><strong>MRP: ₹<?= htmlspecialchars($product['productPrice']) ?></strong></h6>
          <p class="text-muted">Inclusive of all taxes</p>

          <p class="icon-text text-muted mb-2"><img src="images/icons.png"> 100% Genuine Products</p>
          <p class="icon-text text-muted mb-4"><img src="images/icons2.png"> Easy Return Policy</p>

          <!-- Size Buttons -->
          <div class="mb-4" id="size-selector">
            <button class="size-btn" data-size="15 ml">15 ml</button>
            <button class="size-btn" data-size="25 ml">25 ml</button>
            <button class="size-btn" data-size="60 ml">60 ml</button>
          </div>

          <!-- Action Buttons -->
          <div class="mt-auto">
            <?php $isLoggedIn = isset($_SESSION['user_id']); ?>
            <button class="btn btn-danger px-3 py-1 w-25" onclick="<?= $isLoggedIn ? "addToCart({$product['id']})" : "redirectToSignin()" ?>">Add to Bag</button>
            <button class="btn btn-danger px-3 py-1 w-25" onclick="<?= $isLoggedIn ? "buyNow({$product['id']})" : "redirectToSignin()" ?>">Buy Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Related Products -->
<div class="container py-5">
  <h5 class="fw-bold mb-4">Related Products</h5>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
    <div class="col">
      <div class="card h-100 border-0">
        <img src="images/25.jpg" class="card-img-top rounded-5 object-fit-cover" style="height: 18rem;">
        <div class="card-body px-0">
          <p class="card-text">Minimalist Light Fluid SPF 50</p>
          <h6>MRP: ₹499</h6>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'Footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  let selectedSize = "";

  document.querySelectorAll('.size-btn').forEach(button => {
    button.addEventListener('click', () => {
      document.querySelectorAll('.size-btn').forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');
      selectedSize = button.getAttribute('data-size');
    });
  });

  function redirectToSignin() {
    window.location.href = 'signin.php';
  }

  function addToCart(productId) {
    if (!selectedSize) {
      alert("Please select a size.");
      return;
    }
    window.location.href = `add_to_cart.php?id=${productId}&size=${encodeURIComponent(selectedSize)}`;
  }

  function buyNow(productId) {
    if (!selectedSize) {
      alert("Please select a size.");
      return;
    }
    window.location.href = `checkout.php?product_id=${productId}&size=${encodeURIComponent(selectedSize)}`;
  }
</script>

</body>
</html>
