<?php
include 'dbconnection.php';

$query = "SELECT id, productName, productDescription, productPrice, productCategory, productImage FROM products";
$result = mysqli_query($conn, $query);

$productsByCategory = [];
while ($row = mysqli_fetch_assoc($result)) {
    $productsByCategory[$row['productCategory']][] = $row;
}

$allowedCategories = ['Skincare', 'Makeup', 'Haircare']; // fixed order
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
<?php include 'Navbar.php';?>

<!-- Hero Section -->
<div class="container">
  <section class="d-flex flex-wrap" style="background-color: #c3006f; min-height: 500px; margin-top:45px">
    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-white p-5">
      <h1 class="display-1 fw-bold" style="opacity: 0.4; font-size: 200px;">NEW</h1>
      <h3 class="text-center mt-3">New At <span class="fw-bold" style="font-size: 14px;">Shivani's Care</span></h3>
      <p class="mt-2 text-center">Discover The Newest Beauty Trends.</p>
    </div>
    <div class="col-md-6 d-flex justify-content-center align-items-center">
      <img src="images/framef.png" alt="New Product" class="img-fluid" style="max-height: 100%; width: auto;">
    </div>
  </section>
</div>

<!-- Dynamic Product Sections -->
<!-- Dynamic Product Sections -->
<?php foreach ($allowedCategories as $category): ?>
  <?php if (!empty($productsByCategory[$category])): ?>
    <section class="container py-5">
      <h2 class="fw-bold mb-4"><?= htmlspecialchars($category) ?></h2>
      <div class="d-flex overflow-auto flex-nowrap gap-3 pb-2">
        <?php foreach ($productsByCategory[$category] as $product): ?>
        <a href="product_details.php?id=<?= $product['id'] ?>" class="text-decoration-none text-dark">
          <div class="card h-100 border-0" style="min-width: 250px;">
            <img src="uploads/<?= htmlspecialchars(basename($product['productImage'])) ?>" 
                 class="card-img-top rounded-5 object-fit-cover" 
                 style="height:17rem;" 
                 alt="<?= htmlspecialchars($product['productName']) ?>">
            <div class="card-body px-0">
              <p class="card-text"><?= htmlspecialchars($product['productName']) ?></p>
              <h6>MRP: ₹<?= htmlspecialchars($product['productPrice']) ?></h6>
            </div>
          </div>
        </a>
        <?php endforeach; ?>
      </div>
    </section>
  <?php endif; ?>
<?php endforeach; ?>
<!-- Dots -->
<div class="text-center mt-4">
  <span class="dot active"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<!-- Brands -->
<section class="text-center pt-5">
  <hr>
  <h2 class="fw-bold mb-4">Brand's</h2>
  <div class="container-fluid px-5">
    <div class="d-flex justify-content-center align-items-center flex-wrap gap-4">
      <img src="images/logo1.png" class="img-fluid" style="width: 120px;" alt="Brand 1" />
      <img src="images/logo2.png" class="img-fluid" style="width: 120px;" alt="Brand 2" />
      <img src="images/logo3.png" class="img-fluid" style="width: 120px;" alt="Brand 3" />
      <img src="images/logo4.png" class="img-fluid" style="width: 120px;" alt="Brand 4" />
      <img src="images/logos.png" class="img-fluid" style="width: 120px;" alt="Brand 5" />
      <img src="images/logop.png" class="img-fluid" style="width: 120px;" alt="Brand 6" />
    </div>
  </div>
  <hr>
</section>

<!-- Poster Section -->
<section class="text-center py-5">
  <div class="container d-flex justify-content-center gap-5 flex-wrap">
    <img src="images/Frame 1.png" class="img-fluid" width="250" alt="poster 1" />
    <img src="images/Frame 2.png" class="img-fluid" width="250" alt="poster 2" />
    <img src="images/Frame 3.png" class="img-fluid" width="250" alt="poster 3" />
  </div>
</section>

<!-- Store Locator -->
<section class="py-5 bg-light">
  <div class="container d-flex flex-column flex-md-row align-items-center">
    <div class="col-md-6 mb-4 mb-md-0 text-center text-md-start">
      <h4 class="fw-semibold">STORE LOCATOR</h4>
      <p class="small">Explore your nearest CHANEL counter.</p>
      <a href="#" class="text-underline-primary text-black">Explore</a>
    </div>
    <div class="col-md-6 text-center">
      <img src="images/image1.png" class="img-fluid w-75 object-fit-cover" alt="Store Locator">
    </div>
  </div>
</section>

<?php include 'Footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
