<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "nsbm_bazaar_db");
$email = $_SESSION['u_email'];
$query = "
UPDATE orders
SET status='Completed'
WHERE user_email='$email'
AND status='Pending'
";
mysqli_query($conn, $query);

header("Location: your_order.php");

exit();
