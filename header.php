<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body class="home-body">

    <nav>
        <a class="my_logo" href="./index.php">NSBM Bazaar</a>
        <ul>
            <li>
                <a href="./index.php#products_menu">Products</a>
            </li>
            <li>
                <a href="./contact_us.php">Contact</a>
            </li>
            <?php

            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            if (
                isset($_SESSION['u_email']) &&
                isset($_SESSION['u_password']) &&
                $_SESSION['u_role'] == 'admin'

            ) { ?>
                <li>
                    <a class=" admin_btn" href="./admin-pages/products.php">Admin</a>
                </li>
                <li>
                    <a class=" admin_btn" href="./about_us.php">About Us</a>
                </li>
                <li>
                    <a class="logout_btn" href="./login-register-pages/logout.php">Logout</a>
                </li>
            <?php
            } else if (
                isset($_SESSION['u_email']) &&
                isset($_SESSION['u_password']) &&
                $_SESSION['u_role'] == 'user'
            ) {
            ?>
                <li>
                    <a href="./your_order.php">Your Orders</a>
                </li>
                <li>
                    <a class=" admin_btn" href="./about_us.php">About Us</a>
                </li>
                <li>
                    <a class="logout_btn" href="./login-register-pages/logout.php">Logout</a>
                </li>

            <?php
            } else { ?>
                <li>
                    <a class=" admin_btn" href="./about_us.php">About Us</a>
                </li>
                <li>
                    <a href="./login-register-pages/register_page.php">Register</a>
                </li>

                <li>
                    <a href="./login-register-pages/login_page.php">Login</a>
                </li>
            <?php } ?>

        </ul>
    </nav>