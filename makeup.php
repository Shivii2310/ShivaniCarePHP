<!-- start fetching data categories wise -->
<?php
include 'dbconnection.php';
session_start();

$query = "SELECT id, productName, productDescription, productPrice, productCategory, productImage FROM products";
$result = mysqli_query($conn, $query);

$productsByCategory = [];
while ($row = mysqli_fetch_assoc($result)) {
    $productsByCategory[$row['productCategory']][] = $row;
}

$allowedCategories = ['Skincare', 'Makeup', 'Haircare']; // fixed order
?>
<!-- end -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shivani's Care</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

<style>
/* Custom Styles */
.v {
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
.hero {
    background: linear-gradient(to right, #d1006e, #e47300);
    color: white;
    text-align: center;
}
.hero h1 {
    font-size: 3.5rem;
    font-weight: bold;
}
.hero p {
    font-size: 1.25rem;
    margin: 10px 0;
}
@media (max-width: 768px) {
    .hero h1 { font-size: 2.5rem; }
    .hero p { font-size: 1rem; }
}

/* Fade-up animation styles */
.fade-up {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}
.fade-up.show {
    opacity: 1;
    transform: translateY(0);
}
</style>
<style>
/* Scroll Container Styles */
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

<?php include 'Navbar.php'; ?>

<div class="container" id="arrivalsText">
    <a href="inxed.php" class="v active">Makeup</a>
    <section class="hero d-md-flex fade-up" style="width:100%; height:400px; margin-top:45px">
        <div class="col-md-12 bg-pink text-white p-5 d-flex flex-column justify-content-center position-relative">
            <!-- Background Text -->
            <h1 class="display-1 fw-bold text-center" style="font-size:200px; opacity: 0.3; color: #FBFF12;">MAKEUP</h1>
            <!-- Main Headline -->
            <h3 class="text-center fw-bold fade-up" style="font-size:40px;">Your Face Your <br> Power.</h3>
            <!-- Subheading -->
            <p class="small mt-0 text-center fade-up" style="color: #FBFF12;">Beauty, Redefined. Confidence, Amplified.</p>
        </div>
    </section>
</div>

<!-- Related Products -->
<div class="container py-5">
  <h5 class="fw-bold mb-4 fade-up">Related Products</h5>

  <!-- Dynamic Product Sections -->
  <?php foreach ($allowedCategories as $category): ?>
    <?php if (!empty($productsByCategory[$category])): ?>
      <section class="container py-5">
        <h2 class="fw-bold mb-4 fade-up"><?= htmlspecialchars($category) ?></h2>
        <div class="d-flex scroll-container overflow-auto flex-nowrap gap-3 pb-2">
          <?php foreach ($productsByCategory[$category] as $product): ?>
          <a href="product_details.php?id=<?= $product['id'] ?>" class="text-decoration-none text-dark">
            <div class="card h-100 border-0 fade-up" style="min-width: 250px;">
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
</div>

<div class="text-center mt-4">
  <span class="dot active"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<!-- Brands -->
<section class="text-center pt-5">
  <hr>
  <h2 class="fw-bold mb-4 fade-up">Brand's</h2>
  <div class="container d-flex justify-content-center gap-3 flex-wrap">
    <img src="images/logo1.png" class="img-fluid fade-up" width="160" alt="Brand 1" />
    <img src="images/logo2.png" class="img-fluid fade-up" width="160" alt="Brand 2" />
    <img src="images/logo3.png" class="img-fluid fade-up" width="160" alt="Brand 3" />
    <img src="images/logo4.png" class="img-fluid fade-up" width="160" alt="Brand 4" />
    <img src="images/logos.png" class="img-fluid fade-up" width="160" alt="Brand 5" />
    <img src="images/logop.png" class="img-fluid fade-up" width="160" alt="Brand 6" />
  </div>
  <hr>
</section>

<section class="text-center py-5 pt-5">
  <div class="container d-flex justify-content-center gap-5 flex-wrap">
    <img src="images/image2.png" class="img-fluid fade-up" width="250" alt="poster 1" />
    <img src="images/image3.png" class="img-fluid fade-up" width="250" alt="poster 2" />
    <img src="images/image4.png" class="img-fluid fade-up" width="250" alt="poster 3" />
  </div>
</section>

<!-- Scroll-triggered Animation Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
        observer.unobserve(entry.target);
      }
    });
  });
  document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
});
</script>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
