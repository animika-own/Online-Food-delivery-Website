<?php
session_start();
if (empty($_SESSION['email'])) {
  header("Location: login.php");
  exit();
}
?>


<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Food Express</title>
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <!-- navbar -->

  <section class="navbar-area">
    <div class="container-fluid menu fixed-top">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <img class="d-img" src="img/logo.png" alt="..." height="70px" width="80px" />
        </div>
        <div class="col-md-6 col-sm-12 menu-right">
          <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img class="m-img" src="img/logo.png" alt="..." height="70px" width="80px" />
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link" aria-current="page" href="index.php">Home</a>
                  <a class="nav-link" href="about.php">About Us</a>
                  <a class="nav-link" href="menu.php">Menu</a>
                  <a class="nav-link" href="contact.php">Contact</a>
                  <a class="nav-link" href="login.php">Login/Register</a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->

  <section class="about mt-5">
    <div class="container-fluid">
      <div class="card text-bg-dark mb-4">
        <img src="img/about-page.avif" class="card-img" alt="..." />
        <div class="card-img-overlay">
          <h1 class="card-title">Our Food Story</h1>
          <p class="card-text">From local kitchens to your home</p>
        </div>
      </div>
    </div>

    <div class="container">
      <h2 class="heading text-center">About Us</h2>
      <p class="mt-4 text-muted" id="aboutP">
        <b>Food Express</b> is an Indian online food delivery platform
        inspired by our country’s rich food culture and love for good meals.
        From comforting home-style dishes and regional specialties to popular
        street food and global cuisines, we connect food lovers with trusted
        local restaurants, cafes, and cloud kitchens. With just a few clicks,
        customers can search for food, explore menus, and enjoy fresh meals
        delivered to their doorstep.
      </p>
      <p class="mt-2 text-muted" id="aboutP">
        At Food Express, food is more than convenience—it’s an emotion that
        brings people together. Our platform is built to offer a smooth and
        reliable ordering experience with easy navigation, real-time tracking,
        and dependable delivery partners. We proudly support local restaurants
        and small food businesses, helping them grow while serving customers
        meals made with care and authenticity.
      </p>
      <div class="row mt-5" id="about-mission">
        <div class="col-md-7 col-sm-12">
          <img src="img/about-mission.avif" alt="..." width="100%"/>
        </div>
        <div class="col-md-5 col-sm-12 text-center">
          <h3 class="missionH">Our Mission</h3>
          <hr class="missionH" />
          <p class="missionP text-muted">
            Our mission is to make delicious, hygienic, and affordable food
            accessible to every household. By combining technology with
            India’s diverse culinary traditions, we aim to serve meals that
            satisfy hunger and create joyful moments. We strive to support
            local restaurants and food entrepreneurs by helping them reach
            more customers and grow sustainably. Through reliable delivery,
            transparent processes, and customer-first service, we work to make
            every food experience simple, trustworthy, and fulfilling. At Food
            Express, every meal we deliver carries care, trust, and the taste
            of India.
          </p>
        </div>
      </div>
      <h3 class="visionH text-center mt-5">Our Vision</h3>
      <hr class="visionH" />
      <p class="visionP text-muted">
        Our vision is to become a trusted household name across India by
        building a food delivery ecosystem that respects tradition, embraces
        innovation, and connects people through great food. We aspire to
        bridge the gap between local kitchens and modern technology, making
        regional flavours accessible everywhere. By empowering restaurants and
        delivery partners, we aim to create sustainable growth for all
        stakeholders. Our goal is to redefine food delivery in India with
        reliability, inclusivity, and a deep love for food.
      </p>
      <p class="text-muted mt-5 mb-5">
        At Food Express, we are driven by a simple belief—that good food has
        the power to bring people together. By blending technology with
        India’s rich culinary heritage, we aim to create meaningful food
        experiences for customers while supporting local restaurants and
        communities. As we continue to grow, our commitment remains the same:
        to deliver trust, taste, and convenience in every order, making Food
        Express a reliable companion for every meal.
      </p>
    </div>
  </section>

  <!-- Footer -->

  <section class="footer-area">
    <div class="container-fluid footer mt-5">
      <div class="container">
        <div class="row" id="footer-details">
          <div class="col-md-4 col-sm-12 mt-5">
            <h4>Contact Us</h4>
            <hr />
            <h5 class="mt-3">Food Express Private Limited</h5>
            <p class="mt-3">
              <i class="fa-solid fa-location-dot"></i>
              <span>Ground Floor, 16A, 95 Meghdoot, Nehru Place, New Delhi -
                110020 CIN: U75010AR2026QTC286210</span>
            </p>
            <p>
              <i class="fa-solid fa-phone"></i>
              <span>+91 9831235020</span>
            </p>
            <p>
              <i class="fa-solid fa-envelope"></i>
              <span>info@foodexpress.com</span>
            </p>
            <p>
              Follow us on: <br />
              <span><i class="fa-brands fa-facebook"></i></span>
              <span><i class="fa-brands fa-square-instagram"></i></span>
              <span><i class="fa-brands fa-youtube"></i></span>
              <span><i class="fa-brands fa-twitter"></i></span>
            </p>
          </div>
          <div class="col-md-4 col-sm-12 mt-5">
            <h4>Refund / Cancellation Policy</h4>
            <hr />
            <p class="mt-3 policy">
              We offer users a hassle-free cancellation and refund policy for
              eligible orders. Orders can be cancelled within a limited time
              before preparation begins. Once an order is confirmed or
              prepared, cancellation may not be possible. Approved refunds
              will be processed within 5–7 business days from the date of
              cancellation. The refunded amount is expected to reflect in the
              customer’s account within 7–10 business days, depending on the
              bank and applicable holidays.
            </p>
          </div>
          <div class="col-md-4 col-sm-12 mt-5">
            <h4>Location</h4>
            <hr />
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.278350055444!2d88.42902937405928!3d22.568690433115997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0275ad93c8289b%3A0xc099131033eb5917!2sSDF%20Building%2C%20GP%20Block%2C%20Sector%20V%2C%20Bidhannagar%2C%20Kolkata%2C%20West%20Bengal%20700091!5e0!3m2!1sen!2sin!4v1765619299007!5m2!1sen!2sin"
              width="100%" height="220px" style="border: 0" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <hr class="mt-3" />
          <div class="mb-3">
            By continuing past this page, you agree to Food Express’s Terms of
            Service, Privacy Policy, Cookie Policy, and Content Policies. All
            trademarks are the property of their respective owners. © 2025
            Food Express. All rights reserved.
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>