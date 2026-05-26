<?php
include 'Admin/config.php';

$id = $_GET['id'];
$type = $_GET['type'];

if ($type == "inc") {
    mysqli_query($conn, "UPDATE cart SET qty = qty + 1 WHERE id='$id'");
}

if ($type == "dec") {
    mysqli_query($conn, "UPDATE cart SET qty = qty - 1 WHERE id='$id' AND qty > 1");
}

header("Location: cart.php");
?>