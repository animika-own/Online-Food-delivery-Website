<?php
session_start();
include 'Admin/config.php';

if (isset($_POST['login'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM user_register WHERE email='$email' AND password='$password'";
  $data = mysqli_query($conn, $sql);

  if (mysqli_num_rows($data) > 0) {

    $_SESSION['email'] = $email;

    echo "<script>
                alert('Successfully logged in!!');
                window.location='index.php';
              </script>";
    exit();
  } else {

    echo "<script>
                alert('Invalid Email or Password');
                window.location='login.php';
              </script>";
    exit();
  }
}
?>


<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Food Express</title>
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <section class="login mt-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 mt-5">
          <img src="img/logo.png" id="logo" alt="..." />
          <h1 class="mt-2 text-center">Welcome to Food Express</h1>
          <hr />
          <p class="text-muted text-center">
            Sign in with your username & password
          </p>
          <form action="login.php" method="POST">
            <div class="form-group">
              <label for="name" class="mb-2">User Name</label>
              <input type="text" name="email" class="form-control" placeholder="UserName" />
              <br />
              <label for="name" class="mb-2">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password" />
            </div>
            <div class="row mt-3">
              <div class="col-md-7 col-sm-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck1" />
                  <label class="form-check-label" for="gridCheck1">
                    Remember me
                  </label>
                </div>
              </div>
              <div class="col-md-5 col-sm-12">
                <a href="">Forgot Password?</a>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-5 col-sm-12">
                <input type="submit" name="login" value="Login" class="btn btn-success mt-3 mb-3" />
              </div>
          </form>
          <div class="col-md-7 col-sm-12 mt-4">
            <p>
              Don't have an account?
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Register
              </button>
            </p>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">

                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create Your Account</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>

                  <form action="register.php" method="POST">
                    <div class="modal-body">
                      <div class="form-group">
                        <label class="mb-2">Full Name</label>
                        <input type="text" name="full_name" class="form-control" placeholder="Full Name" required />
                        <br />

                        <label class="mb-2">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email Address" required />
                        <br />

                        <label class="mb-2">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required />
                      </div>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" name="signup" class="btn btn-primary">Signup</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- </form> -->
      </div>
      <div class="col-md-6 col-sm-12">
        <img src="img/login-page.jpg" alt="..." />
      </div>
    </div>
    </div>
  </section>
</body>

</html>