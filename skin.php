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
  </style>
</head>
<body>
    <?php include 'Navbar.php';?>
<div class="container">
     <a href="inxed.php" class="v active text-underline-primary text-green">Skincare</a>
    <section class="d-flex flex-wrap" style="background-color: #c3006f; min-height: 500px; margin-top:45px">
  <!-- Left Content -->
  <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-white p-5">
    <h1 class="display-1 fw-bold" style="opacity: 0.4; font-size: 200px;">NEW</h1>
    <h3 class="text-end"><span class="fst-italic" style="font-size: 25px;">Love the skin <br> you're in</span></h3>
  </div>

  <!-- Right Image -->
  <div class="col-md-6 d-flex justify-content-center align-items-center">
    <img src="images/framef.png" alt="New Product" class="img-fluid" style="max-height: 100%; width: auto;">
  </div>
</section>
</div>
    
<!-- New Arrivals -->
<section class="container py-5">
    <h2 class="fw-bold mb-4 text-center">New Arrivals</h2>
    <h2 class="fw-bold mb-4" style="color:#C7026E;">Face</h2>
    
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <!-- Card 1 -->
        <div class="col">
            <div class="card h-100 border-0"> <!-- Removed rounded-5 from card -->
                <img src="images/25.jpg" class="card-img-top rounded-5 object-fit-cover" style="height: 17rem;" alt="Product Image">
                <div class="card-body px-0"> <!-- Added px-0 to remove horizontal padding -->
                    <p class="card-text">Nykaa Naturals SUNKISSED GLOW Invisible Sunscreen</p>
                    <h6>MRP: ₹384</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/facef.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">NYX Professional Makeup Conceal</p>
                    <h6>MRP: ₹861</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/10.jpg" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Mario Badescu Exfoliating and Brightening Body Wash</p>
                    <h6>MRP: ₹925</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/26.jpg" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Eucerin Pigment Control Sunscreen</p>
                    <h6>MRP: ₹1440</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <!-- Card 1 -->
        <div class="col">
            <div class="card h-100 border-0"> <!-- Removed rounded-5 from card -->
                <img src="images/face11.png" class="card-img-top rounded-5 object-fit-cover" style="height: 17rem;" alt="Product Image">
                <div class="card-body px-0"> <!-- Added px-0 to remove horizontal padding -->
                    <p class="card-text">Cetaphil Bright Healthy Radiance Perfecting Serum</p>
                    <h6>MRP: ₹871</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/ponds.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Ponds Age Miracle Anti Aging Day Cream</p>
                    <h6>MRP: ₹764</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/face12.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Cetaphil Brightening Day Protection Cream</p>
                    <h6>MRP: ₹1169</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/face9.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">O3+ D -TAN Face Pack for Tan Removal</p>
                    <h6>MRP: ₹1550</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <!-- Card 1 -->
        <div class="col">
            <div class="card h-100 border-0"> <!-- Removed rounded-5 from card -->
                <img src="images/everyuth.png" class="card-img-top rounded-5 object-fit-cover" style="height: 17rem;" alt="Product Image">
                <div class="card-body px-0"> <!-- Added px-0 to remove horizontal padding -->
                    <p class="card-text">Everyuth Naturals Tan Removal Pack for Face & Body</p>
                    <h6>MRP: ₹589</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/face14.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Outshine Korean Glass Skin Serum</p>
                    <h6>MRP: ₹1395</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/face15.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Chicnutrix Mighty Collagen Japanese</p>
                    <h6>MRP: ₹1775</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/face16.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">La Shield Supersaver Combo</p>
                    <h6>MRP: ₹1360</h6>
                </div>
            </div>
        </div>
    </div>
</section>

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

    <?php include 'footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>