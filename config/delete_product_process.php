<?php

$conn = mysqli_connect("localhost", "root", "", "nsbm_bazaar_db");

if (!$conn) {
    die("Connection Failed");
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$query = "DELETE FROM product WHERE id = '$id'";
$result = mysqli_query($conn, $query);

if ($result) {
    header('Location:../admin-pages/products.php');
} else {
    die("Could't Deleted");
}
