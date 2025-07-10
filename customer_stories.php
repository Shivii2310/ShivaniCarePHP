<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Customer Stories - Shivani's Care</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fff6f9;
      margin: 0;
      padding: 0;
      color: #333;
    }

    .stories-wrapper {
      max-width: 1000px;
      margin: 2rem auto;
      padding: 2rem;
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .stories-wrapper h1 {
      text-align: center;
      color: #d63384;
      margin-bottom: 1.5rem;
    }

    .story-card {
      background-color: #fff0f5;
      border-left: 5px solid #d63384;
      padding: 1.5rem;
      margin-bottom: 1.5rem;
      border-radius: 8px;
    }

    .story-card h5 {
      margin-bottom: 0.5rem;
      color: #d63384;
    }

    .story-card small {
      color: #666;
    }

    .story-card p {
      margin-top: 1rem;
      font-size: 1rem;
    }

    .testimonial-footer {
      text-align: center;
      margin-top: 2rem;
      font-size: 0.9rem;
      color: #777;
    }

    @media (max-width: 768px) {
      .stories-wrapper {
        padding: 1rem;
      }
    }
  </style>
</head>
<body>

  <?php include 'Navbar.php'; ?>

  <div class="stories-wrapper">
    <h1>💬 Customer Stories</h1>
    <p style="text-align: center;">Hear what our happy customers say about their beauty journey with Shivani's Care!</p>

    <div class="story-card">
      <h5>Anjali Mehra <small>from Mumbai</small></h5>
      <p>"I was skeptical about ordering skincare online, but Shivani’s Care proved me wrong! The products are original, the packaging is top-notch, and delivery was super quick. My skin feels amazing!"</p>
    </div>

    <div class="story-card">
      <h5>Pooja Arora <small>from Delhi</small></h5>
      <p>"I ordered a haircare combo during their sale. Everything arrived safely, and it actually works! What I love most is their prompt customer service. Definitely ordering again."</p>
    </div>

    <div class="story-card">
      <h5>Ritika Sharma <small>from Bangalore</small></h5>
      <p>"The makeup collection is just perfect. I bought lipstick, blush, and kajal, and all are cruelty-free and long-lasting. Shivani’s Care is now my go-to beauty shop!"</p>
    </div>

    <div class="story-card">
      <h5>Shreya Sinha <small>from Pune</small></h5>
      <p>"I once received a broken product, and the return was so easy. Their support team responded in minutes and resolved everything. That’s real care. Love you guys!"</p>
    </div>

    <div class="testimonial-footer">
      &copy; 2025 Shivani's Care. Real beauty, real stories.
    </div>
  </div>

</body>
</html>
