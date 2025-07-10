<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="styles/index.css">
  <title>Shivani's Care</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <title>Help Center - Beauty Shop</title>
  <style>
    body {
      background-color: #fff6f9;
      font-family: 'Segoe UI', sans-serif;
      color: #333;
      line-height: 1.6;
    }

    .help-center-wrapper {
      max-width: 900px;
      margin: 2rem auto;
      padding: 2rem;
      background: #ffffff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    }

    .help-center-title {
      color: #d63384;
      text-align: center;
      margin-bottom: 1rem;
    }

    .help-center-section {
      margin-bottom: 2rem;
    }

    .help-center-subtitle {
      color: #d63384;
      margin-top: 2rem;
    }

    .help-center-link {
      color: #d63384;
      text-decoration: none;
    }

    .help-center-link:hover {
      text-decoration: underline;
    }

    .help-center-faq {
      margin-bottom: 1rem;
    }

    .help-center-footer {
      text-align: center;
      padding: 1rem;
      font-size: 0.9rem;
      color: #777;
      margin-top: 2rem;
    }

    .help-center-contact-box {
      background-color: #fff0f5;
      padding: 1rem;
      border-left: 4px solid #d63384;
      border-radius: 5px;
      margin-top: 1rem;
    }

    @media (max-width: 768px) {
      .help-center-wrapper {
        padding: 1rem;
      }
    }
  </style>
</head>
<body>
  <?php include 'Navbar.php';?>

  <div class="help-center-wrapper">
    <h1 class="help-center-title">🛍️ Help Center</h1>
    <p style="text-align:center;">We're here to help you with all your beauty shopping questions!</p>

    <div class="help-center-section">
      <h2 class="help-center-subtitle">📦 Order-Related Questions</h2>

      <div class="help-center-faq">
        <strong>1. How do I place an order?</strong>
        <p>Browse your favorite beauty products, add them to your cart, and proceed to checkout. Once payment is confirmed, you’ll receive an order confirmation email.</p>
      </div>

      <div class="help-center-faq">
        <strong>2. Can I cancel or change my order?</strong>
        <p>Orders can be modified or canceled within 1 hour. Contact <a href="mailto:support@beautyshop.com" class="help-center-link">support@beautyshop.com</a> immediately for changes.</p>
      </div>

      <div class="help-center-faq">
        <strong>3. Where can I check my order status?</strong>
        <p>Log in to your account and navigate to “My Orders” to track order status and shipping updates.</p>
      </div>
    </div>

    <div class="help-center-section">
      <h2 class="help-center-subtitle">🚚 Shipping & Delivery</h2>

      <div class="help-center-faq">
        <strong>1. What are the shipping charges?</strong>
        <p>Standard: ₹50 (Free above ₹499), Express: ₹99, COD: ₹40 extra.</p>
      </div>

      <div class="help-center-faq">
        <strong>2. How long does delivery take?</strong>
        <p>4–6 business days (Standard), 1–3 days (Express) depending on your location.</p>
      </div>

      <div class="help-center-faq">
        <strong>3. Do you ship internationally?</strong>
        <p>Currently, we only ship within India. Global shipping is coming soon!</p>
      </div>
    </div>

    <div class="help-center-section">
      <h2 class="help-center-subtitle">💳 Payment & Security</h2>

      <div class="help-center-faq">
        <strong>1. What payment methods are accepted?</strong>
        <p>We accept Credit/Debit Cards, UPI, Wallets, Net Banking, and Cash on Delivery (COD).</p>
      </div>

      <div class="help-center-faq">
        <strong>2. Is my payment secure?</strong>
        <p>Yes. We use encrypted, industry-standard payment gateways to ensure 100% secure transactions.</p>
      </div>
    </div>

    <div class="help-center-section">
      <h2 class="help-center-subtitle">🔁 Returns & Refunds</h2>

      <div class="help-center-faq">
        <strong>1. What is your return policy?</strong>
        <p>Returns are accepted within 7 days for sealed, unused products only. Opened beauty items are non-returnable for hygiene reasons.</p>
      </div>

      <div class="help-center-faq">
        <strong>2. How do I request a return?</strong>
        <p>Go to “My Orders” > Select your item > Click “Return.” Or email us at <a href="mailto:returns@beautyshop.com" class="help-center-link">returns@beautyshop.com</a>.</p>
      </div>
    </div>

    <div class="help-center-section">
      <h2 class="help-center-subtitle">🧴 Product & Stock</h2>

      <div class="help-center-faq">
        <strong>1. How do I know if a product suits my skin?</strong>
        <p>Each product page includes detailed usage and skin-type suitability. For help, contact our beauty expert team.</p>
      </div>

      <div class="help-center-faq">
        <strong>2. What if a product is out of stock?</strong>
        <p>Click the “Notify Me” button on the product page. We’ll email you as soon as it’s available again.</p>
      </div>
    </div>

    <div class="help-center-section">
      <h2 class="help-center-subtitle">📞 Still Need Help?</h2>
      <div class="help-center-contact-box">
        <p><strong>Email:</strong> <a href="mailto:support@beautyshop.com" class="help-center-link">support@beautyshop.com</a></p>
        <p><strong>Phone:</strong> +91-9876543210 (Mon–Sat, 10 AM – 6 PM)</p>
        <p><strong>WhatsApp Support:</strong> Coming Soon!</p>
      </div>
    </div>

    <div class="help-center-footer">
      &copy; 2025 Beauty Shop. All rights reserved.
    </div>
  </div>

</body>
</html>
