<?php
session_start();
if (empty($_SESSION['email'])) {
    echo "<script>
            window.location = 'login.php';
    </script>";
    exit();
}
?>


<?php
session_start();
include 'pages/header.php';
include 'pages/sidebar.php';
include 'pages/topright.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>

<style>
    .card-icon {
        height: 120px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
    }

    .bg1,
    .bg2 {
        border-radius: 50px 50px 0px 0px;
    }

    .btn-outline {
        background-color: rgb(82, 6, 6);
        color: #fff;
        float: right;
        border-radius: 5px;
        margin-top: -40px;
    }

    .btn-outline:hover {
        background-color: rgb(82, 6, 6);
        color: #fff;
        float: right;
        border-radius: 5px;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success mt-3"><?php echo $_SESSION['success'];
                unset($_SESSION['success']); ?></div>
            <?php endif; ?>
            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger mt-3"><?php echo $_SESSION['error'];
                unset($_SESSION['error']); ?></div>
            <?php endif; ?>

            <h4 style="padding-left: 15px; padding-top:50px"><b>Categories</b></h4>
            <a href="#" class="btn btn-outline btn-lg" data-toggle="modal" data-target="#exampleModal"> Add New Menu</a>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Add Menu Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="sql/addmenu.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Item Name</label>
                        <input type="text" name="item_name" class="form-control" placeholder="Item Name" required>
                        <label>Price</label>
                        <input type="number" name="price" class="form-control" placeholder="Price" required>
                        <label>Category</label>
                        <input type="text" name="category" class="form-control" placeholder="Category">
                        <label>Availability</label>
                        <input type="text" name="availability" class="form-control" placeholder="Availability">
                        <label>Image</label>
                        <input type="file" name="img" class="form-control" required>
                        <label>Description</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                    <div class="modal-footer mt-2">
                        <input type="submit" name="ok" value="Add" class="btn btn-success">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-4">
    <div class="row mt-2">
        <?php
        include 'config.php';
        $sql = "SELECT * FROM food_menu";
        $tbl = mysqli_query($conn, $sql);
        if (mysqli_num_rows($tbl) > 0) {
            while ($row = mysqli_fetch_array($tbl)) {
                ?>
                <div class="col-md-2 col-sm-12 p-3">
                    <div class="card-icon">
                        <center>
                            <img src="img/<?php echo $row['image']; ?>" alt="..." height="65px" width="90px" class="bg1 mt-3">
                            <p><?php echo $row['item_name']; ?></p>
                        </center>
                    </div>
                </div>
                <?php
            }
        }
        ?>
</div>

    <?php include 'pages/footer.php'; ?>