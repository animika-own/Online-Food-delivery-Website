<?php
session_start();
include 'Admin/config.php';
include 'cart_count.php';
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
        <div class="col-md-4 col-sm-12">
          <img class="d-img" src="img/logo.png" alt="..." height="70px" width="80px" />
        </div>
        <div class="col-md-8 col-sm-12 menu-right">
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
                  <a class="nav-link" href="logout.php">Logout</a>
                  <?php if (!empty($_SESSION['email'])) { ?>
                    <a class="nav-link" href="cart.php">
                      🛒 Cart (
                      <?php echo $cart_count; ?>)
                    </a>
                  <?php } ?>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <!-- Slide -->

  <section class="carousel-area">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">

      <div class="carousel-inner">


        <div class="carousel-item active">
          <img src="img/slide-1.avif" class="d-block w-100" id="slide-img1" alt="..." />

          <div class="carousel-caption" id="carousel-caption-1">
            <h3 class="main-heading">
              Order Food From Best Restaurants<br />
              <span>Quality meals, right on time!</span>
            </h3>
            <p class="blink">Cravings Unlocked! 😋</p>
            <a class="btn" id="slide-btn" href="menu.php" role="button">Order Now</a>
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/slide-2.jpg" class="d-block w-100" id="slide-img2" alt="..." />

          <div class="carousel-caption" id="carousel-caption-1">
            <h3 class="main-heading">
              “Delicious moments delivered to your door”<br />
              <span>Fresh flavors, fast delivery, every time.</span>
            </h3>
            <p class="blink">Taste Happiness Today! 🍽️</p>
            <a class="btn" id="slide-btn" href="menu.php" role="button">Explore Menu</a>
          </div>
        </div>

      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>

    </div>
  </section>



  <!-- About Us -->

  <section class="about mb-5">
    <div class="container mb-5">
      <div class="row">
        <div class="col-md-7 col-sm-12">
          <img class="about-img" src="img/about-us.jpg" alt="..." />
        </div>
        <div class="col-md-5 col-sm-12">
          <h1 class="mb-2 text-center">About Us</h1>
          <hr />
          <p class="text-muted">
            <span class="mb-4">Food Express is an Indian online food ordering platform
              designed to make discovering and ordering food quick and
              effortless. We connect users with a wide range of local
              restaurants, cafes, and kitchens, allowing them to search for
              food, explore menus, and order their favorite meals online from
              one convenient platform.</span>
            <br />Food Express delivers great food experiences while supporting local restaurants. From traditional
            Indian and regional flavors to fast food and global cuisines, we focus on convenience, quality, and customer
            satisfaction—bringing fresh, delicious meals to your doorstep.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Menu -->
  <section class="item-area mb-5">
    <div class="container">
      <h2>Order our best food options</h2>
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="card mt-5">
            <img src="img/biryani.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <!-- <h5 class="card-title text-center">Biryani</h5> -->
              <a href="menu.php" class="btn btn-primary">Biryani</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="card mt-5">
            <img src="img/cake.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <a href="menu.php" class="btn btn-primary">Cake</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="card mt-5">
            <img src="img/poori.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <a href="menu.php" class="btn btn-primary">Poori</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="card mt-5">
            <img src="img/rolls.webp" class="card-img-top" alt="..." />
            <div class="card-body">
              <a href="menu.php" class="btn btn-primary">Rolls</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-3 col-sm-12">
          <div class="card mt-5">
            <img src="Admin/img/beverages.avif" class="card-img-top" alt="..." />
            <div class="card-body">
              <!-- <h5 class="card-title text-center">Biryani</h5> -->
              <a href="menu.php" class="btn btn-primary">Beverages</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="card mt-5">
            <img src="img/thali.webp" class="card-img-top" alt="..." />
            <div class="card-body">
              <a href="menu.php" class="btn btn-primary">Bengali Thali</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="card mt-5">
            <img src="Admin/img/dosa-idli.jpeg" class="card-img-top" alt="..." />
            <div class="card-body">
              <a href="menu.php" class="btn btn-primary">Dosa & Idli</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="card mt-5">
            <img src="img/sweets.webp" class="card-img-top" alt="..." />
            <div class="card-body">
              <a href="menu.php" class="btn btn-primary">Sweets</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Review -->

  <section class="review-area mb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="card" id="card1">
            <div class="card-body">
              <h2 class="card-title text-center mb-4">4.9</h2>
              <div class="card-subtitle mb-2 text-body-secondary text-center mb-4">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </div>
              <p class="card-text text-center mb-4">(30+ Reviews)</p>
              <h4 class="card-text text-center mb-4">
                Where Hunger Meets Happiness
              </h4>
              <img src="img/logo.png" alt="..." />
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="card" id="card2">
            <div class="card-body">
              <div class="row mb-4">
                <div class="col-md-6 col-sm-12">
                  <h2>4.2</h2>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="card-subtitle mb-2 text-body-secondary text-center mb-4">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                </div>
              </div>
              <p>
                “Food Express transformed our online food ordering experience
                with its smooth and user-friendly platform. <br />
                Customers can easily search restaurants, explore menus, and
                place orders without confusion. Order accuracy and delivery
                efficiency improved, leading to higher customer satisfaction.
                We’ve seen a clear increase in repeat orders since partnering
                with Food Express.”
              </p>
              <div class="row mb-4">
                <div class="col-md-6 col-sm-12">
                  <img src="img/client-1.png" alt="..." />
                </div>
                <div class="col-md-6 col-sm-12">
                  <h5>Sarah K.</h5>
                  <p>CEO of SaaSFlow</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="card" id="card2">
            <div class="card-body">
              <div class="row mb-4">
                <div class="col-md-6 col-sm-12">
                  <h2>5</h2>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="card-subtitle mb-2 text-body-secondary text-center mb-4">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                  </div>
                </div>
              </div>
              <p class="mb-5">
                “Food Express made online ordering effortless for both our
                team and our customers. The intuitive interface and real-time
                order updates improved the overall experience. We noticed
                faster order processing and fewer customer complaints within
                weeks. Food Express has become a reliable partner in growing
                our online food business.”
              </p>
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <img src="img/client-2.png" alt="..." />
                </div>
                <div class="col-md-6 col-sm-12">
                  <h5>David R.</h5>
                  <p>Client</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="card" id="card2">
            <div class="card-body">
              <div class="row mb-4">
                <div class="col-md-6 col-sm-12">
                  <h2>4</h2>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="card-subtitle mb-2 text-body-secondary text-center mb-4">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                </div>
              </div>
              <p class="mb-5">
                “I use Food Express regularly because ordering food is quick
                and stress-free. Finding restaurants and dishes is easy, and
                the app runs smoothly every time. My orders arrive on time
                with accurate tracking and clear updates. The variety of
                restaurants and cuisines keeps me coming back. Food Express
                has become my go-to platform for online food delivery.”
              </p>
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <img src="img/client-3.png" alt="..." />
                </div>
                <div class="col-md-6 col-sm-12">
                  <h5>Rahul B.</h5>
                  <p>Client</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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