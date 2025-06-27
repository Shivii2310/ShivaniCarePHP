<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>New Arrivals</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>

      /* Circles ON TOP with opacity */
    .circle-beige {
      position: absolute;
      width: 500px;
      height:500px;
      background-color: #f2f0ed;
      border-radius: 50%;
      top: 40%;
      left: 50%;
      transform: translate(-50%, -50%) translateY(40px);
      z-index: 2;
      opacity: 0.5;
    }
    .hero-section {
      position: relative;
      padding: 100px 40px;
      min-height: 600px;
      background-color: #fff8f9;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      overflow: hidden;
    }

    /* Background NEW / ARRIVALS */
    .arrivals-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) translateY(40px);
      font-weight: 700;
      font-size:600px;
      line-height: 0.85;
      color: #C7026E;
      opacity: 0.5;
      pointer-events: none;
      z-index: 1;
      white-space: nowrap;
      transition: all 1.5s ease;
    }

    .arrivals-text.visible {
      opacity: 0.1;
      transform: translate(-50%, -50%) translateY(0);
    }

    .arrivals-text span {
      display: block;
    }

    /* Foreground Quote */
    .hero-quote {
      position: relative;
      z-index: 2;
      max-width: 900px;
      opacity: 0;
      transform: translateY(50px);
      transition: all 1.5s ease;
    }

    .hero-quote.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .hero-quote h2 {
      font-size: 28px;
      font-weight: 700;
      color: #000;
      margin-bottom: 20px;
      line-height: 1.5;
    }

    .hero-quote p {
      font-size: 16px;
      font-weight: 600;
      color: #333;
    }

    @media (max-width: 768px) {
      .arrivals-text {
        font-size: 120px;
      }

      .hero-quote h2 {
        font-size: 20px;
      }

      .hero-quote p {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
<?php include 'Navbar.php';?>
<div class="container py-3">
<section class="hero-section">
  <!-- Background Text -->
  <div class="arrivals-text" id="arrivalsText">
    <span>NEW</span>
   
    <span  class="text-start p-5" style="font-size: 100px; font: weight 100px;">ARRIVALS</span>
  </div>

   <!-- Circles above text -->
   <div class="circle-beige"></div>

  <!-- Quote -->
  <div class="hero-quote" id="heroQuote">
  
    <h2>“Style is a way to say who you are<br />without having to speak.”</h2>
    <p>— Discover your identity in every arrival.</p>
  </div>
  <span style="position: absolute;bottom: 20px;right: 40px;font-size: 10px;color: #C7026E;">
  INDIA'S NO 1</span>

</section>

</div>
<!-- Start Product cards  -->

<!-- New Arrivals -->
<section class="container py-5">
    <h2 class="fw-bold mb-4 text-center">New Arrivals</h2>
    
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

<section class="container py-5">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <!-- Card 1 -->
        <div class="col">
            <div class="card h-100 border-0"> <!-- Removed rounded-5 from card -->
                <img src="images/34.jpg" class="card-img-top rounded-5 object-fit-cover" style="height: 17rem;" alt="Product Image">
                <div class="card-body px-0"> <!-- Added px-0 to remove horizontal padding -->
                    <p class="card-text">Minimalist Light Fluid SPF 50 Face Sunscreen</p>
                    <h6>MRP: ₹499</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/17.jpg" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Minimalist Light Fluid SPF 50 Face Sunscreen</p>
                    <h6>MRP: ₹499</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/16.jpg" class="card-img-top rounded-5 object-fit-cover" style="height:17rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Minimalist Light Fluid SPF 50 Face Sunscreen</p>
                    <h6>MRP: ₹499</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/19.jpg" class="card-img-top rounded-5 object-fit-cover" style="height:16rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Minimalist Light Fluid SPF 50 Face Sunscreen</p>
                    <h6>MRP: ₹499</h6>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="text-center mt-4">
      <span class="dot active"></span>
      <span class="dot"></span>
      <span class="dot"></span>
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


<!-- Start  Animation  -->
<script>
  window.addEventListener('load', () => {
    document.getElementById('arrivalsText').classList.add('visible');
    document.getElementById('heroQuote').classList.add('visible');
  });
</script>
<!-- End Animation  -->
<?php include 'Footer.php';?>
</body>
</html>
