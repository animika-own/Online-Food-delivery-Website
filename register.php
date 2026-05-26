<?php
include 'Admin/config.php';

if (isset($_POST['signup'])) {

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql= "SELECT * FROM user_register WHERE email='$email'";
    $data = mysqli_query($conn, $sql);

    if (mysqli_num_rows($data) > 0) {
        echo "<script>
                alert('Email already registered!');
                window.location='login.php';
              </script>";
        exit();
    }

    $sql = "INSERT INTO user_register (full_name, email, password)
            VALUES ('$full_name','$email','$password')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Registration Successful!');
                window.location='login.php';
              </script>";
    } else {
        echo "<script>
                alert('Registration Failed: " . mysqli_error($conn) . "');
                window.location='login.php';
              </script>";
    }
} else {
    header("Location: login.php");
    exit();
}
?>