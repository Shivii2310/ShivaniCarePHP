<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>BRANDS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    .hero-section {
      position: relative;
      background-color:#F8F8F8;
      padding: 80px 40px;
      min-height: 560px;
      overflow: hidden;
    }

    /* Left Text */
    .hero-content h2 {
      font-size: 28px;
      font-weight: 700;
      color: #000;
      line-height: 1.4;
    }

    .hero-content p {
      font-size: 13px;
      font-weight: 600;
      margin-top: 25px;
    }

    /* BRANDS Text */
    .brands-text {
      position: absolute;
      top: 30px;
      right: 80px;
      font-weight: 700;
      font-size:275px;
      line-height: 0.9;
      text-align: right;
      z-index: 1;
    }

    .brands-text span {
      display: block;
      color: #C7026E;
    }

    

    /* Circles ON TOP with opacity */
    .circle-beige {
      position: absolute;
      width: 500px;
      height:500px;
      background-color: #f2f0ed;
      border-radius: 50%;
      top:25px;
      right:300px;
      z-index: 2;
      opacity: 0.5;
    }

    .circle-blue {
      position: absolute;
      width: 240px;
      height: 240px;
      background-color: #cdd4f7;
      border-radius: 50%;
      top: 290px;
      right: 50px;
      z-index: 2;
      opacity: 0.4;
    }

    @media (max-width: 768px) {
      .hero-content h2 {
        font-size: 20px;
      }

      .brands-text {
        font-size: 80px;
        top: 40px;
        right: 20px;
      }

      .circle-beige,
      .circle-blue {
        display: none;
      }
    }
  </style>
</head>
<body>
<?php include 'Navbar.php';?>

<div class="container"> 
<section class="hero-section d-flex align-items-center">
  <!-- BRANDS text -->
  <div class="brands-text">
    <span class="faded">BRA</span>
    <span class="faded">NDS</span>
  </div>

  <!-- Circles above text -->
  <div class="circle-beige"></div>
  <div class="circle-blue"></div>

  <!-- Left content -->
  <div class="container position-relative z-3">
    <div class="row">
      <div class="col-md-6 hero-content">
        <h2>
          Luxury isn't price – it's<br />
          how our products make<br />
          you feel
        </h2>
        <p>Your beauty journey begins with choices<br />that love you back</p>
      </div>
    </div>
  </div>
</section>


<!-- New Arrivals -->
<section class="container py-5">
    <h2 class="fw-bold mb-4">New Arrivals</h2>
    
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <!-- Card 1 -->
        <div class="col">
            <div class="card h-100 border-0"> <!-- Removed rounded-5 from card -->
                <img src="images/25.jpg" class="card-img-top rounded-5 object-fit-cover" style="height: 17rem;" alt="Product Image">
                <div class="card-body px-0"> <!-- Added px-0 to remove horizontal padding -->
                    <p class="card-text">Minimalist Light Fluid SPF 50 Face Sunscreen</p>
                    <h6>MRP: ₹499</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/11.jpg" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Minimalist Light Fluid SPF 50 Face Sunscreen</p>
                    <h6>MRP: ₹499</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/10.jpg" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Minimalist Light Fluid SPF 50 Face Sunscreen</p>
                    <h6>MRP: ₹499</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/26.jpg" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Minimalist Light Fluid SPF 50 Face Sunscreen</p>
                    <h6>MRP: ₹499</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'Footer.php';?>
</div>
</body>
</html>
