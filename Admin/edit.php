<?php
session_start();
if (empty($_SESSION['email'])) {
    echo "<script>
            window.location = 'login.php';
    </script>";
    exit();
}

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

    .bg1 {
        border-radius: 50px 50px 0px 0px;
    }

    .bg2 {
        border-radius: 50px 50px 0px 0px;
    }

    .btn-outline {
        background-color: rgb(82, 6, 6);
        color: #fff;
        float: right;
        border-radius: 5px;
        margin-top: -40px;
        /* margin-bottom: 15px; */
    }

    .btn-outline:hover {
        background-color: rgb(82, 6, 6);
        color: #fff;
        float: right;
        border-radius: 5px;
    }
</style>



<div class="container mt-3">
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
                            <input type="text" name="item_name" class="form-control" placeholder="Item Name">
                            <label>Price</label>
                            <input type="number" name="price" class="form-control" placeholder="Price">
                            <label>Category</label>
                            <input type="text" name="category" class="form-control" placeholder="Category">
                            <label>Availability</label>
                            <input type="text" name="availability" class="form-control" placeholder="Availability">
                            <label>Image</label>
                            <input type="file" name="img" class="form-control">
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

</div>