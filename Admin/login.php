<?php
session_start();
if(!empty($_SESSION['email'])){
    echo "<script>
            window.location = 'index.php';
    </script>";
    exit();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login | FoodExpress</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #eeeeee;
            font-family: 'Poppins', sans-serif;
        }

        .login-card {
            max-width: 400px;
            margin: auto;
            margin-top: 10%;
            padding: 30px;
            border-radius: 15px;
            background: #ffffff;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .login-title {
            color: #6b0f0f;
            font-weight: 600;
        }

        .form-control:focus {
            border-color: #6b0f0f;
            box-shadow: 0 0 0 0.2rem rgba(107, 15, 15, 0.25);
        }

        .btn-maroon {
            background-color: #6b0f0f;
            color: #fff;
            border-radius: 8px;
        }

        .btn-maroon:hover {
            background-color: #8b1a1a;
            color: #fff;
        }

        .brand {
            font-size: 26px;
            font-weight: 600;
            color: #6b0f0f;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="login-card">

        <div class="text-center mb-4">
            <div class="brand">Food Express</div>
            <small class="text-muted">Admin Panel Login</small>
        </div>
        <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label">Admin Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>
            <div class="d-grid mt-4">
                <input type="submit" class="btn btn-maroon" name="login" value="Login">
            </div>
        </form>
    </div>
</div>

</body>
</html>


<?php

include 'config.php';

if(isset($_POST['email'])){

$sqll = mysqli_query($conn, "SELECT * FROM admin WHERE email='$_POST[email]' AND password='$_POST[password]'");

if(mysqli_num_rows($sqll)>0){
    $_SESSION['email'] = $_POST['email'];

    header('Location:index.php');
}
else{
    echo "<script>
        alert('Wrong Information Provided');
    </script>";
}

}

?>



