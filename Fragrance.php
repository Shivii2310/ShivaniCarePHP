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
  <?php include 'Navbar.php'; ?>
  <div class="container">
    <a href="inxed.php" class="v active text-underline-primary text-green">Fragrance</a>
    <section class="d-flex flex-wrap" style="background-color: #c3006f; min-height: 500px; margin-top:45px">
      <!-- Left Content -->
      <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-white">
        <h1 class="display-1 text-center fw-bold" style="opacity: 0.4; font-size: 120px; margin-left:250px;">FRAGRANCE
        </h1>
        <h3 class="text-center mt-3" style="margin-left: 330px;">New At <span class="fw-bold"
            style="font-size: 14px; ">Shivani's Care</span></h3>
        <p class="mt-2 text-center" style="margin-left: 330px;">Discover The Newest Beauty Trends.</p>
      </div>

      <!-- Right Image -->
      <div class="col-md-6 d-flex justify-content-center align-items-center">
        <img src="images/bgremove.png" alt="New Product" class="img-fluid"
          style="height: 60%; width: auto; margin-left:200px;">
      </div>
    </section>
  </div>

<!-- New Arrivals -->
<section class="container py-5">
    <h2 class="fw-bold mb-4 text-center">New Arrivals</h2>
    <h2 class="fw-bold mb-4" style="color:#C7026E;">Fragrance</h2>
    
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <!-- Card 1 -->
        <div class="col">
            <div class="card h-100 border-0"> <!-- Removed rounded-5 from card -->
                <img src="images/perfume.png" class="card-img-top rounded-5 object-fit-cover" style="height: 17rem;" alt="Product Image">
                <div class="card-body px-0"> <!-- Added px-0 to remove horizontal padding -->
                    <p class="card-text">Bella Vita Luxury Perfumes Gift Set For Women</p>
                    <h6>MRP: ₹549</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/perfume1.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">SKINN Nox Pour Homme Eau De Parfum</p>
                    <h6>MRP: ₹3995</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/perfume4.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">RENEE Eau De Parfum</p>
                    <h6>MRP: ₹519</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/perfume3.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Bella Vita Luxury Date Woman Perfume</p>
                    <h6>MRP: ₹575</h6>
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
                <img src="images/perfume5.png" class="card-img-top rounded-5 object-fit-cover" style="height: 17rem;" alt="Product Image">
                <div class="card-body px-0"> <!-- Added px-0 to remove horizontal padding -->
                    <p class="card-text">Engage Yin Eau De Parfum for Men</p>
                    <h6>MRP: ₹389</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/perfume1.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">SKINN Nox Pour Femme Eau De Parfum</p>
                    <h6>MRP: ₹4995</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/perfume6.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">HUGO BOSS Men Boss Bottled Parfum </p>
                    <h6>MRP: ₹10200</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/perfume7.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Carolina Herrera Good Girl Eau de Parfum</p>
                    <h6>MRP: ₹8118</h6>
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
                <img src="images/perfume8.png" class="card-img-top rounded-5 object-fit-cover" style="height: 17rem;" alt="Product Image">
                <div class="card-body px-0"> <!-- Added px-0 to remove horizontal padding -->
                    <p class="card-text">Calvin Klein One Perfume</p>
                    <h6>MRP: ₹4760</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/perfume9.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">CHANEL Mademoiselle Intense Eau De Parfum</p>
                    <h6>MRP: ₹13800</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/perfume10.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Dior Homme By Christian Dior For Men</p>
                    <h6>MRP: ₹14999</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/perfume11.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Gucci Bloom Profumo Di Fiori Eau De Parfum</p>
                    <h6>MRP: ₹8450</h6>
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
        <img src="images/CocoChanelLogo.png" class="img-fluid" style="width: 120px;" alt="Brand 1" />
        <img src="images/reneelogo.png" class="img-fluid" style="width: 120px;" alt="Brand 2" />
        <img src="images/gucci.png" class="img-fluid" style="width: 120px;" alt="Brand 3" />
        <img src="images/bosslogo.png" class="img-fluid" style="width: 120px;" alt="Brand 4" />
        <img src="images/bellavitalogo.png" class="img-fluid" style="width: 120px;" alt="Brand 5" />
        <img src="images/cklogo.png" class="img-fluid" style="width: 120px;" alt="Brand 6" />
      </div>
    </div>
    <hr>
  </section>

  <section class="text-center py-5">
    <div class="container d-flex justify-content-center gap-5 flex-wrap">
      <img src="images/perfume13.png" class="img-fluid" width="230" alt="poster 1" />
      <img src="images/perfume14.png" class="img-fluid" width="230" alt="poster 2" />
      <img src="images/perfume15.png" class="img-fluid" width="230" alt="poster 3" />
    </div>
  </section>

  <?php include 'footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>