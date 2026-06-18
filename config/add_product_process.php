<?php

$conn = mysqli_connect("localhost", "root", "", "nsbm_bazaar_db");
if (isset($_POST['add_product'])) {
    $p_name = $_POST['p_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $image = $_FILES['image']['name'];

    $target = "../admin-pages/product_image/" . $image;
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

        echo "Image uploaded";
    } else {

        echo "Upload failed";
    }
    $sql = "INSERT INTO product(p_name, category, price, stock, image)
        VALUES('$p_name', '$category', '$price', '$stock', '$image')";

    $data = mysqli_query($conn, $sql);
    if ($data) {
        header('location:../admin-pages/products.php');
    }
}
