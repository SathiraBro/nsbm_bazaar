<?php
require_once(__DIR__ . '/dbcon.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];


$query = "INSERT INTO user(name,email,password,role) VALUES ('$name','$email','$password','$role')";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Registeration failed!");
} else {
    header("location:../login-register-pages/login_page.php");
}
