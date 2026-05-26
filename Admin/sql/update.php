<?php
include '../config.php';

$id = $_POST['id'];
$item_name = $_POST['item_name'];
$price = $_POST['price'];
$category = $_POST['category'];
$availability = $_POST['availability'];
$description = $_POST['description'];

if ($_FILES['img']['name'] != '') {
    $img = $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], '../img/' . $img);

    $upd = "UPDATE food_menu SET 
            item_name='$item_name', 
            price='$price', 
            category='$category', 
            availability='$availability',
            image='$img', 
            description='$description' 
            WHERE id='$id'";
} else {
    $upd = "UPDATE food_menu SET 
            item_name='$item_name', 
            price='$price', 
            category='$category', 
            availability='$availability',
            description='$description' 
            WHERE id='$id'";
}

if (mysqli_query($conn, $upd)) {
    echo "<script>
            alert('Details Updated!!');
            window.location = '../view_menu.php';
    </script>";
} else {
    echo 'error' . mysqli_error($conn);
}
?>