<?php
session_start();
include 'Admin/config.php';
include 'cart_count.php';

if (empty($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['email'];

// Fetch user cart items
$sql = "SELECT * FROM cart WHERE email='$email' AND Status = 0";
$result = mysqli_query($conn, $sql);

// Calculate total
$total_amount = 0;
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart|Food Express</title>
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
                                data-bs-target="#navbarNavAltMarkup">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-link" href="index.php">Home</a>
                                    <a class="nav-link" href="about.php">About Us</a>
                                    <a class="nav-link" href="menu.php">Menu</a>
                                    <a class="nav-link" href="contact.php">Contact</a>
                                    <a class="nav-link" href="login.php">Login/Register</a>
                                    <a class="nav-link" href="logout.php">Logout</a>
                                    <a class="nav-link" href="cart.php">
                                        🛒 Cart (<?php echo $cart_count; ?>)
                                    </a>

                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Cart -->

    <section class="cart-area">
        <div class="container mt-5">
            <h2 class="mb-4">Your Cart Items</h2>

            <?php if (mysqli_num_rows($result) > 0) { ?>

                <table class="table table-bordered text-center">
                    <tr>
                        <th>Image</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>

                    <?php while ($row = mysqli_fetch_assoc($result)) {
                        $item_total = $row['price'] * $row['qty'];
                        $total_amount += $item_total;
                        ?>

                        <tr>
                            <td>
                                <img src="Admin/img/<?php echo $row['image']; ?>" width="80">
                            </td>
                            <td>
                                <?php echo $row['item_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['price']; ?>
                            </td>
                            <td>
                                <?php echo $row['qty']; ?>
                            </td>
                            <td>
                                <?php echo $item_total; ?>
                            </td>
                            <td>
                                <a href="remove_cart.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>
                            </td>
                        </tr>

                    <?php } ?>

                    <tr>
                        <th colspan="4">Grand Total</th>
                        <th colspan="2">
                            <?php echo $total_amount; ?>
                        </th>
                    </tr>

                </table>

                <form action="payment.php" method="post">
                    <input type="hidden" name="grand_total" value="<?php echo $total_amount; ?>">
                    <button type="submit" class="btn btn-success">Place Order</button>
                </form>
            <?php } else { ?>

                <div class="alert alert-info">Your cart is empty.</div>

            <?php } ?>

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
                            <span>Ground Floor, 16A, 95 Meghdoot, Nehru Place, New Delhi - 110020</span>
                        </p>
                        <p>
                            <i class="fa-solid fa-phone"></i>
                            <span>+91 9831235020</span>
                        </p>
                        <p>
                            <i class="fa-solid fa-envelope"></i>
                            <span>info@foodexpress.com</span>
                        </p>
                    </div>

                    <div class="col-md-4 col-sm-12 mt-5">
                        <h4>Refund / Cancellation Policy</h4>
                        <hr />
                        <p class="mt-3 policy">
                            Orders can be cancelled before preparation begins. Refunds are processed
                            within 5–7 business days.
                        </p>
                    </div>

                    <div class="col-md-4 col-sm-12 mt-5">
                        <h4>Location</h4>
                        <hr />
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.278350055444!"
                            width="100%" height="220px" style="border:0;" loading="lazy"></iframe>
                    </div>

                    <hr class="mt-3" />
                    <div class="mb-3">
                        © 2025 Food Express. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>