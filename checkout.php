<?php
session_start();
include 'dbconnection.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: SignIn.php");
    exit;
}

$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM cart_items WHERE user_id = $user_id";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<?php include 'Navbar.php'; ?>

<div class="container py-5"> 
  <h2 class="mb-4">Checkout</h2>

  <?php if (mysqli_num_rows($result) > 0): ?>
    <div class="table-responsive">
      <table class="table table-bordered align-middle">
        <thead class="table-light">
          <tr>
            <th>Product</th>
            <th>Image</th>
            <th>Size</th>
            <th>Quantity</th>
            <th>Price (₹)</th>
            <th>Subtotal (₹)</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $grand_total = 0;
            while ($item = mysqli_fetch_assoc($result)): 
              $subtotal = $item['product_price'] * $item['quantity'];
              $grand_total += $subtotal;
          ?>
          <tr>
            <td><?= htmlspecialchars($item['product_name']) ?></td>
            <td>
              <img src="uploads/<?= htmlspecialchars(basename($item['product_image'])) ?>" 
                   alt="<?= htmlspecialchars($item['product_name']) ?>" 
                   style="width: 70px; height: auto;" 
                   onerror="this.onerror=null;this.src='images/default.jpg';">
            </td>
            <td><?= htmlspecialchars($item['product_size']) ?></td>
            <td><?= (int)$item['quantity'] ?></td>
            <td>₹<?= (int)$item['product_price'] ?></td>
            <td><strong>₹<?= $subtotal ?></strong></td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>

    <!-- Total & Place Order -->
    <div class="text-end mt-4">
      <h4><strong>Grand Total: ₹<?= $grand_total ?></strong></h4>
      <form action="place_order.php" method="POST">
        <input type="hidden" name="user_id" value="<?= $user_id ?>">
        <input type="hidden" name="total_amount" value="<?= $grand_total ?>">
        <button type="submit" class="btn btn-danger px-3 py-1 " style="width:200px;">Place Order</button>
      </form>
    </div>

  <?php else: ?>
    <p>Your cart is empty. <a href="index.php">Continue shopping</a>.</p>
  <?php endif; ?>
</div>

</body>
</html>
