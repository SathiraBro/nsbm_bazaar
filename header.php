<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="./style.css" />
</head>

<body class="home-body">
    <nav>
        <a class="my_logo" href="./index.php">NSBM Bazaar</a>
        <ul>
            <li>
                <a href="#products_menu">Products</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
            <?php session_start();
            if (
                isset($_SESSION['u_email']) &&
                $_SESSION['u_password']
            ) { ?>
                <li>
                    <a class="admin_btn" href="./admin-pages/overview.php">Admin</a>
                </li>
                <li>
                    <a class="logout_btn" href="./login-register-pages/logout.php">Logout</a>
                </li>
            <?php } else { ?>
                <li>
                    <a href="./login-register-pages/register_page.php">Register</a>
                </li>

                <li>
                    <a href="./login-register-pages/login_page.php">Login</a>
                </li>
            <?php } ?>
        </ul>
    </nav>