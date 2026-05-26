<?php
$cart_count = 0;

if (!empty($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $count_sql = mysqli_query($conn, "SELECT SUM(qty) as total FROM cart WHERE email='$email'");
    $count_row = mysqli_fetch_assoc($count_sql);
    $cart_count = $count_row['total'] ? $count_row['total'] : 0;
}
?>