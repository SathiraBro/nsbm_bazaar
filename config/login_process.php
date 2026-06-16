<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "nsbm_bazaar_db");

if (!$conn) {
    die("Connection Failed");
}

$email = $_POST['email'];
$password = $_POST['password'];

$_SESSION['u_email'] = $email;
$_SESSION['u_password'] = $password;

$sql = "SELECT * FROM user
        WHERE email='$email'";

$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);

if ($user['email'] == $email && $user['password'] == $password && $user['role'] == 'admin') {
    header("location:../admin-pages/admin_page.php");
} else if ($user['email'] == $email && $user['password'] == $password && $user['role'] == 'user') {
    header("location:../index.php");
} else {
    header("location:../login-register-pages/login_page.php?message=Email or password is incorrect. Please try again.");
}
