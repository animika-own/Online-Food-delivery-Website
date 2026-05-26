<?php
session_start();
include 'Admin/config.php';

if (empty($_SESSION['email'])) {
        header("Location: login.php");
        exit();
}

$email = $_SESSION['email'];
$amount = $_POST['amount'];
$payment = $_POST['payment_method'];

// Insert into orders table
$sql = "INSERT INTO orders (email, total_amount, payment_method, order_date)
        VALUES ('$email', '$amount', '$payment', NOW())";

mysqli_query($conn, $sql);

mysqli_query($conn, "UPDATE cart 
                     SET Status = 1 
                     WHERE email='$email' AND Status = 0");

echo "<script>
        alert('Order Placed Successfully!');
        window.location='index.php';
      </script>";
?>