<?php

$conn = mysqli_connect("localhost", "root", "", "nsbm_bazaar_db");

if (isset($_POST['update_product'])) {
    $id = $_POST['id'];
    $p_name = $_POST['p_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $sql = "UPDATE product
            SET p_name='$p_name',
                category='$category',
                price='$price',
                stock='$stock'
            WHERE id='$id'";
    mysqli_query($conn, $sql);

    header("Location: ../admin-pages/products.php");
}
