<?php
include 'Admin/config.php';

$id = $_GET['id'];

// Get current quantity
$result = mysqli_query($conn, "SELECT qty FROM cart WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

if ($row['qty'] > 1) {
    // Reduce quantity by 1
    mysqli_query($conn, "UPDATE cart SET qty = qty - 1 WHERE id='$id'");
} else {
    // Delete item if qty is 1
    mysqli_query($conn, "DELETE FROM cart WHERE id='$id'");
}

header("Location: cart.php");
?>