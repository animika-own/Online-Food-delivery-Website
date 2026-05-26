<?php
session_start();

if (isset($_POST['ok'])) {

    include '../config.php';

    $item_name    = $_POST['item_name'];
    $price        = $_POST['price'];
    $category     = $_POST['category'];
    $availability = $_POST['availability'];
    $description  = $_POST['description'];

    // Image upload
    $image = $_FILES['img']['name'];
    $tmp   = $_FILES['img']['tmp_name'];

    move_uploaded_file($tmp, "../img/" . $image);

    $sql = "INSERT INTO food_menu 
            (item_name, price, category, availability, image, description) 
            VALUES 
            ('$item_name', '$price', '$category', '$availability', '$image', '$description')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Menu Item Added Successfully";
    } else {
        $_SESSION['error'] = "Failed to Add Menu Item";
    }

    header("Location: ../index.php");
    exit();
}
?>
