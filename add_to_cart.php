<?php
session_start();
include 'Admin/config.php';

if (!empty($_SESSION['email']) && isset($_POST['add_cart'])) {

    $email = $_SESSION['email'];
    $item_name = $_POST['item_name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    // Check if item already in cart
    $check_sql = "SELECT * FROM cart WHERE email='$email' AND item_name='$item_name'";
    $check = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($check) > 0) {
        // Increase quantity
        $update_sql = "UPDATE cart SET qty = qty + 1 
                       WHERE email='$email' AND item_name='$item_name'";
        mysqli_query($conn, $update_sql);
    } else {
        // Insert new item with Status = 0
        $insert_sql = "INSERT INTO cart (email, item_name, price, image, qty, Status)
                       VALUES ('$email', '$item_name', '$price', '$image', 1, 0)";
        mysqli_query($conn, $insert_sql);
    }

    header("Location: cart.php");
    exit();
} else {
    header("Location: login.php");
    exit();
}
?>
