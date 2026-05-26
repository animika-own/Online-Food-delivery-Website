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
include 'config.php';
include 'pages/header.php';
include 'pages/sidebar.php';
include 'pages/topright.php';
?>

<style>
    .product-card {
        height: auto;
        background-color: #fff;
        border-radius: 7px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .product-card img {
        border-radius: 10px;
        object-fit: cover;
    }

    .product-card p {
        font-size: 13px;
        margin-bottom: 5px;
    }
</style>

<div class="container mt-5">

    <div class="row">
        <?php
        $sql = "SELECT * FROM food_menu";
        $tbl = mysqli_query($conn, $sql);
        if (mysqli_num_rows($tbl) > 0) {
            while ($row = mysqli_fetch_array($tbl)) {
                ?>
                <div class="col-md-3 mt-3">
                    <div class="product-card p-4 ">
                        <img src="img/<?php echo $row['image'] ?>" alt="..." height="150px" width="100%">
                        <h6 class="text-center mt-2"><?php echo $row['item_name'] ?></h6>
                        <div class="row">
                            <div class="col-3">
                                <p><b>₹<?php echo $row['price'] ?></b></p>
                            </div>
                            <div class="col-9 text-right">
                                <p class="badge bg-info"><?php echo $row['category'] ?></p>
                            </div>
                        </div>
                        <p class="text-muted" style="height: 40px; overflow: hidden;"><?php echo $row['description'] ?></p>
                        <hr>
                        <div class="text-right mb-1">
                            <a href="javascript:void(0)" class="edit-btn btn btn-sm btn-warning " data-toggle="modal"
                                data-target="#menuModal" data-id="<?php echo $row['id']; ?>"
                                data-name="<?php echo $row['item_name']; ?>" data-price="<?php echo $row['price']; ?>"
                                data-cat="<?php echo $row['category']; ?>" data-avail="<?php echo $row['availability']; ?>"
                                data-desc="<?php echo $row['description']; ?>">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a href="sql/delete_menu.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>

<div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Menu Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="sql/update.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="id" id="item_id">
                    <div class="form-group mb-2">
                        <label>Item Name</label>
                        <input type="text" name="item_name" id="item_name" class="form-control" required>
                    </div>
                    <div class="form-group mb-2">
                        <label>Price</label>
                        <input type="number" name="price" id="price" class="form-control" required>
                    </div>
                    <div class="form-group mb-2">
                        <label>Category</label>
                        <input type="text" name="category" id="category" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label>Availability</label>
                        <input type="text" name="availability" id="availability" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label>Image</label>
                        <input type="file" name="img" class="form-control">
                        <small class="text-muted">Old image (for edit)</small>
                        <!-- <img src="img/</?php echo $row['image'];?>" height="40px" width="40px" class="thumbnail-img"> -->
                    </div>
                    <div class="form-group mb-2">
                        <label>Description</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>
                    <!-- <input type="hidden" name="id" value="</?php echo $row['id'];?>"> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" name="edit" id="submitBtn" value="Save" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>

<script>
    // $('.edit-btn').on('click', function() {
    //     $('#modalLabel').text('Edit Menu Item');
    //     $('#submitBtn').val('Update Changes');

    //     $('#item_id').val($(this).data('id'));
    //     $('#item_name').val($(this).data('name'));
    //     $('#price').val($(this).data('price'));
    //     $('#category').val($(this).data('cat'));
    //     $('#availability').val($(this).data('avail'));
    //     $('#description').val($(this).data('desc'));
    // });

    $(document).ready(function () {
        $('.edit-btn').on('click', function () {
            var id = $(this).data('id');
            var name = $(this).data('name');
            var price = $(this).data('price');
            var cat = $(this).data('cat');
            var avail = $(this).data('avail');
            var desc = $(this).data('desc');

            $('#item_id').val(id);
            $('#item_name').val(name);
            $('#price').val(price);
            $('#category').val(cat);
            $('#availability').val(avail);
            $('#description').val(desc);
        })
    })

</script>

<?php include 'pages/footer.php'; ?>