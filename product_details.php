<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/product_details.css"/>
</head>

<body>
<?php include 'Navbar.php';?>
<div class="container py-5">
    <div class="card product-card">
      <div class="row g-4 align-items-center h-100">
        <!-- Product Image Section -->
        <div class="col-md-5 position-relative text-center">
          <!-- Optional: Badge -->
          <!-- <div class="loved-badge">Loved by 6M+<br> Glowing Faces</div> -->
          <img src="images/img.png" alt="Dot & Key Product" class="product-image w-75">
        </div>

        <!-- Product Info Section -->
        <div class="col-md-7">
          <div class="product-info">
            <div>
              <h5><strong>Dot & Key Vitamin C + E Super Bright Face Moisturizer For Glowing Skin, Fades Dark Spots</strong></h5>
              <p class="mb-2">(60 ml)</p>
              <h6 class="mb-2"><strong>MRP: ₹495</strong></h6>
              <p class="text-muted">inclusive of all taxes</p>

              <p class="icon-text text-muted mb-2"><img src="images/icons.png">100% Genuine Products</p>
              <p class="icon-text text-muted mb-4"><img src="images/icons2.png">Easy Return Policy</p>

              <!-- Size Selection -->
              <div class="mb-4">
                <button class="size-btn">15 ml</button>
                <button class="size-btn">25 ml</button>
                <button class="size-btn">60 ml</button>
              </div>
            </div>

               <!-- Add to Bag Button -->
            <div class="mt-auto">
              <button class="btn-pink">Add to Bag</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container py-5">
      <h5 class="fw-bold  mb-4">Related Products</h5>
      
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <!-- Card 1 -->
        <div class="col">
            <div class="card h-100 border-0"> <!-- Removed rounded-5 from card -->
                <img src="images/25.jpg" class="card-img-top rounded-5 object-fit-cover" style="height: 18rem;" alt="Product Image">
                <div class="card-body px-0"> <!-- Added px-0 to remove horizontal padding -->
                    <p class="card-text">Minimalist Light Fluid SPF 50 Face Sunscreen</p>
                    <h6>MRP: ₹499</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/11.jpg" class="card-img-top rounded-5 object-fit-cover" style="height:18rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Minimalist Light Fluid SPF 50 Face Sunscreen</p>
                    <h6>MRP: ₹499</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/10.jpg" class="card-img-top rounded-5 object-fit-cover" style="height:18rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Minimalist Light Fluid SPF 50 Face Sunscreen</p>
                    <h6>MRP: ₹499</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/26.jpg" class="card-img-top rounded-5 object-fit-cover" style="height:18rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Minimalist Light Fluid SPF 50 Face Sunscreen</p>
                    <h6>MRP: ₹499</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->

<?php include 'Footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>