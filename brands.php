<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>BRANDS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
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
  <style>
/* Start Animation  */
.fade-up {
  opacity: 0;
  transform: translateY(40px);
  transition: all 1.2s ease;
}

.fade-up.visible {
  opacity: 1;
  transform: translateY(0);
}
  /* End Animation  */
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
       @media (max-width: 784px) {
       .hero-content h2{
        display:none;
       }
       .hero-content p{
        top: 0;
        bottom: 0;
       }
         .v {
  display:none;
}

.v:active {
   display:none;
}
      }
      
  </style>
</head>
<body>
<?php include 'Navbar.php';?>

<div class="container"> 
   <a href="inxed.php" class="v active text-underline-primary text-green">Brands</a>
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
      <div class="col-md-6 hero-content fade-up"id="brandsQuote">
        <h2>
          Luxury isn't price – it's<br />
          how our products make<br />
          you feel
        </h2>
        <p class="custom-position">Your beauty journey begins with choices<br />that love you back</p>
      </div>
    </div>
  </div>
</section>


<!-- popular logo -->
<section class="container py-5">
    <h2 class="fw-bold mb-4 text-center" style="color: #c3006f;">POPULAR</h2>
    
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
        <div class="card h-100 border-0 d-flex justify-content-center align-items-center"> 
            <img src="images/all logo1.png" class="card-img-top" style="height: auto; width: 65rem;" alt="Product Image">
        </div>
    </div>
</section>

<section class="container py-5">
    <h2 class="fw-bold mb-4 text-center" style="color: #c3006f;">LUXE</h2>
    
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
        <div class="card h-100 border-0 d-flex justify-content-center align-items-center"> 
            <img src="images/all logo5.png" class="card-img-top" style="height: auto; width: 65rem;" alt="Product Image">
        </div>
    </div>
</section>

<section class="container py-5">
    <h2 class="fw-bold mb-4 text-center" style="color: #c3006f;">ONLY AT NAYKAA</h2>
    
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
        <div class="card h-100 border-0 d-flex justify-content-center align-items-center"> 
            <img src="images/all logo3.png" class="card-img-top" style="height: auto; width: 65rem;" alt="Product Image">
        </div>
    </div>
</section>

<section class="container py-5">
    <h2 class="fw-bold mb-4 text-center" style="color: #c3006f;">NEW LAUNCHES</h2>
    
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
        <div class="card h-100 border-0 d-flex justify-content-center align-items-center"> 
            <img src="images/all logo4.png" class="card-img-top" style="height: auto; width: 65rem;" alt="Product Image">
        </div>
    </div>
</section>


<!-- Start  Animation  -->
<script>
  window.addEventListener('load', () => {
    // document.getElementById('brandsText').classList.add('visible');
    document.getElementById('brandsQuote').classList.add('visible');
  });
</script>

<!-- End Animation  -->
<?php include 'Footer.php';?>
</div>
</body>
</html>
