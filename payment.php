<?php
session_start();
if (empty($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$amount = $_POST['grand_total'];
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment|Food Express</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <section class="payment-area">
        <div class="container mt-5">
            <div class="card shadow p-4">
                <h3 class="text-center mb-4">Payment Page</h3>

                <h5>Total Amount to Pay: <span class="text-success">₹
                        <?php echo $amount; ?>
                    </span></h5>
                <hr>

                <form action="place_order.php" method="post">
                    <input type="hidden" name="amount" value="<?php echo $amount; ?>">

                    <div class="mb-3" id="form">
                        <label class="form-label">Select Payment Method</label>
                        <select class="form-control" name="payment_method" required>
                            <option value="">-- Select --</option>
                            <option value="COD">Cash On Delivery</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary w-100" id="pay-btn">Pay Now</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>