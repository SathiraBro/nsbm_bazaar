<?php

session_start();
require_once(__DIR__ . '/dbcon.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user
        WHERE email='$email'";

$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);

if ($user['email'] == $email && $user['password'] == $password) {
    header("location:../index.php");
} else {
    echo 'Invalid Data';
}
