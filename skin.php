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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shivani's Care</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    .v {
    position: ;
    left: 0;
    top: 0;
    transform: translateY(-50%);
    color: green;
    text-decoration: underline;
    background-color: white;
    font-weight: bold;
    z-index: 1000;
}

.v:active {
    color: darkgreen;
    background-color: #e6ffe6;
}
/* Fade-up animation styles */
.fade-up {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 1.2s ease, transform 1.2s ease;
}
.fade-up.visible {
    opacity: 1;
    transform: translateY(0);
}
/* Hide scrollbar */
.scroll-container {
    overflow-x: auto;
    overflow-y: hidden;
    white-space: nowrap;
    scroll-behavior: smooth;
    -ms-overflow-style: none;  /* IE & Edge */
    scrollbar-width: none;     /* Firefox */
}
.scroll-container::-webkit-scrollbar {
    display: none;  /* Chrome, Safari, Edge */
}
  </style>
</head>
<body>
    <?php include 'Navbar.php';?>
<div class="container">
     <a href="inxed.php" class="v active text-underline-primary text-green">Skincare</a>
    <section class="d-flex flex-wrap" style="background-color: #c3006f; min-height: 500px; margin-top:45px">
  <!-- Left Content -->
  <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-white p-5">
    <h1 class="display-1 fw-bold fade-up" style="opacity: 0.4; font-size: 200px;">NEW</h1>
    <h3 class="text-end fade-up"><span class="fst-italic" style="font-size: 25px;">Love the skin <br> you're in</span></h3>
  </div>

  <!-- Right Image -->
  <div class="col-md-6 d-flex justify-content-center align-items-center">
    <img src="images/45.png" alt="New Product" class="img-fluid" style="max-height: 100%; width: auto;">
  </div>
</section>
</div>
    
<!-- New Arrivals -->
<!-- Dynamic Product Sections -->
<?php foreach ($allowedCategories as $category): ?>
  <?php if (!empty($productsByCategory[$category])): ?>
    <section class="container py-5">
      <h2 class="fw-bold mb-4 fade-up"><?= htmlspecialchars($category) ?></h2>
      <div class="d-flex scroll-container overflow-auto flex-nowrap gap-3 pb-2">
        <?php foreach ($productsByCategory[$category] as $product): ?>
        <a href="product_details.php?id=<?= $product['id'] ?>" class="text-decoration-none text-dark">
          <div class="card h-100 border-0 fade-up" style="min-width: 250px">
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

<!-- Brands -->
 <section class="text-center pt-5">
  <hr>
  <h2 class="fw-bold mb-4">Brand's</h2>
  <!-- Use container-fluid for full width -->
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

<section class="text-center py-5">
    <div class="container d-flex justify-content-center gap-5 flex-wrap">
      <img src="images/face17.png" class="img-fluid" width="250" alt="poster 1" />
      <img src="images/face18.png" class="img-fluid" width="250" alt="poster 2" />
      <img src="images/face19.png" class="img-fluid" width="250" alt="poster 3" />
    </div>
  </section>

  <!-- Scroll Animation Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  });
  document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
});
</script>

    <?php include 'footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>