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
                <?php
                include 'config.php'; // database connection
                
                $sql = "SELECT 
        o.id AS order_id,
        o.email,
        o.total_amount,
        o.order_date,
        o.payment_method,
        c.item_name,
        c.price AS item_price,
        c.qty,
        c.image,
        c.Status
    FROM orders o
    LEFT JOIN cart c ON o.email = c.email
    ORDER BY o.order_date DESC";

                $result = mysqli_query($conn, $sql);
                ?>


                <!DOCTYPE html>
                <html>

                <head>
                    <title>All Orders Details</title>
                    <style>
                        table {
                            width: 100%;
                            border-collapse: collapse;
                        }

                        th,
                        td {
                            border: 1px solid #ddd;
                            padding: 10px;
                            text-align: center;
                        }

                        th {
                            background-color: #640303;
                            ;
                            color: white;
                        }

                        img {
                            width: 60px;
                            height: 60px;
                        }
                    </style>
                </head>

                <body>

                    <h2 style="text-align:center;">All Orders & Cart Details</h2>

                    <table>
                        <tr>
                            <th>Order ID</th>
                            <th>User Email</th>
                            <th>Total Amount</th>
                            <th>Order Date</th>
                            <th>Payment Method</th>
                            <th>Item Name</th>
                            <th>Item Price</th>
                            <th>Quantity</th>
                            <th>Item Image</th>
                            <th>Action</th>
                        </tr>

                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {

                            if ($row['Status'] == 1) {
                                $statusBtn = "<button style='background:green;color:white;border:none;padding:6px 10px;border-radius:5px;'>Completed</button>";
                            } else {
                                $statusBtn = "<button style='background:red;color:white;border:none;padding:6px 10px;border-radius:5px;'>Pending</button>";
                            }

                            echo "<tr>
        <td>" . $row['order_id'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['total_amount'] . "</td>
        <td>" . $row['order_date'] . "</td>
        <td>" . $row['payment_method'] . "</td>
        <td>" . $row['item_name'] . "</td>
        <td>" . $row['item_price'] . "</td>
        <td>" . $row['qty'] . "</td>
        <td><img src='img/" . $row['image'] . "'></td>
        <td>$statusBtn</td>
    </tr>";
                        }
                        ?>

                    </table>

                </body>

                </html>

            </div>
        </div>
    </div>
</div>

<?php include 'pages/footer.php'; ?>