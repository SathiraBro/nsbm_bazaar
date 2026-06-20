<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "nsbm_bazaar_db");
$product_id = $_GET['id'];
$user_email = $_SESSION['u_email'];
$query = "INSERT INTO orders(user_email, product_id)
          VALUES('$user_email', '$product_id')";
mysqli_query($conn, $query);
header("Location: your_order.php");
exit();
