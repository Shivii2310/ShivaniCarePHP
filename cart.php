<?php
include 'dbconnection.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: SignIn.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// ✅ Delete item if "delete" parameter is set
if (isset($_GET['delete'])) {
    $delete_id = intval($_GET['delete']);
    $delete_query = "DELETE FROM cart_items WHERE id = $delete_id AND user_id = $user_id";
    mysqli_query($conn, $delete_query);
    header("Location: cart.php"); // redirect to avoid resubmission
    exit;
}

// ✅ Fetch cart items
$query = "SELECT * FROM cart_items WHERE user_id = $user_id";
$result = mysqli_query($conn, query: $query);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Your Cart</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
</head>
<body>
<?php include 'Navbar.php'; ?>

<div class="container py-5">
  <h2 class="mb-4">Your Shopping Bag</h2>

  <?php if (mysqli_num_rows($result) > 0): ?>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <?php 
        $total = 0;
        while ($item = mysqli_fetch_assoc($result)): 
        $subtotal = $item['product_price'] * $item['quantity'];
        $total += $subtotal;
      ?>
        <div class="col">
          <div class="card position-relative">
            <!-- ❌ Delete Icon -->
            <a href="cart.php?delete=<?= $item['id'] ?>" 
               class="position-absolute top-0 end-0 p-2 text-danger"
               onclick="return confirm('Are you sure you want to remove this item?');">
              <i class="bi bi-x text-black fs-4"></i>
            </a>

            <div class="row g-0">
              <div class="col-md-4">
                <img src="uploads/<?= htmlspecialchars(basename($item['product_image'])) ?>"
                     class="img-fluid rounded-start"
                     alt="<?= htmlspecialchars($item['product_name']) ?>"
                     onerror="this.onerror=null;this.src='images/default.jpg';">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= htmlspecialchars($item['product_name']) ?></h5>
                  <p class="card-text">Size: <?= htmlspecialchars($item['product_size']) ?></p>
                  <p class="card-text">Quantity: <?= (int)$item['quantity'] ?></p>
                  <p class="card-text"><strong>Price: ₹<?= $subtotal ?></strong></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>

    <!-- Total Summary -->
    <div class="mt-5">
      <h4 class="text-start"><strong>Total: ₹<?= $total ?></strong></h4>
      <div class="mt-3">
        <a href="checkout.php" class="btn btn-danger px-3 py-2 w-25">Proceed to Checkout</a>
      </div>
    </div>

  <?php else: ?>
    <p>Your cart is empty.</p>
  <?php endif; ?>
</div>

</body>
</html>
