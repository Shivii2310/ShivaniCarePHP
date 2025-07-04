<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="styles/index.css"> -->
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
     <a href="inxed.php" class="v active text-underline-primary text-green">Haircare</a>
    <section class="d-flex flex-wrap" style="background-color: #c3006f; min-height: 500px; margin-top:45px">
      <!-- Left Content -->
      <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-white">
        <h1 class="display-1 text-center fw-bold" style="opacity: 0.4; font-size: 120px; margin-left:250px;">HAIR <br></h1>
        <h1 class="display-5" style="opacity: 0.4; font-size: 80px; margin-left:650px; line-height:30px">CARE</h1>
        <h3 class="text-center mt-3" style="margin-left: 230px;">New At <span class="fw-bold"
            style="font-size: 14px; ">Shivani's Care</span></h3>
        <p class="mt-2 text-center" style="margin-left: 230px;">Discover The Newest Beauty Trends.</p>
      </div>

      <!-- Right Image -->
      <div class="col-md-6 d-flex justify-content-center align-items-center">
        <p class=""style="background-color: #D6DE79; transform: rotate(-90deg); margin-left:350px;">Life isn’t perfect, but your hair can be</p>
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
                <img src="images/hair1.png" class="card-img-top rounded-5 object-fit-cover" style="height: 17rem;" alt="Product Image">
                <div class="card-body px-0"> <!-- Added px-0 to remove horizontal padding -->
                    <p class="card-text">Plum Peptides Shampoo with Coconut Milk for Dry & Rough Hair </p>
                    <h6>MRP: ₹320</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/hair6.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Anomaly Clarifying Shampoo for Deep Cleanse with Charcoal</p>
                    <h6>MRP: ₹820</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/hair5.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">L'Oreal Paris Total Repair 5 Repairing Shampoo With Keratin </p>
                    <h6>MRP: ₹1095</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/hair4.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Tresemme Keratin Smooth Shampoo for Straighter Shinier Hair</p>
                    <h6>MRP: ₹895</h6>
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
                <img src="images/hair7.png" class="card-img-top rounded-5 object-fit-cover" style="height: 17rem;" alt="Product Image">
                <div class="card-body px-0"> <!-- Added px-0 to remove horizontal padding -->
                    <p class="card-text">Kerastase Genesis Anti-Hair Fall Daily Scalp Serum</p>
                    <h6>MRP: ₹5100</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/hair8.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Be Bodywise Hair Growth Serum Roll On</p>
                    <h6>MRP: ₹599</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/hair9.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Matrix Opti.Care Professional Conditioner for Frizzy Hair</p>
                    <h6>MRP: ₹340</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/hair10.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Redken Acidic Bonding Concentrate Conditioner With Citric Acid</p>
                    <h6>MRP: ₹2500</h6>
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
                <img src="images/hair11.png" class="card-img-top rounded-5 object-fit-cover" style="height: 17rem;" alt="Product Image">
                <div class="card-body px-0"> <!-- Added px-0 to remove horizontal padding -->
                    <p class="card-text">Nat Habit Hibiscus Amla Hair Growth Rosemary Coconut Castor</p>
                    <h6>MRP: ₹332</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/hair12.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">SP Luxe Oil Keratin Restore  Almond Oils </p>
                    <h6>MRP: ₹1200</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/hair13.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Ktein 5 In 1 Hot Air Hair Styler</p>
                    <h6>MRP: ₹1799</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/hair14.png" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Bare Anatomy Colour Protect Hair Mask</p>
                    <h6>MRP: ₹629</h6>
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
        <img src="images/Plumlogo.png" class="img-fluid" style="width: 120px;" alt="Brand 1" />
        <img src="images/OIP.png" class="img-fluid" style="width: 120px;" alt="Brand 2" />
        <img src="images/matrixlogo.png" class="img-fluid" style="width: 120px;" alt="Brand 3" />
        <img src="images/redkenlogo.png" class="img-fluid" style="width: 120px;" alt="Brand 4" />
        <img src="images/traslogo.png" class="img-fluid" style="width: 120px;" alt="Brand 5" />
        <img src="images/ketinlogo.png" class="img-fluid" style="width: 120px;" alt="Brand 6" />
      </div>
    </div>
    <hr>
  </section>

  <section class="text-center py-5">
    <div class="container d-flex justify-content-center gap-5 flex-wrap">
      <img src="images/hair15.png" class="img-fluid" width="200" alt="poster 1" />
      <img src="images/hair.png" class="img-fluid" width="200" alt="poster 2" />
      <img src="images/hair14.png" class="img-fluid" width="200" alt="poster 3" />
    </div>
  </section>

  <?php include 'footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>