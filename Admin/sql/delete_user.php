<?php
session_start();

if (isset($_GET['id'])) {

    include '../config.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM user_register WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "User Deleted Successfully";
    } else {
        $_SESSION['error'] = "Failed to Delete User";
    }

    header("Location: ../user.php");
    exit();
}
?>