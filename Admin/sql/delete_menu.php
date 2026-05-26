<?php
session_start();

if (isset($_GET['id'])) {

    include '../config.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM food_menu WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Menu Item Deleted Successfully";
    } else {
        $_SESSION['error'] = "Failed to Delete Menu Item";
    }

    header("Location: ../view_menu.php");
    exit();
}
?>
