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
    .card-body {
        height: auto;
        background-color: #fff;
        margin-top: 100px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card-body p-3">
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>SNo.</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM user_register";
                        $tbl = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($tbl) > 0) {
                            while ($row = mysqli_fetch_array($tbl)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['full_name'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td>
                                        <?php echo $row['password'] ?>
                                    </td>
                                    <td><a href="sql/delete_user.php?id=<?php echo $row['id']; ?>"
                                            class="btn btn-sm btn-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'pages/footer.php'; ?>