<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shivani's Care</title>
    <!-- <link rel="stylesheet" href="styles/index.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    .hero {
      background: linear-gradient(to right, #d1006e, #e47300);
      color: white;
      padding: 0px 0px;
      text-align: center;
    }

    .hero h1 {
      font-size: 3.5rem;
      font-weight: bold;
      letter-spacing: 1px;
    }

    .hero p {
      font-size: 1.25rem;
      margin: 10px 0;
    }
    
    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2.5rem;
      }

      .hero p {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>
    <?php include 'Navbar.php';?>
   <div class="container">
    <section class="hero d-md-flex" style="width:100%; height:400px; margin-top:45px">
  <div class="col-md-12 bg-pink text-white p-5 d-flex flex-column justify-content-center position-relative">

    <!-- Background Text -->
    <h1 class="display-1 fw-bold text-center" style="font-size:200px; opacity: 0.3; color: #FBFF12;">MAKEUP</h1>

   <!-- Main Headline -->
    <h3 class="text-center fw-bold" style="font-size:40px;">Your Face Your <br> Power.</h3>

    <!-- Subheading -->
    <p class="small mt-0 text-center" style="color: #FBFF12;">Beauty, Redefined. Confidence, Amplified.</p>
  </div>
</section>
   </div>     


<!-- New Arrivals -->
<section class="container py-3">
    <h2 class="fw-bold mb-4 text-center">New Arrivals</h2>
<!-- face -->
    <h2 class="fw-bold mb-4" style="color:#C7026E;">Face</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <!-- Card 1 -->
        <div class="col">
            <div class="card h-100 border-0"> <!-- Removed rounded-5 from card -->
                <img src="images/face1.png" class="card-img-top rounded-5 object-fit-cover" style="height: 18rem;" alt="Product Image">
                <div class="card-body px-0"> <!-- Added px-0 to remove horizontal padding -->
                    <p class="card-text">Renee Cosmetics Bollywood Filter Face Primer</p>
                    <h6>MRP: ₹359</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/face2.png" class="card-img-top rounded-5 object-fit-cover" style="height:18rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Kay Beauty HD Liquid Concealer - 170P Tan</p>
                    <h6>MRP: ₹679</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/face3.png" class="card-img-top rounded-5 object-fit-cover" style="height:18rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Lakme 9 To 5 Cc Vitamin E & Hint Of Foundation Beige</p>
                    <h6>MRP: ₹899</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/face4.png" class="card-img-top rounded-5 object-fit-cover" style="height:18rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Daily Life Forever52 Ultra Definition Liquid Foundation </p>
                    <h6>MRP: ₹799</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Eyes -->
<section class="container py-3">
    <h2 class="fw-bold mb-4" style="color:#C7026E;">Eyes</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <!-- Card 1 -->
        <div class="col">
            <div class="card h-100 border-0"> <!-- Removed rounded-5 from card -->
                <img src="images/eyes1.png" class="card-img-top rounded-5 object-fit-cover" style="height: 18rem;" alt="Product Image">
                <div class="card-body px-0"> <!-- Added px-0 to remove horizontal padding -->
                    <p class="card-text">Maybelline New York  Gel Pencil Eyeliner</p>
                    <h6>MRP: ₹509</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/eyes2.png" class="card-img-top rounded-5 object-fit-cover" style="height:18rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Maybelline New York Lash Sensational High Mascara</p>
                    <h6>MRP: ₹503</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/eyes3.png" class="card-img-top rounded-5 object-fit-cover" style="height:18rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Nykaa Eyeshadow Palette</p>
                    <h6>MRP: ₹244</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/eyes4.png" class="card-img-top rounded-5 object-fit-cover" style="height:18rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">SUGAR The Most Eligiblur Correcting Prime</p>
                    <h6>MRP: ₹679</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tools & Brushes -->
<section class="container py-3">
    <h2 class="fw-bold mb-4" style="color:#C7026E;">Tools & Brushes</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <!-- Card 1 -->
        <div class="col">
            <div class="card h-100 border-0"> <!-- Removed rounded-5 from card -->
                <img src="images/tools1.png" class="card-img-top rounded-5 object-fit-cover" style="height: 18rem;" alt="Product Image">
                <div class="card-body px-0"> <!-- Added px-0 to remove horizontal padding -->
                    <p class="card-text">MARS 4 In 1 Travel Brush</p>
                    <h6>MRP: ₹619</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/tools2.png" class="card-img-top rounded-5 object-fit-cover" style="height:18rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">GUBB Eyelash Curler For Women</p>
                    <h6>MRP: ₹289</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/tools3.png" class="card-img-top rounded-5 object-fit-cover" style="height:18rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">PAC Absolute Basics Brush Set</p>
                    <h6>MRP: ₹4496</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/tools4.png" class="card-img-top rounded-5 object-fit-cover" style="height:18rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Kayanara Transparent Makeup Kit</p>
                    <h6>MRP: ₹406</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Nails -->
<section class="container py-3">
    <h2 class="fw-bold mb-4" style="color:#C7026E;">Nails</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <!-- Card 1 -->
        <div class="col">
            <div class="card h-100 border-0"> <!-- Removed rounded-5 from card -->
                <img src="images/nails1.png" class="card-img-top rounded-5 object-fit-cover" style="height: 18rem;" alt="Product Image">
                <div class="card-body px-0"> <!-- Added px-0 to remove horizontal padding -->
                    <p class="card-text">Lakme Color Crush Nailart U4</p>
                    <h6>MRP: ₹199</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/nails2.png" class="card-img-top rounded-5 object-fit-cover" style="height:18rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Nykaa Cosmetics Vegan Nail Enamel</p>
                    <h6>MRP: ₹180</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/nails3.png" class="card-img-top rounded-5 object-fit-cover" style="height:18rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Close up of nail polish</p>
                    <h6>MRP: ₹530</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/nails4.png" class="card-img-top rounded-5 object-fit-cover" style="height:18rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Colorbar Nail Polish Remover</p>
                    <h6>MRP: ₹410</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Makeup Kits & Combos -->
<section class="container py-3">
    <h2 class="fw-bold mb-4" style="color:#C7026E;">Makeup Kits & Combos</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <!-- Card 1 -->
        <div class="col">
            <div class="card h-100 border-0"> <!-- Removed rounded-5 from card -->
                <img src="images/kits1.png" class="card-img-top rounded-5 object-fit-cover" style="height: 18rem;" alt="Product Image">
                <div class="card-body px-0"> <!-- Added px-0 to remove horizontal padding -->
                    <p class="card-text">Maybelline New York The Colossal Combo</p>
                    <h6>MRP: ₹689</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/kits2.png" class="card-img-top rounded-5 object-fit-cover" style="height:18rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Maybelline New York Super Stay Matte Ink</p>
                    <h6>MRP: ₹1689</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/kits3.png" class="card-img-top rounded-5 object-fit-cover" style="height:18rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Faces Canada Glow With The Flow Duo</p>
                    <h6>MRP: ₹899</h6>
                </div>
            </div>
        </div>
        
        <!-- Card 4 -->
        <div class="col">
            <div class="card h-100 border-0">
                <img src="images/kits4.png" class="card-img-top rounded-5 object-fit-cover" style="height:18rem;" alt="Product Image">
                <div class="card-body px-0">
                    <p class="card-text">Nykaa Tools & Accessories Beginner Makeup Brush</p>
                    <h6>MRP: ₹1247</h6>
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
    <div class="container d-flex justify-content-center gap-3 flex-wrap">
      <img src="images/logo1.png" class="img-fluid" width="160" alt="Brand 1" />
      <img src="images/logo2.png" class="img-fluid" width="160" alt="Brand 2" />
      <img src="images/logo3.png" class="img-fluid" width="160" alt="Brand 3" />
      <img src="images/logo4.png" class="img-fluid" width="160" alt="Brand 4" />
      <img src="images/logos.png" class="img-fluid" width="160" alt="Brand 5" />
      <img src="images/logop.png" class="img-fluid" width="160" alt="Brand 6" />
    </div>
    <hr>
  </section>

  <section class="text-center py-5 pt-5">
    <div class="container d-flex justify-content-center gap-5  flex-wrap">
      <img src="images/image2.png" class="img-fluid" width="250" alt="poster 1" />
      <img src="images/image3.png" class="img-fluid" width="250" alt="poster 2" />
      <img src="images/image4.png" class="img-fluid" width="250" alt="poster 3" />
    </div>
  </section>




    <?php include 'footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>